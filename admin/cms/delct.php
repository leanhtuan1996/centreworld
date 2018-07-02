<?php
      include_once './models/users.php';
      include_once './models/kiot.php';
     $ID_CT = isset($_GET['ID_CT']) ? $_GET['ID_CT'] : '';
     $ID_k = isset($_GET['ID_k']) ? $_GET['ID_k'] : '';
     editkiotbystatus1($ID_k);
     if(!empty($ID_CT)){
          if(delct($ID_CT) > 0){
            //    redirect('index.php');
            echo '<script language="javascript">';
            echo 'window.location.href = "./index.php"';
            echo '</script>';
          }
     }     
?>


