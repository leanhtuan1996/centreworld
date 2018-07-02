<?php
      include_once './models/users.php';
      include_once './models/kiot.php';
     $ID_CT = isset($_GET['ID_CT']) ? $_GET['ID_CT'] : '';
     if(!empty($ID_CT)){
          if(delct($ID_CT) > 0){
            //    redirect('index.php');
            $kiot = getkiottById( $contract['ID_k']);
            editkiotbystatus1($ID_k);
            echo '<script language="javascript">';
            echo 'window.location.href = "./index.php"';
            echo '</script>';
          }
     }     
?>


