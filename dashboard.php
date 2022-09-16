<?php
  include 'models/page.php';

  Page::head("Dashboard", "", "");

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
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">계기반</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Dashboard</h1> 
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
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                        <h4 class="card-title">Reservations</h4>
                                        <h6 class="card-subtitle">예약 수</h6>
                                </div>
                                <div class="d-md-flex align-items-center">
                                    
                                    <div class="row" style="width: 100%;">
                                        
                                          <div class="box col-lg-3">
                                                <h2>12</h2>
                                                <p>Reservations Today<br /><small>오늘 예약</small></p>
                                          </div>

                                          <div class="box col-lg-3">
                                                <h2>5</h2>
                                                <p>Reservations This Month<br /><small>이번 달 예약</small></p>
                                          </div>

                                          <div class="box col-lg-3">
                                                <h2>0</h2>
                                                <p>Phone Counceling<br /><small>전화상담</small></p>
                                          </div>

                                          <div class="box col-lg-3">
                                                <h2>0</h2>
                                                <p>SMS Counceling<br /><small>SMS 상담</small></p>
                                          </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <style type="text/css">
                      .blg{
                        /*width: 100%;
                        background: red;
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr 1fr;*/
                      }

                      .box{
                        height: 200px;
                        border-right: 0.5px solid #C4C4C4;
                        text-align: center;
                        padding-top: 30px;
                      }

                      .box h2{
                        font-size: 50px;
                        color: #5B67CA;
                      }
                    </style>
                    
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Reservation List</h4>
                                        <h5 class="card-subtitle">예약 목록</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl">
                                            <select class="form-select shadow-none">
                                                <option value="0" selected>Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover align-middle text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Client</th>
                                                <th class="border-top-0">Reservation No.</th>
                                                <th class="border-top-0">Appointment Date</th>
                                                <th class="border-top-0">Time</th>
                                                <th class="border-top-0">Services</th>
                                                <th class="border-top-0">Price</th>
                                                <th class="border-top-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-info text-white">JB</a>
                                                        </div>
                                                        <div class="">
                                                          <a href="reservation_details.php">
                                                            <h4 class="m-b-0 font-16">John Brown</h4>
                                                          </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1</td>
                                                <td>2022.07.02</td>
                                                <td>
                                                    13:00 - 15:00
                                                </td>
                                                <td><h5 class="m-b-0">SMS</h5></td>
                                                <td>20.000KRW</td>
                                                <td>
                                                    <label class="badge bg-success">Success</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-danger text-white">SB</a>
                                                        </div>
                                                        <div class="">
                                                          <a href="reservation_details.php">
                                                            <h4 class="m-b-0 font-16">Samuel Barclay</h4>
                                                          </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2</td>
                                                <td>2022.07.02</td>
                                                <td>
                                                    13:00 - 15:00
                                                </td>
                                                <td><h5 class="m-b-0">SMS</h5></td>
                                                <td>20.000KRW</td>
                                                <td>
                                                    <label class="badge bg-success">Success</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a
                                                                class="btn btn-circle d-flex btn-primary text-white">SD</a>
                                                        </div>
                                                        <div class="">
                                                          <a href="reservation_details.php">
                                                            <h4 class="m-b-0 font-16">Sarah Dennis</h4>
                                                          </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>2022.07.02</td>
                                                <td>
                                                    13:00 - 15:00
                                                </td>
                                                <td><h5 class="m-b-0">Call</h5></td>
                                                <td>20.000KRW</td>
                                                <td>
                                                    <label class="badge bg-danger">Failed</label>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved Visabridge.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

<?php
  Page::bottom();
?>