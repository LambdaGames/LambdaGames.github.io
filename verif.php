<?php

    session_start();
    if (isset($_POST['code']) && $_POST['code'] == $_SESSION['code'])
        echo 'email est';
    else
     echo 'incorrect';
    

?>