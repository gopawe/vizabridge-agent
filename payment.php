<?php
  include 'models/page.php';

  Page::head("Payments", "", "");

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
                              <li class="breadcrumb-item"><a href="dashboard.php" class="link"><i class="mdi mdi-blur fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">예약 내용</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Payments</h1> 
                    </div>
                    <div class="col-6">
                        <div class="text-end upgrade-btn">
                            <a href="javascript:void(0)" id="withdraw" class="btn text-white purple-background"
                             >Bank Transfer <br /><small>은행으로 이체</small></a>
                        </div>
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
                      <table>
                        <tr>
                          <td>
                            <h5>Total Collection Date <br /><small>예상 수금일</small></h5>
                          </td>
                          <td>
                            <h3>매달 30/31일</h3>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <h5>Collection Date <br /><small>수금일 책정일</small></h5>
                          </td>
                          <td>
                            <h3>매달 30/31일</h3>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <h5>Collection Method <br /><small>수금 방법</small></h5>
                          </td>
                          <td>
                            <h3>계좌 송금 <br /><small>Account Transfer</small></h3>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <h5>Total Amount <br /><small>금액</small></h5>
                          </td>
                          <td>
                            <h3>60,000원</h3>
                          </td>
                        </tr>
                      </table>
                  </div>
                </div>
              </div>


              <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Payment List</h4>
                                        <h5 class="card-subtitle">지불 목록</h5>
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
                                                <th class="border-top-0">Reservation No.</th>
                                                <th class="border-top-0">Appointment Date</th>
                                                <th class="border-top-0">Time</th>
                                                <th class="border-top-0">Services</th>
                                                <th class="border-top-0">Price</th>
                                                <th class="border-top-0">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2022.07.02</td>
                                                <td>
                                                    13:00 - 15:00
                                                </td>
                                                <td><h5 class="m-b-0">SMS</h5></td>
                                                <td>20.000KRW</td>
                                                <td>
                                                    person@details.com
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2022.07.02</td>
                                                <td>
                                                    13:00 - 15:00
                                                </td>
                                                <td><h5 class="m-b-0">SMS</h5></td>
                                                <td>20.000KRW</td>
                                                <td>
                                                    info@visabridge.com
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2022.07.02</td>
                                                <td>
                                                    13:00 - 15:00
                                                </td>
                                                <td><h5 class="m-b-0">Call</h5></td>
                                                <td>20.000KRW</td>
                                                <td>
                                                    email@example.com
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


              

            </div>
        </div>

        <script type="text/javascript">
             var btn = document.getElementById("withdraw");

            

             var html = 
             `  
                <div class='col-md-12'>
                    <form method='GET' id='withdraw_form' autofocus="on" action='withdraw.php'>
                        <label><strong>Enter Amount (송금액)</strong></label>
                        <input type='number' step='0.01' class='form-control' placeholder='Amount' name='amount' id='amount'/><br />
                        <input type='submit' value='Proceed (진행하다)' id='submit' class='btn purple-background text-white btn-lg'/> 
                    </form>
                </div>
             `;

             btn.addEventListener("click", function(){
                Swal.fire({
                      title: '<strong>다음으로 송금 <u>은행</u></strong>',
                      footer: '은행 계좌로 직접 송금할 수 있습니다.',
                      html: html, 
                      showCloseButton: true,
                      showCancelButton: false,
                      focusConfirm: false,
                      showConfirmButton: false,
                      // confirmButtonText:
                      //   '<i class="fa fa-thumbs-up"></i> Great!',
                      // confirmButtonAriaLabel: 'Thumbs up, great!',
                      // cancelButtonText:
                      //   '<i class="fa fa-thumbs-down"></i>',
                      // cancelButtonAriaLabel: 'Thumbs down'
                });
             });

            
        </script>


<?php
  Page::bottom();
?>