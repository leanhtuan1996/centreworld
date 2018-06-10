
   <?php
      		
          $ID_h = isset($_GET['ID_h']) ? $_GET['ID_h'] : '';    	
          $rq = getrqbyid($ID_h);       
          $error_add = array();  
          if(is_submit('addrq')){
            $position = input_post('position');
            $price =  input_post('price');
            $salary =  input_post('salary');
            $ID_k =  input_post('ID_k');
            $recruitment = input_post('recruitment');
            $date_time = input_post('date_time');

          $rq_add = array(
            'position' => $position,
            'ID_k' => $ID_k,
            'price' => $price,
            'salary' => $salary,
            'recruitment' =>$recruitment,
            'date_time' =>$date_time,

            );

            addbill($rq_add);
        
            

          }
         ?>
        
        <section class="content">

           <!-- /.box-header -->
           <div class="box-body wizard-content">
             
           <form action="" method="POST"enctype="multipart/form-data" class="form-horizontal row-fluid">    
           <!-- Step 1 -->
           <h6 id="steps-uid-0-h-0" tabindex="-1" class="title current">Thêm phí dịch vụ</h6>
           <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false" style="">
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="firstName5"> Vị Trí :</label>
                   <input type="text" class="form-control " name = "position" value="<?php echo $rq ['position'] ?>"  style="cursor: no-drop;" >   </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="lastName1">Lương :</label>
                   <input type="text" class="form-control" name = "salary" value="<?php echo $rq ['salary'] ?>" style="cursor: no-drop;" > </div>
               </div>
             </div>
             
             <div class="row">
             <div class="col-md-6">
             <div class="form-group">
                   <label for="date1">Tuyển dụng:</label>
                   <select class="form-control" name ="recruitment">
							
							<?php
							if ($rq ['recruitment'] == 1)
							{
							?>
								 <option selected name = 'recruitment' value = "1">regular employee(full time)	</option>
								 
								 
							<?php							
							}	
							else 	
							{				
							?>
								 <option selected name = 'recruitment' value = "0">part time employees</option>
								 
								 
							<?php							
							}						
							?>


						
                 			 </select>
               </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="lastName1">Kiot số :</label>
                   <input type="text" class="form-control" name = "ID_k" value="<?php echo $rq ['ID_k'] ?>" style="cursor: no-drop;" d> </div>
               </div>
             </div>

               <div class="row">
             <div class="col-md-6">
                 <div class="form-group">
                   <label for="lastName1">Phí dịch vụ :</label>
                   <input type="text" class="form-control" name = "price" value="" > </div>
               </div>                          
             <div class="col-md-6">
                 <div class="form-group">
                   <label for="lastName1">Thời gian tuyển:</label>
                   <input type="text" class="form-control" name = "date_time" value="<?php echo $rq ['date_time'] ?>" style="cursor: no-drop;" d> </div>
               </div>
             </div>


              
           </section>
           <div class="text-xs-right">
            <button type="submit" class="btn btn-info">Xác nhận</button>
            <input type="hidden" name="request_name" value="addrq"/>
					</div>
           </div>
           <!-- /.box-body -->

         </form>
    
         <!-- /.box -->


        