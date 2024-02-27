
   
<div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">Liên hệ</a>
                    <a class="text-body mr-3" href="">Trợ giúp</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Tài khoản</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php
                                if(!isset($_SESSION['check']) && !isset($_SESSION['check_kh'])){
                            ?>
                                <a class="dropdown-item" type="button" href="?controller=Login&action=login_kh">Đăng nhập</a>
                                <a class="dropdown-item" type="button" href="">Đăng ký</a>
                            <?php
                                } else {
                                    if(isset($_SESSION['check']) == 'admin'){
                            ?>
                                <a class="dropdown-item" type="button" href="?controller=Login&action=logout">Đăng xuất</a>
                                <a class="dropdown-item" type="button" href="?controller=Admin&action=index">Tới trang Admin</a>
                            <?php
                                    } else {
                            ?>
                                <a class="dropdown-item" type="button" href="?controller=Login&action=logout">Đăng xuất</a>
                            <?php
                                } 
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="?controller=Product&action=cart_detail" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Multi</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Hỗ trợ khách hàng</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="?controller=Home&action=index" class="nav-item nav-link <?php if($_GET['controller'] == 'Home' && $_GET['action'] == 'index'){?> active <?php }?>">Trang Chủ</a>
                            <a href="?controller=Product&action=Dienthoai&page=1" class="nav-item nav-link <?php if($_GET['controller'] == 'Product' && $_GET['action'] == 'Dienthoai'){?> active <?php }?>">Điện Thoại</a>
                            <a href="#" class="nav-item nav-link <?php if($_GET['controller'] == 'Product' && $_GET['action'] == 'Phukien'){?> active <?php }?>">Phụ kiện</a>
                            <a href="#" class="nav-item nav-link">Ưu Đãi</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="?controller=Product&action=cart_detail" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="?controller=Home&action=index">Trang chủ</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                
                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thương hiệu</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="navbar navbar-vertical navbar-light align-items-start p-0 bg-light">
                            <div class="navbar-nav w-100">
                                <a href="?controller=Product&action=Dienthoai&page=1" class="nav-item nav-link">Tất cả</a>
                                <?php
                                    foreach($result_brand as $value){
                                ?>
                                <a onclick="load_product(<?php echo $value['MaTH']; ?>)" href="JavaScript:Void(0);" class="nav-item nav-link"><?php echo $value['TenTH']?></a>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Color End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8"  id="result">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sắp Xếp</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Mới Nhấp</a>
                                        <a class="dropdown-item" href="#">Nổi Bật</a>
                                        <a class="dropdown-item" href="#">Giá thấp nhất</a>
                                        <a class="dropdown-item" href="#">Giá cao nhấp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        foreach($result as $value){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="upload/<?php echo $value['TenHinhAnh']; ?>" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="?controller=Product&action=detail&id=<?php echo $value['MaSP']; ?>"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="?controller=Product&action=detail&id=<?php echo $value['MaSP']; ?>"><?php echo $value['TenSP']; ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <!-- <h5><?php echo $model->format_currency($value['GiaXuat']); ?></h5><h6 class="text-muted ml-2"><del>$123.00</del></h6> -->
                                    <h5><?php echo $model->format_currency($value['GiaXuat']); ?></h5><h6 class="text-muted ml-2"></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="col-12"> 
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item <?php if($page == 1){?> disabled <?php }?>">
                                <a class="page-link" href="?controller=Product&action=Dienthoai&page=<?php echo ($page - 1)?>">Previous</span></a>
                            </li>
                            <?php
                                for($i =  1; $i <= $total_page; $i++){
                            ?>
                            <li class="page-item <?php if($page == $i){?> active <?php }?>">
                                <a class="page-link" href="?controller=Product&action=Dienthoai&page=<?php echo $i;?>"><?php echo $i?></a>
                            </li>
                            <?php
                                }
                            ?>
                            <li class="page-item <?php if($page == $total_page){?> disabled <?php }?>">
                                <a class="page-link" href="?controller=Product&action=Dienthoai&page=<?php echo ($page + 1)?>">Next</a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">-</h5>
                <p class="mb-4">Giới thiệu về chúng tôi</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>15 Đ.Trần Văn Trà, Tân Phú, Quận 7, Thành phố Hồ Chí Minh</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>batpto@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>0987654321</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Giới thiệu</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Tin mới nhất</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>câu hỏi thường gặp</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Tuyển dụng</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Giới thiệu nhà sách</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Điều khoản sử dụng</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Chính sách bảo mật thanh toán</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Chính sách đổi - trả - hoàn tiền</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Chính sách vận chuyển</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Chính sách bảo hành - bồi hoàn</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Khuyễn mãi</h5>
                        <p>Đăng ký để nhận thông tin khuyến mãi mới nhất</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Theo dõi chúng tôi</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="public/mail/jqBootstrapValidation.min.js"></script>
    <script src="public/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="public/js/main.js"></script>

    <script language = "javascript">
        function load_product(id){
            $.ajax({
                url : "?controller=Product&action=view_pd_by_brand&id=" + id + " &page=1",
                type : "post",
                dataType : "text",
                data : {
                    page : id
                },
                success : function (result){
                    $('#result').html(result);
                }
            });
        }
    </script>

    
