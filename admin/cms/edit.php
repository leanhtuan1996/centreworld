
   <?php
      	
          $ID_h = isset($_GET['ID_h']) ? $_GET['ID_h'] : '';    	
          $status = isset($_GET['status']) ? $_GET['status'] : '';    	
 


            
            $rq = array(
            'ID_h' => $ID_h,
            'status' => $status,
            );


          updaterq($rq);

          echo '<script language="javascript">';
          echo 'window.location.href = "index.php?page=rq"';
          echo '</script>';
            

          
         ?>

         
        


        