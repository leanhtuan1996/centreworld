<?php  
			$rq = getallrequest();

			$ID_k = isset($_GET['ID_k']) ? $_GET['ID_k'] : '';
			for ($i=0; $i < count($rq); $i++){
																					$ID_h = $rq[$i]['ID_h'];
																					$recruitment = $rq[$i]['recruitment'];
																					$position = $rq[$i]['position'];
																					$salary =$rq[$i]['salary'];
																					$ID_k = $rq[$i]['ID_k'];
																					$status = $rq[$i]['status'];
																		
																					
							?>
							<?php echo "<tr ID_h=$ID_h>"
							?>							
							<td><?php echo $position ?></td>
							<td><?php echo number_format ($salary) ?></td>	
							<td><?php
							 if ($recruitment == 1)
							{
								echo 'Nhân viên chính thức ';
							}
							else

							{
								
								echo 	'Nhân viên hợp đồng';
						
							}

									
								
							
							?></td>
							<td><?php echo $ID_k ?></td>
							<td>
							<select class="form-control">
							
							<?php
							if ($status == 0)
							{
							?>
								 <option selected name = 'status' value = "0">Chưa duyệt</option>
								 <option  name = 'status' value = "1">Đã duyệt</option>
								 
								 
							<?php							
							}	
							else 	
							{				
							?>
								 <option  name = 'status' value = "0">Chưa duyệt</option>
								 <option selected name = 'status' value = "1">Đã duyệt</option>
								 
								 
							<?php							
							}						
							?>


						
                 			 </select>
							  </td>
	


				<td>
              <button type="button" class="btn btn-block btn-primary edit"  data-id="<?php echo $ID_h ?>"  ><i class="fa fa-edit"></i> Duyệt</button>
              </td>
              <td>
              <button type="button" class="btn btn-block btn-danger delete_rq" data-id="<?php echo $ID_h ?>"    ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
			  </td>	 
			  <td>
              <button type="button" class="btn btn-block btn-warning " onclick="location.href='index.php?page=addrq&ID_h=<?php echo $ID_h ?>';"   ><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
			  </td>          
				<?php
			}
		  ?>
		  
