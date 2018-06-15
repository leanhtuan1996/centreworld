<?php  
			$bill = getallbill();

			$ID_k = isset($_GET['ID_k']) ? $_GET['ID_k'] : '';
			for ($i=0; $i < count($bill); $i++){
																					$id_b = $bill[$i]['id_b'];
																					$recruitment = $bill[$i]['recruitment'];
																					$position = $bill[$i]['position'];
																					$salary =$bill[$i]['salary'];
																					$ID_k = $bill[$i]['ID_k'];
																					$price = $bill[$i]['price'];
																		
																					
							?>
							<?php echo "<tr id_b=$id_b>"
							?>							
							<td><?php echo $position ?></td>
							<td><?php echo $salary ?></td>	
							<td><?php
							 if ($recruitment == 1)
							{
								echo 'Nhân viên chính thức ';
							}
							else

							{
								
								echo 	'Nhân viên hợp đồng';
						
							}

									
								
							
							?></td>
							<td><?php echo $ID_k ?></td>
							<td>
							<select class="form-control">
							
							<?php
							if ($status == 0)
							{
							?>
								 <option selected name = 'status' value = "0">Chưa thanh toán</option>
								 <option  name = 'status' value = "1">Đã thanh toán</option>
								 
								 
							<?php							
							}	
							else 	
							{				
							?>
								 <option  name = 'status' value = "0">Chưa thanh toán</option>
								 <option selected name = 'status' value = "1">Đã thanh toán</option>
								 
								 
							<?php							
							}						
							?>


						
                 			 </select>
							  </td>
							<td><?php echo $price ?></td>	
	

              <td>
              <button type="button" class="btn btn-block btn-danger delete_bill" data-id="<?php echo $id_b ?>"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
			  </td>	 
			  <td>
              <button type="button"id="test1" oninput="validateNumber(this);"  class="btn btn-block btn-warning " onclick="location.href='index.php?page=pay&id_b=<?php echo $id_b ?>';"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
			  </td>          
				<?php
			}
		  ?>
		  
