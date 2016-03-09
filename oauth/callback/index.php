<?php
	session_start();

        $ch = curl_init();
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_URL, "https://140.92.53.170:9443/oauth2/token?grant_type=authorization_code&code=" . $_GET["code"] . "&redirect_uri=http%3A%2F%2F140.92.53.170%3A8888%2Fapp-a-1%2Foauth%2Fcallback&client_id=xeQyi7SC1fwJsDqWNF4O7sFwCFAa&client_secret=f_SVBYR7Pno2llFnhLsgXxw6W00a");
        curl_setopt($ch, CURLOPT_POST, true);
        $header[] = "Content-type: application/x-www-form-urlencoded";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result=curl_exec($ch);
        curl_close($ch);

#	var_dump(json_decode($result, true)["error"]);

	$idtoken=json_decode($result, true)["id_token"];
	if (isset($idtoken) && $idtoken) {
		$_SESSION['islogged'] = true;
		echo "<a href='/app-a-1/sign-out.php'>Sign out</a>";
	}
	else {
		echo "?";
	}
?>
