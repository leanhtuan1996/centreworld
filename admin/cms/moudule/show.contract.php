<?php  
			$contract = getallcontract();
			for ($i=0; $i < count($contract); $i++){
				$name = $contract[$i]['name'];
				$ID_k = $contract[$i]['ID_k'];
				$citizenship_card = $contract[$i]['citizenship_card'];
				$ID_CT = $contract[$i]['ID_CT'];
				$kiot = getkiottById($ID_k);
?>
				<?php 
				echo "<tr ID_CT = $ID_CT>"
				?> 
							<td><?php echo $name ?></td>
							<td><?php echo $citizenship_card ?></td>
							<td><?php echo $ID_k ?></td>
							<td><?php echo $kiot['description'] ?></td>
							<td>
              <button type="button" class="btn btn-block btn-danger delete_contract" data-id="<?php echo $ID_CT ?>"    ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
			  </td>	 
				<?php 
				echo "</tr>";
				?> 	          
				<?php
			};	
          ?>