<?php
    
    if(isset($_SESSION['user_admin']))
    {
        unset($_SESSION['user_admin']);
    }

    echo '<script language="javascript">';
    echo 'window.location.href = "index.php?page=index"';
    echo '</script>';
?>