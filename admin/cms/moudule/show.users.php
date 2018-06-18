<?php  
			$users = getAllUsers();
			for ($i=0; $i < count($users); $i++){
																					$name = $users[$i]['name'];
																					$position = $users[$i]['position'];
																					$id = $users[$i]['id'];
																					$address =$users[$i]['address'];
																					$phone_number = $users[$i]['phone_number'];
																					$email =$users[$i]['email'];
																					
							?>
							<?php echo "<tr id=$id>"
							?>
							<td><?php echo $name ?></td>
							<td><?php echo $position ?></td>
							<td><?php echo $email ?></td>	
							<td><?php echo $address ?></td>
							<td><?php echo $phone_number ?></td>	


				<td>
              <button type="button" class="btn btn-block btn-primary"     onclick="location.href='index.php?page=pf&id=<?php echo $id ?>';" ><i class="fa fa-edit"></i> Chỉnh sửa</button>
              </td>
              <td>
              <button type="button" class="btn btn-block btn-danger delete_user"    onclick="location.href='javascript: void(0)';" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
			  </td>	           
				<?php
			};	
          ?>