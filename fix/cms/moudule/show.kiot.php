<?php  

$kiot = getAllkiot();
for ($i=0; $i < count($kiot); $i++){
							  $ID_k = $kiot[$i]['ID_k'];
							$name_k = $kiot[$i]['name_k'];
							$description = $kiot[$i]['description'];
							$price = $kiot[$i]['price'];
							 $name_fl = $kiot[$i]['name_floor'];
								$status = $kiot[$i]['status'];
								$img = $kiot[$i]['image'];
				?>
				<?php 
				echo "<tr id=$ID_k>"
				?>
				<td><?php echo $name_k ?></td>
				<td><?php echo $description ?></td>
				<td><?php echo $price ?></td>	
 				<td><?php echo $name_fl ?></td> 
  				<td><?php if ($status == 0)
  {
	echo 'availble';
  }
  else 
  {
	echo 'unavailable';
  }
	?> 
			              
				<td class="product-images"><img src="../<?php echo $img ?>" alt="" width="80"></td>   
				<td>  
				<button type="button" class="btn btn-block btn-primary" onclick="location.href='index.php?page=upkt&ID_k=<?php echo $ID_k ?>';"><i class="fa fa-edit"></i> Chỉnh sửa</button>
			   </td>
			   <td>                    
				<button type="button" class="btn btn-block btn-danger delete_kiot"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
            </td>
 	                       
				<?php 
				echo "</tr>";
				?>                   
	<?php
};	
		?>