<?php
      include_once './models/kiot.php';
     $id_k = isset($_GET['id']) ? $_GET['id'] : '';
     if(!empty($id_k)){
          if(delkiot($id_k) > 0){
            //    redirect('index.php');
            echo '<script language="javascript">';
            echo 'window.location.href = "./index.php"';
            echo '</script>';
          }
     }     
?>


