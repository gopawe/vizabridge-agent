<?php
  include 'models/page.php';

  Page::head("View Post", "", "");

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
                     
                    <div class="post-info">
                        <h1>How to get a permanent visa?</h1>
                        <span class="simple-span">Field: F-4 visa</span> | <span class="simple-span">Thu, Jan 6, 2022</span> | <span class="simple-span">Views: 124 <i class="mdi mdi-eye"></i></span>

                        <p class="post-details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lectus odio eget sed egestas. Tortor elementum, auctor vitae sapien aliquam consectetur eget interdum. Rhoncus vitae tristique porta aliquam. Sagittis a faucibus venenatis porta semper vulputate in neque luctus. Nunc sed metus risus posuere. Pellentesque sit nisl varius felis fermentum lobortis nibh. Elit, ipsum vitae enim nunc. Neque vitae a, diam quis maecenas volutpat. Nunc, odio auctor sed tempus lectus.
Donec arcu nulla massa tempus. At eget lectus nisl id consectetur gravida placerat et blandit. Vel est tincidunt.
                        </p>
                    </div>
                    <hr style="background:#ddd;" />
                    <div style="text-align: center;margin-top: 20px;">
                        <a href="edit_post.php" class="btn text-white purple-background">Update <i class="mdi mdi-border-color"></i></a> &nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)" id="delete-btn" class="btn btn-danger text-white">Delete <i class="mdi mdi-close-circle"></i></a>
                    </div>

                  </div>
                </div>
              </div>

              

            </div>
        </div>

        <script type="text/javascript">
            
            var deleteBtn = document.getElementById("delete-btn");

            deleteBtn.addEventListener('click', function(){
                Swal.fire({
                      title: 'Are you sure?',
                      text: "이 작업을 되돌릴 수 없습니다.",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#5B67CA',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "view_post.php?action=delete&id=2";
                      }
                    });
            });
        </script>


<?php
  Page::bottom();
?>