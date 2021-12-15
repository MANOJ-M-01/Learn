https://stackoverflow.com/questions/25438889/using-session-name-in-php-cannot-access-data

https://stackoverflow.com/questions/24964699/php-how-can-i-create-multiple-sessions

https://www.php.net/manual/en/ref.session.php


    <?php
        session_name('__uauth');

        session_start();

        echo session_name();
        echo session_id();

        $_SESSION['name']="Ram";
        echo $_SESSION['name'];

        session_unset();
        session_destroy();
    ?>

    //server

    <?php
        session_name('PHPSESSID');
        session_start();
        //$_SESSION['name']="Ram";
        //echo session_name()."<br/>";
        var_dump(session_name());

        /*

        if( $_COOKIE['PHPSESSID'] )
        {
            session_id( $_COOKIE['PHPSESSID'] );
            session_start();
        }
        */
        var_dump( $_SESSION );


        //session_start();

        // Executes GC immediately
        // session_gc();

        // Clean up session ID created by session_gc()
        // session_destroy();

    ?>


    