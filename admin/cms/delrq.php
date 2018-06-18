<?php
      include_once './models/kiot.php';
     $ID_h = isset($_GET['ID_h']) ? $_GET['ID_h'] : '';
            echo "<script type='text/javascript'>alert('$ID_h');</script>";	
     if(!empty($ID_h)){
          if(delrq($ID_h) > 0){
            //    redirect('index.php');
            // echo '<script language="javascript">';
            // echo 'window.location.href = "./index.php"';
            // echo '</script>';
          }
     }     
?>


