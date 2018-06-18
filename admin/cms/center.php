
   <!-- Main content -->
   <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-blue">
            <span class="info-box-icon push-bottom"><a href="?page=kt"  <i class="fa fa-institution"></a></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tổng số kiot</span>
              <span class="info-box-number"><?php   $kiot = getAllkiot();
              for ($i=0; $i < count($kiot); $i++){

							  $status = $kiot[$i]['status'];}
								echo count($kiot); ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 45%"></div>
              </div>
              <span class="progress-description">
                 <?php $ava = getkiottBystatus(0);
                       $unva = getkiottBystatus(1);
                 ?>
                 kiot trống: <?php echo count($ava); ?>
                 kiot đã thuê: <?php echo count($unva); ?>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-green">
            <span class="info-box-icon push-bottom"><a href="?page=users"<i class="fa fa-user-o"></a></i></span>

            <div class="info-box-content">
              <span class="info-box-text">người dùng</span>
              <span class="info-box-number"><?php   $users = getAllUsers();
								echo count($users); ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description"> Nhân viên:
                  <?php $employ = getallUserByemploy(); 
                echo count($employ);
                   ?>

                   Khách hàng:
                  <?php $customer = getUserBycustomer(); 
                echo count($customer);
                   ?>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-purple">
            <span class="info-box-icon push-bottom"><a href="?page=ct"<i class="fa fa-fw fa-file-text"></a></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Hợp đồng</span>
              <span class="info-box-number"><?php   $contract = getallcontract();
								echo count($contract); ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 85%"></div>
              </div>
              <span class="progress-description">
                  Tổng số hợp đồng: <?php 	echo count($contract); ?>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-red">
            <span class="info-box-icon push-bottom"><a href="?page=rq"<i class="ion-ios-chatbubble-outline"></a></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tuyển dụng</span>
              <span class="info-box-number"><?php   $rq = getallrequest();
								echo count($rq); ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
              <?php $approved = getrqbystatus(1);
                    $Unapproved = getrqbystatus(0);
                 ?>
                 Đã duyệt: <?php echo count($approved); ?>
                 Chưa duyệt: <?php echo count($Unapproved); ?>
                  </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
           
              
            </div>
            
        </section>
          <!-- /.content -->