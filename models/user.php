<?php 

$path_helper = ('helper.php');
$path_database = ('database.php');

if(file_exists($path_helper)){
	
	include_once ('./libraries/helper.php');
	
}
else{
	
	include_once '/home/leanhtuan110596/centreworld/libraries/helper.php';
	
}
if(file_exists($path_database)){
	
	include_once ('./libraries/database.php');
	
}
else{
	
	include_once '/home/leanhtuan110596/centreworld/libraries/database.php';
	
}
function getUserByEmail($email)
{

	$email = addslashes($email);
    
	//sql
	$sql = "SELECT * FROM users WHERE email = '{$email}'";

	//query
	return db_get_row($sql);

}

function getUserById($id)
{

    $id = addslashes($id);
    
    //sql
    $sql = "SELECT * FROM users WHERE id = '{$id}'";

    //query
    return db_get_row($sql);

}
function getallUserByemploy()
{

    //sql
    $sql = "SELECT * FROM users WHERE position = 'employ'";

    //query
    return db_get_list($sql);

}

function getUserBycustomer()
{

    //sql
    $sql = "SELECT * FROM users WHERE position = 'customer'";

    //query
    return db_get_list($sql);

}

function getAllUsers()
{
   
    //sql
    $sql = "SELECT * FROM users";

    //query
    return db_get_list($sql);

}

// Hàm validate dữ liệu bảng User
function db_user_validate($data)
{
    // Biến chứa lỗi
    $error = array();
        
    if (isset($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false){
        $error['email'] = 'Email không hợp lệ';
    }
      
     
    /* VALIDATE LIÊN QUAN CSDL */
    // Chúng ta nên kiểm tra các thao tác trước có bị lỗi không, nếu không bị lỗi thì mới
    // tiếp tục kiểm tra bằng truy vấn CSDL
         
    // Email
    if (!($error) && isset($data['email']) && $data['email']){
        $sql = "SELECT count(id) as counter FROM users WHERE email='".addslashes($data['email'])."'";
        $row = db_get_row($sql);
        if ($row['counter'] > 0){
            $error['email'] = 'Email này đã tồn tại';
        }
    }
     
    return $error;
}

function addUser($data){
    // Biến chứa lỗi
	$error = array();
	
	if(isset($data)){
		
		if(db_insert('users', $data) == 1){
			
			$error['addUser'] = 'đăng kí thành công';
			
		}
		else{
			
			$error['addUser'] = 'Đăng kí thất bại';
			
		}
		
	}
	
	return $error;
	
}
function editUser($user){
    $error = array();
    $id = $user['id'];
    $name = $user['name'];
    $address = $user['address'];
    $phone_number = $user['phone_number'];
    $position = $user['position'];

    $sql = "UPDATE users SET name = '{$name}', position = '{$position}', address = '{$address}', phone_number = '{$phone_number}' WHERE id = '{$id}'";
  
    if(db_execute($sql) > 0 ){
      $error['editUser'] = 'Sửa thông tin thành công, click vào <a href="index.php">đây</a> để trở lại';
    }else{
      $error['editUser'] = 'Sửa thông tin thất bại, click vào <a href="index.php">đây</a> để trở lại';
    }
  
    return $error;
  }

function delUser($id){
    $sql = "DELETE FROM users WHERE id = '{$id}'";
    echo '<script language="javascript">';
    echo 'alert("dellet successfully")';
    echo '</script>';
    return db_execute($sql);
}


//reset password user
function resetUser($id){
    $password = md5(123);
    $sql = "UPDATE users SET password = '{$password}' WHERE id = '{$id}'";
    return db_execute($sql);
}




 ?>