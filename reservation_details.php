<?php
  include 'models/page.php';

  Page::head("Reservation Details", "", "");

  Page::anchor();
?>

	<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard.php" class="link"><i class="mdi mdi-animation fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">예약 내용</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Reservation Details</h1> 
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

            	<div class="col-lg-12">
            		<div class="card">
            			<div class="card-body row">
            				<div class="col-lg-6">
            					<strong>Reservation Number</strong>
            					<input type="text" class="form-control" name="re_number" disabled value="123456789">
            					<br />
            					<strong>Appointment Time</strong>
            					<input type="text" class="form-control" name="re_number" disabled value="13:00 - 15:00">
            					<br />
            					<strong>Consultation Method</strong>
            					<input type="text" class="form-control" name="re_number" disabled value="SMS">
            					<br />
            					<strong>Price</strong>
            					<input type="text" class="form-control" name="re_number" disabled value="20.000 KRW">
            				</div>

            				<div class="col-lg-6">
            					<strong>Appointment Day</strong>
            					<input type="text" class="form-control" name="re_number" disabled value="2022.07.02">
            					<br />
            					<strong>Member Email</strong>
            					<input type="text" class="form-control" name="re_number" disabled value="olga@gmail.com">
            					<br />
            					<strong>Consultation Status</strong>
            					<input type="text" class="form-control" name="re_number" disabled value="Status">
            					
            				</div>

            				<div class="card" style="margin-top: 15px;">
            					<div class="card-body">
            						<h3 class="card-title">Consultation Details</h3>
            						<div class="col-lg-12">
		            					<strong>Membership Consultation Application Details</strong>
		            					<input type="text" class="form-control" name="re_number" disabled value="Details goes here">
		            					<br />
		            					<strong>Summary of Consultant Contents</strong>
		            					<input type="text" class="form-control" name="re_number" disabled value="">
		            					<br />
            							
            							<center>
            								<a href="#" class="btn main-btn">Write Summary</a>
            								&nbsp;&nbsp;&nbsp;
            								<a href="#" class="btn light-btn">Delete</a>
            							</center>
            					
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>


            	

            </div>
        </div>


<?php
  Page::bottom();
?>