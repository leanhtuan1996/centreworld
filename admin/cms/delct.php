<?php
      include_once './models/users.php';
      include_once './models/kiot.php';
     $ID_CT = isset($_GET['ID_CT']) ? $_GET['ID_CT'] : '';
     $ID_k = getidkbyct($ID_CT);
     editkiotbyct($ID_k['ID_K']);
     if(!empty($ID_CT)){   
          if(delct($ID_CT) > 0){
            //    redirect('index.php');
            // echo '<script language="javascript">';
            // echo 'window.location.href = "./index.php"';
            // echo '</script>';
          }
     }     
?>


