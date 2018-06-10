<?php
      include_once './models/kiot.php';
     $ID_CT = isset($_GET['ID_CT']) ? $_GET['ID_CT'] : '';
     if(!empty($ID_CT)){
          if(delbill($ID_CT) > 0){
            //    redirect('index.php');
            echo '<script language="javascript">';
            echo 'window.location.href = "./index.php"';
            echo '</script>';
          }
     }     
?>
