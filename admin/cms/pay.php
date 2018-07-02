<section class="invoice printableArea">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">
            Hóa đơn

          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          Từ
          <address>
            <strong class="text-red">Centre World Admin</strong><br>
            256 Nguyễn Văn Cừ, Quận Ninh Kiều,<br>
            Thành phố Cần Thơ, VN 123456<br>
            SĐT: (00) 123-456-7890<br>
            Email: info@centreworld.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col text-right">
        Tới vị trí Kiot:
          <address>
          <?php
          $id_b = isset($_GET['id_b']) ? $_GET['id_b'] : '';
          $ID_k = isset($_GET['ID_k']) ? $_GET['ID_k'] : '';
          $pay = getbillbyid($id_b);
          $name = getkiottById($pay['ID_k']); ?>

            <strong class="text-blue"><?php echo $name ['name_k']  ?></strong><br>
            Kiot số:
            <?php echo $pay ['ID_k']  ?><br>
         
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-12 invoice-col">
			<div class="invoice-details row no-margin">
			  <div class="col-md-6 col-lg-3"><b>Số: </b> <?php echo $pay ['id_b']  ?></div>
			  <div class="col-md-6 col-lg-3"><b>Ngày: </b> <?php echo $pay ['date_time']  ?></div>
			  <div class="col-md-6 col-lg-3"><b>Kiot số: </b><?php echo $pay ['ID_k']  ?></div>
			</div>
		</div>
      <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Vị trí</th>
              <th>Lương</th>
              <th class="text-right">Tuyển dụng</th>
              <th class="text-right">Phí dịch vụ</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $pay ['id_b']  ?></td>
              <td><?php echo $pay ['position']  ?></td>
              <td><?php echo number_format ($pay ['salary'])  ?></td>
              <td class="text-right"><?php
							 if ($pay['recruitment'] == 1)
							{
								echo 'Nhân viên chính thức ';
							}
							else

							{
								
								echo 	'Nhân viên hợp đồng';
						
							}

									
								
							
							?></td>
              <td class="text-right"><?php echo number_format( $pay ['price'] ) ?></td>
            </tr>

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-12 col-sm-6">
			<p class="lead"><b>Phương thức thanh toán:</b></p>
          <img src="./images/visa.png" alt="Visa">
          <img src="./images/mastercard.png" alt="Mastercard">
          <img src="./images/american-express.png" alt="American Express">
          <img src="./images/paypal2.png" alt="Paypal">
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">    
          </p>
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 text-right">
			<p class="lead"><b>Ngày sử dụng dịch vụ</b><span class="text-danger"> <?php echo $pay ['date_time']  ?> </span></p>
			
         	<div>
         		<p>Phí dịch vụ chưa thuế: <?php echo number_format ($pay ['price'])  ?></p>
         		<p>VAT (10%): <?php echo number_format ($pay ['price'] *10/100) ?> </p>
         	</div>
         	<div class="total-payment">
         		<h3><b>Tổng thanh toán:</b> <?php echo number_format( $pay ['price'] + $pay ['price'] *10/100 ) ?></h3>
         	</div>
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-12">
          <button id="print" class="btn btn-warning" type="button"> <span><i class="fa fa-print"></i> In hóa đơn</span> </button>
        </div>
      </div>
    </section>