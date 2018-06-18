
   <?php
      	
          $id_b = isset($_GET['id_b']) ? $_GET['id_b'] : '';    	
          $status = isset($_GET['status']) ? $_GET['status'] : '';    	
 


            
            $cf = array(
            'id_b' => $id_b,
            'status' => $status,
            );


          confirm($cf);

          echo '<script language="javascript">';
          echo 'window.location.href = "index.php?page=bill"';
          echo '</script>';
            

          
         ?>

         
        


        