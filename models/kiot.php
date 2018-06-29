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


function getAllkiot(){
	
	//s	ql
	$sql = "SELECT * FROM `kiot` JOIN `floor` on kiot.id_floor = floor.id_floor order by ID_k";
	
	
	//q	uery
	return db_get_list($sql);
	
}


function geatallKiotbyid_floor($id){
	
	$id = addslashes($id);
	
	$sql = "SELECT * FROM kiot WHERE id_floor = '{$id}' ";
	
	//q	uer
	return db_get_list($sql);
	
}




function getkiottById($ID_k)
{
	
	
	$ID_k = addslashes($ID_k);
	
	
	//s	ql
	$sql = "SELECT * FROM kiot WHERE ID_k = '{$ID_k}'";
	
	
	//q	uery
	return db_get_row($sql);
	
	
}

function getkiottBystatus($status)
{
	
	
	$status = addslashes($status);
	
	
	//s	ql
	$sql = "SELECT * FROM kiot WHERE status = '{$status}'";
	
	
	//q	uery
	return db_get_list($sql);
	
	
}

function getbillbyid($id_b)
{

	$id_b = addslashes($id_b);

	$sql = "SELECT * FROM bill WHERE id_b = '{$id_b}'";

	return db_get_row($sql);
}



function db_kiot_validate($data)
{
	
	// 	Biến chứa lỗi
	$error = array();
	
	
	if (!($error) && isset($data['description']) && $data['description']){
        $sql = "SELECT count(ID_k) as counter FROM kiot WHERE description'".addslashes($data['description'])."'";
        $row = db_get_row($sql);
        if ($row['counter'] > 0){
            $error['description'] = 'thuơng hiệu này đã tồn tại';
        }
    }
	
	
	return $error;
	
}


function db_contract_validate($data)
{
	
	// 	Biến chứa lỗi
	$error = array();
	
	
	if (!isset($data['date_time'])){
		
		$error['date_time'] = 'date_time không được để trống';
		
	}
	
	
	if (!isset($data['ctID'])){
		
		$error['ctID'] = 'ctID không được để trống';
		
	}
	return $error;
	
}


function addkiot($data){
	
	//i	nsert product
	$error = array();
	
	if(isset($data)){
		
		if(db_insert('kiot', $data) == 1){
			
			$error['addkiot'] = 'Thêm sản phẩm thành công, click vào <a href="index.php?page=dssp">đây</a> để trở lại';
			
		}
		else{
			
			$error['addkiot'] = 'Thêm sản phẩm thất bại, click vào <a href="index.php?page=dssp">đây</a> để trở lại';
			
		}
		
	}
	
	return $error;
	
}

function add($data){
	
	//i	nsert product
	$error = array();
	
	if(isset($data)){
		
		if(db_insert('hire', $data) == 1){
			
			$error['add'] = 'Thêm thành công, click vào <a href="index.php?page=dssp">đây</a> để trở lại';
			
		}
		else{
			
			$error['add'] = 'Thêm  thất bại, click vào <a href="index.php?page=dssp">đây</a> để trở lại';
			
		}
		
	}
	
	return $error;
	
}

function delkiot($id_K){
	
	$sql = "DELETE FROM kiot WHERE ID_k= '{$id_K}'";
	
	return db_execute($sql);
	
}

function delbill($id_b){
	
	$sql = "DELETE FROM bill WHERE id_b= '{$id_b}'";
	
	return db_execute($sql);
	
}


function delrq($ID_h){
	
	$sql = "DELETE FROM hire WHERE ID_h= '{$ID_h}'";
	
	return db_execute($sql);
	
}


function editkiotbystatus($ID_k){
	$error = array();
	$status = 1;

	$sql = "UPDATE kiot SET  status = '{$status}'  WHERE ID_k = '{$ID_k}'";

		
	if(db_execute($sql) > 0 ){
		
		$error['editkiotbystatus'] = 'Sửa thông tin thành công';
		
	}
	else{
		
		$error['editkiotbystatus'] = 'Sửa thông tin thất bại';
		
	}
	
	
	return $error;
}





function editkiot($kiot){
	
	$error = array();
	
	$ID_k = $kiot['ID_k'];
	
	$name_k = $kiot['name_k'];
	
	$description = $kiot['description'];
	
	$status = $kiot['status'];
	
	$price = $kiot['price'];
	
	$id_floor = $kiot['id_floor'];

	$image = $kiot['image'];
	
	
	$sql = "UPDATE kiot SET name_k = '{$name_k}', status = '{$status}',image ='{$image}' , description = '{$description}', id_floor = '{$id_floor}',  price = '{$price}' WHERE ID_k = '{$ID_k}'";
	
	
	if(db_execute($sql) > 0 ){
		
		$error['editkiot'] = 'Sửa thông tin thành công, click vào <a href="index.php?page=kt">đây</a> để trở lại';
		
	}
	else{
		
		$error['editkiot'] = 'Sửa thông tin thất bại, click vào <a href="index.php?page=kt">đây</a> để trở lại';
		
	}
	
	
	return $error;
	
}


function getkiotbystatus()
{
	
	$sql = "SELECT * FROM `kiot` WHERE STATUS = '0'";
	
	
	return db_get_list($sql);
	
}



function addcontract($data){
    // Biến chứa lỗi
    $error = array();
	if(isset($data)){
		if(db_insert('contract', $data) == 1){
            
         $error['addcontract'] = 'Đăng kí thành viên thành công ';
		 echo '<script language="javascript">';
		 echo ' window.location.href = "index.php?page=users"';
		 echo '</script>';
        }else{
            $error['addcontract'] = 'thêm contract thất bại';
        }
	}
	return $error;
}

function getallcontract(){
	
	//s	ql
	$sql = "SELECT * FROM contract";
	
	
	//q	uery
	return db_get_list($sql);
	
}

function getContract($id){
	$sql = "SELECT * FROM `contract`, `kiot`, floor, users WHERE `contract`.`ID_k` = `kiot`.`ID_k`and kiot.id_floor = floor.id_floor AND users.email = contract.email and users.id= '$id' ";
	return db_get_row($sql);

}

function getallUserBystatus($status)
{

    //sql
    $sql = "SELECT * FROM users WHERE status = '$status'";

    //query
    return db_get_list($sql);

}

function getallrequest()
{
	
	$sql = "SELECT * FROM `hire`order by 'ID_h'";
	
	
	return db_get_list($sql);
	
}

function getallbill()
{
	
	$sql = "SELECT * FROM `bill`order by 'id_b'";
	
	
	return db_get_list($sql);
	
}


function updaterq($rq){
	$error = array();
	
	$ID_h = $rq['ID_h'];
	$status = $rq['status'];


	$sql = "UPDATE hire SET  status = '{$status}'  WHERE ID_h = '{$ID_h}'";

		
	if(db_execute($sql) > 0 ){
		
		$error['updaterq'] = 'Sửa thông tin thành công, click vào <a href="index.php?page=kt">đây</a> để trở lại';
		
	}
	else{
		
		$error['updaterq'] = 'Sửa thông tin thất bại, click vào <a href="index.php?page=kt">đây</a> để trở lại';
		
	}
	
	
	return $error;
}


function confirm($cf){
	$error = array();
	
	$id_b = $cf['id_b'];
	$status = $cf['status'];


	$sql = "UPDATE bill SET  status = '{$status}'  WHERE id_b = '{$id_b}'";

		
	if(db_execute($sql) > 0 ){
		
		$error['confirm'] = 'Sửa thông tin thành công';
		
	}
	else{
		
		$error['confirm'] = 'Sửa thông tin thất bại';
		
	}
	
	
	return $error;
}


function getrqbyrecruitment($recruitment){
	
	$recruitment = addslashes($recruitment);
	
	$sql = "SELECT * FROM hire WHERE recruitment = $recruitment and `status` = 1 ";
	
	//q	uer
	return db_get_list($sql);
	
}

function getrqbystatus($status){
	
	$status = addslashes($status);
	
	$sql = "SELECT * FROM hire WHERE status = $status ";
	
	//q	uer
	return db_get_list($sql);
	
}

function getallrqbystatus(){
	
	
	$sql = "SELECT * FROM hire WHERE `status` = 1 ";
	
	//q	uer
	return db_get_list($sql);
	
}

function getrqbyid($ID_h)
{
	
	
	$ID_h = addslashes($ID_h);
	
	
	//s	ql
	$sql = "SELECT * FROM hire WHERE ID_h = '{$ID_h}'";
	
	
	//q	uery
	return db_get_row($sql);
	
	
}


function addbill($data){
	
	//i	nsert product
	$error = array();
	
	if(isset($data)){
		
		if(db_insert('bill', $data) == 1){
			
			$error['add'] = 'Thêm thành công, click vào <a href="index.php?page=dssp">đây</a> để trở lại';
			
		}
		else{
			
			$error['add'] = 'Thêm  thất bại, click vào <a href="index.php?page=dssp">đây</a> để trở lại';
			
		}
		
	}
	
	return $error;
	
}

?>


