<?php
/* On demmare la session ensuite on la detruit et pour finir on redirige vers Connection.php*/
    session_start();
    session_destroy();
    header('Location:Connection.php');