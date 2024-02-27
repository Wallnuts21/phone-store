
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
    </div>
    <!-- Navbar End -->
    
    <div class="container-fluid">
        <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
            <div class="col-lg-5 mb-5">
                
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <p class="mb-3">Cảm ơn Quý khách chọn mua hàng tại MultiShop. Chúng tôi sẽ liên lạc để kiểm tra thông tin đơn hàng trong thời gian sớm nhất.</p>
                    </div>
                </div>

                <?php
                    if(isset($_SESSION['order'])){
                ?>
                <h5 class="section-title position-relative text-uppercase mb-3 text-center"><span class="bg-secondary pr-3">Đặt hàng thành công</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <p class="mb-3">Người đặt: <i class="h6"><?php echo $_SESSION['order']['customer_name'];?></i></p>
                        <p class="mb-3">Số điện thoại: <i class="h6"><?php echo $_SESSION['order']['customer_phone'];?></i></p>
                        <p class="mb-3">Địa chỉ Email: <i class="h6"><?php echo $_SESSION['order']['customer_email'];?></i></p>
                        <p class="mb-3">Địa chỉ nhận hàng: <i class="h6"><?php echo $_SESSION['order']['customer_address'];?></i></p>
                        <p class="mb-3">Tổng tiền: <i class="h6"><?php echo $model->format_currency($result['TongTien']);?></i></p>
                    </div>
                </div>
                    <?php
                        foreach($_SESSION['cart'] as $value) {
                    ?>
                <div class="">
                    <div class="d-flex align-items-center mb-4">
                        <img class="img-fluid" width="20%" src="upload/<?php echo $value['img']?>" alt="">
                        <div class="flex-fill pl-3">
                            <h6><?php echo $value['product_name'];?></h6>
                            <small class="text-body">Số lượng: <?php echo $value['num_product']?></small></br>
                            <small class="text-info">Màu: <?php echo $value['mausac']?></small>
                        </div>
                    </div>
                </div>
                <?php
                    unset($_SESSION['order']);
                    unset($_SESSION['cart']);
                        }
                    } 
                ?>
                <a class="btn btn-block btn-primary font-weight-bold py-3" href="?controller=Home&action=index">Tiếp tục mua sắm</a>
            </div>
        </div>
    </div>
    
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