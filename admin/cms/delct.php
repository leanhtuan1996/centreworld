<?php
      include_once './models/users.php';
     $ID_CT = isset($_GET['ID_CT']) ? $_GET['ID_CT'] : '';
     if(!empty($ID_CT)){
          if(delct($ID_CT) > 0){
            //    redirect('index.php');
            echo '<script language="javascript">';
            echo 'window.location.href = "./index.php"';
            echo '</script>';
          }
     }     
?>


