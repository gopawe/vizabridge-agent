<?php
  include 'models/page.php';

  Page::head("Edit Post", "", "");

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
                        <h1 class="mb-0 fw-bold">Update Post</h1> 
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
                    <h2 class="card-title">Write Post Update</h2>
                    <div class="" style="margin-top: 20px;">

                        <form method="POST" class="row">
                              <div class="col-md-6">
                                  <label><strong>Field</strong></label>
                                  <select class="form-select">
                                      <option>F-4 visa</option>
                                      <option value="Option 1">Option 1</option>
                                      <option value="Option 2">Option 2</option>
                                      <option value="Option 3">Option 3</option>
                                  </select>
                              </div>

                              <div class="col-md-6">
                                  <label><strong>Title</strong></label>
                                  <input type="text" class="form-control" name="title" id="title" value="How can I retrive my visa?">
                              </div>

                              <div class="col-md-12">
                                  <br />
                                  <label><strong>Description</strong></label>

                                  <textarea id="summernote">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lectus odio eget sed egestas. Tortor elementum, auctor vitae sapien aliquam consectetur eget interdum. Rhoncus vitae tristique porta aliquam. Sagittis a faucibus venenatis porta semper vulputate in neque luctus. Nunc sed metus risus posuere. Pellentesque sit nisl varius felis fermentum lobortis nibh. Elit, ipsum vitae enim nunc. Neque vitae a, diam quis maecenas volutpat. Nunc, odio auctor sed tempus lectus.
Donec arcu nulla massa tempus. At eget lectus nisl id consectetur gravida placerat et blandit. Vel est tincidunt.
                                  </textarea>
                              </div>

                              <div style="margin-top:10px; text-align: right;">
                                 <a href="javascript:void(0)" onclick="window.history.back()" class="btn light-btn" name="cancel"><< Go Back</a>
                                 &nbsp;&nbsp;&nbsp;
                                 <input type="submit" class="btn main-btn" value="Submit" name="cancel">
                              </div>
                        </form>
                    </div>
                    

                  </div>
                </div>
              </div>

              

            </div>
        </div>

        



<?php
  Page::bottom();
?>