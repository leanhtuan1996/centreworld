<?php
      include_once './models/user.php';
     $id = isset($_GET['id']) ? $_GET['id'] : '';
     if(!empty($id)){
          if(delUser($id) > 0){
            //    redirect('index.php');
            echo '<script language="javascript">';
            echo 'window.location.href = "./index.php"';
            echo '</script>';
          }
     }     
?>


