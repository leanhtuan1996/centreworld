<?php
        
				date_default_timezone_set('Asia/Saigon');
				include_once '../libraries/database.php';
				include_once '../libraries/helper.php';
				include_once '../libraries/role.php';  
				include_once '../models/user.php';
		
		$error_add = array();
        
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    $user = getUserById($id);  

    $contract = getContract($id);    


    if(is_submit('editUser')){
        $name = input_post('name');
        $position = $_POST['sltParent'];
        $city = input_post('city'); 
        $phone_number = input_post('phone_number'); 
        $address = input_post('address'); 
        $email = input_post('email'); 

        $user_edit = array(
      'id' => $id,
      'name' => $name,
			'position' => $position,
			'city' => $city,
      'phone_number' => $phone_number,
      'address' => $address,
        );

        $error = db_user_validate($user_edit);
        if(!$error){
          $error = editUser($user_edit);
      }
      echo '<script language="javascript">';
      echo 'window.location.href = "index.php?page=users"';
      echo '</script>';
    }     

    
   

?>