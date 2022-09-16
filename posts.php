<?php
  include 'models/page.php';

  Page::head("Posts", "", "");

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
                              <li class="breadcrumb-item active" aria-current="page">내 게시물</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Posts</h1> 
                    </div>
                    <div class="col-6">
                        <div class="text-end upgrade-btn">
                            <a href="add_post.php" class="btn text-white purple-background"
                             >New Post <br /><small>새로운 게시물</small></a>
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
                            <h5>Total Posts <br /><small>총 게시물</small></h5>
                          </td>
                          <td>
                            <h1>30</h1>
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
                                        <h4 class="card-title">Post List</h4>
                                        <h5 class="card-subtitle">게시물 목록</h5>
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
                                                <th class="border-top-0">Title</th>
                                                <th class="border-top-0">Category</th>
                                                <th class="border-top-0">Reading Time</th>
                                                <th class="border-top-0">Views</th>
                                                <th class="border-top-0">Date Posted</th>
                                                <th class="border-top-0">??</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>How to get resident permit?</strong></td>
                                                <td>F-4 visa</td>
                                                <td>
                                                    15min
                                                </td>
                                                <td><h5 class="m-b-0">200</h5></td>
                                                <td>2022.21.21</td>
                                                <td>
                                                    <a href="view_post.php" class="btn btn-sm purple-background text-white">View Post <i class="mdi mdi-eye"></i></a>
                                                    |
                                                    <a href="edit_post.php" class="btn btn-sm btn-default text-white">Edit<i class="mdi mdi-border-color"></i></a>

                                                </td>
                                            </tr>


                                            <tr>
                                                <td><strong>What to do when your visa is expired?</strong></td>
                                                <td>F-4 visa</td>
                                                <td>
                                                    15min
                                                </td>
                                                <td><h5 class="m-b-0">19</h5></td>
                                                <td>2022.21.21</td>
                                                <td>
                                                    <a href="view_post.php" class="btn btn-sm purple-background text-white">View Post <i class="mdi mdi-eye"></i></a>
                                                    |
                                                    <a href="edit_post.php" class="btn btn-sm btn-default text-white">Edit<i class="mdi mdi-border-color"></i></a>

                                                </td>
                                            </tr>


                                            <tr>
                                                <td><strong>How many ways to apply for visa?</strong></td>
                                                <td>F-4 visa</td>
                                                <td>
                                                    15min
                                                </td>
                                                <td><h5 class="m-b-0">20</h5></td>
                                                <td>2022.21.21</td>
                                                <td>
                                                    <a href="view_post.php" class="btn btn-sm purple-background text-white">View Post <i class="mdi mdi-eye"></i></a>
                                                    |
                                                    <a href="edit_post.php" class="btn btn-sm btn-default text-white">Edit<i class="mdi mdi-border-color"></i></a>

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