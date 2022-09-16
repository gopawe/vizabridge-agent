<?php
  include 'models/page.php';

  Page::head("Payments", "", "");

  Page::anchor();

  if (!isset($_GET['amount'])) {
      // code...
     echo "<script>window.location='payment.php';</script>";
  }
?>

  <script>
    var clientKey = 'test_ck_D5GePWvyJnrK0W0k6q8gLzN97Eoq'
    var tossPayments = TossPayments(clientKey) // 클라이언트 키로 초기화하기
  </script>

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
                        <h1 class="mb-0 fw-bold">Withdraw to Bank Account</h1> 
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
                       
                        <input type="hidden" id="amount" value="<?php echo $_GET['amount']?>">

                        <tr>
                          <td>
                            <h5>Bank Name <br /><small>은행 이름</small></h5>
                          </td>
                          <td>
                            <h3><img src="../assets/images/bank-logo.png" width="40px" height="auto"> <br /><small>Bank of Korea</small></h3>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <h5>Account Number <br /><small>계좌 번호</small></h5>
                          </td>
                          <td>
                            <h3><small>XXXX-XXXXX-3232</small></h3>
                          </td>
                        </tr>


                        <tr>
                          <td>
                            <h5>Transfer Amount <br /><small>이체 금액</small></h5>
                          </td>
                          <td>
                            <h3><?php echo number_format($_GET['amount'], 2)?>₩</h3>
                          </td>
                        </tr>
                      </table>

                      <br />
                      <button class="btn purple-background btn-lg text-white" id="tosspayment">Proceed</button>
                  </div>
                </div>
              </div>

            </div>
        </div>

        <script type="text/javascript">
             var btn = document.getElementById("tosspayment");
             var amount = document.getElementById("amount").value;

             //withdraw the money now
             btn.addEventListener("click", function(){
                tossPayments.requestPayment('계좌이체', { // 결제 수단 파라미터
                  // 결제 정보 파라미터
                  amount: amount,
                  orderId: 'SiH2JhueDOMDG4z4DFnVN',
                  orderName: '토스 티셔츠 외 2건',
                  successUrl: 'http://localhost:8080/success',
                  failUrl: 'http://localhost:8080/fail',
                });
             });
        </script>


<?php
  Page::bottom();
?>