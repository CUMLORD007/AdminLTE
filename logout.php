#file logout.php
<?php
    session_start();
    session_destroy();
    header('location:logout.php'); 