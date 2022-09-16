<?php
  include 'models/page.php';

  Page::head("Review", "", "");

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
                              <li class="breadcrumb-item active" aria-current="page">내 리뷰</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Reviews</h1> 
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
                            <h5>Total Ratings <br /><small>총 평점</small></h5>
                          </td>
                          <td>
                            <h3>
                                <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                <i class="mdi mdi-star-outline"></i>
                                <i class="mdi mdi-star-outline"></i><br />
                                <small>3/5</small>
                            </h3>
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
                                        <h4 class="card-title">Review List</h4>
                                        <h5 class="card-subtitle">리뷰 목록</h5>
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
                                                <th class="border-top-0">Rating.</th>
                                                <th class="border-top-0">Client</th>
                                                <th class="border-top-0">Review</th>
                                                <th class="border-top-0">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                            
                                                <td>
                                                    <h4>
                                                        <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                                        <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                                        <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                    </h4>
                                                </td>
                                                <td>
                                                    John Doe
                                                </td>
                                                <td>You are welcome to move</td>
                                                <td>2022.02.12</td>
                                                
                                            </tr>



                                            <tr>
                                            
                                                <td>
                                                    <h4>
                                                        <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                                        <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                                        <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                                        <i class="mdi mdi-star" style="color: #fcc326;"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                    </h4>
                                                </td>
                                                <td>
                                                    Prince Samuels
                                                </td>
                                                <td>The service is very good</td>
                                                <td>2022.02.12</td>
                                                
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

        


<?php
  Page::bottom();
?>