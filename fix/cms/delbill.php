<?php
      include_once './models/kiot.php';
     $id_b = isset($_GET['id_b']) ? $_GET['id_b'] : '';
     if(!empty($id_b)){
          if(delbill($id_b) > 0){
            //    redirect('index.php');
            echo '<script language="javascript">';
            echo 'window.location.href = "./index.php"';
            echo '</script>';
          }
     }     
?>
