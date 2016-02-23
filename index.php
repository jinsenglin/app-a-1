<?php
        session_start();

        if (isset($_SESSION['islogged']) && $_SESSION['islogged']) {
                echo "<a href='sign-out.php'>Sign out</a>";
        }
        else {
                echo "<a href='https://140.92.53.170:9443/oauth2/authorize?response_type=code&redirect_uri=http%3A%2F%2F140.92.53.170%3A8888%2Fapp-a-1%2Foauth%2Fcallback&scope=openid&client_id=xeQyi7SC1fwJsDqWNF4O7sFwCFAa
'>Sign in</a>";
        }
?>
