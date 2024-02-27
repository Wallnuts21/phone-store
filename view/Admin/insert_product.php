
<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="public/assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="?controller=Admin&action=index" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>Sản Phẩm</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?controller=Admin&action=Product_list" class="dropdown-item">Danh Sách Sản Phẩm</a>
                            <a href="?controller=Admin&action=insert_product" class="dropdown-item">Thêm Sản Phẩm</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Nhà cung cấp</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item">Danh sách nhà cung cấp</a>
                            <a href="" class="dropdown-item">Thêm nhà cung cấp</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Thương hiệu</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item">Danh sách thương hiệu</a>
                            <a href="" class="dropdown-item">Thêm thương hiệu</a>
                        </div>
                    </div>
                    <a href="?controller=Admin&action=customer_list" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Khách Hàng</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Nhân viên</a>
                    <a href="?controller=Admin&action=order_list" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Đơn Hàng</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="public/assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="public/assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="public/assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="public/assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="?controller=Home&action=index" class="dropdown-item">Tới trang bán hàng</a>
                            <a href="?controller=Login&action=logout" class="dropdown-item">Log Out</a>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <form action="?controller=Admin&action=ins_product" method="post" enctype="multipart/form-data">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">THÊM SẢN PHẨM</h6>
                        <div class="form-floating mb-3">
                            <a>Tên sản phẩm</a>
                            <input type="text" class="form-control" id="floatingQuantity" name="product_name"
                                placeholder="" value="">
                            <label for="floatingQuantity"></label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" 
                            id="floatingTextarea" name="desc" style="height: 150px;"></textarea>
                            <label for="floatingTextarea">Đặc điểm nổi bật</label>
                        </div>
                        <div class="bg-light rounded h-100 mb-3">
                            <label>Danh mục sản phẩm</label>
                            <select class="form-select mb-3" name="dmsp" aria-label="Default select example">
                                <option>----- Chọn danh mục của sản phẩm -----</option>
                                <?php
                                    foreach($result_dmsp as $value){
                                ?>
                                <option value="<?php echo $value['MaDMSP'] ?>"><?php echo $value['TenDM'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="bg-light rounded h-100 mb-3">
                            <label>Nhà cung cấp</label>
                            <select class="form-select mb-3" name="ncc" aria-label="Default select example">
                                <option>----- Chọn nhà cung cấp của sản phẩm -----</option>
                                <?php
                                    foreach($result_ncc as $value){
                                ?>
                                <option value="<?php echo $value['MaNCC'] ?>"><?php echo $value['TenNCC'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <a>Thời Gian Bảo Hành</a>
                            <input type="text" class="form-control" id="floatingDateBH" name="tg_bh"
                                placeholder="" value="">
                            <label for="floatingDateBH"></label>
                        </div>
                        <div class="form-floating mb-3">
                            <a>Thông tin bảo hành</a>
                            <input type="text" class="form-control" id="floatingDateBH" name="tt_bh"
                                placeholder="" value="">
                            <label for="floatingDateBH"></label>
                        </div>
                        <div class="bg-light rounded h-100 mb-3">
                            <label>Thương hiệu</label>
                            <select class="form-select mb-3" name="brand" aria-label="Default select example">
                                <option>----- Chọn thương hiệu của sản phẩm -----</option>
                                <?php
                                    foreach($result_brand as $value){
                                ?>
                                <option value="<?php echo $value['MaTH'] ?>"><?php echo $value['TenTH'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <div class="mb-3">
                                    <label for="memory" class="form-label">Giá nhập</label>
                                    <input type="text" class="form-control" id="memory" name="gianhap" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="color" class="form-label">Giá bán</label>
                                    <input type="text" class="form-control" id="color" name="giaxuat" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="color" class="form-label">Thời gian bắt đầu giá mới</label>
                                    <!-- <?php
                                        $defaultTime = $result['NgayBD'] ? date('Y-m-d\TH:i', strtotime($result['NgayBD'])) : '';
                                    ?> -->
                                    <input type="datetime-local" class="form-control" id="startDateTime" name="ngay_bd" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="ghichu" class="form-label">Ghi Chú</label>
                                    <input type="text" class="form-control" id="ghichu" name="ghichu" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="ghichu" class="form-label">Các màu sắc của sản phẩm</label>
                                    <input type="text" class="form-control" id="color" name="color" value="">
                                </div>
                            </div>
                        </div>
                        <!-- img -->
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Ảnh đại diện</h6>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="img" name="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 m-2" type="submit" name="submit">Lưu</button>
                </form>
            </div>
            <!-- Recent Sales End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/lib/chart/chart.min.js"></script>
    <script src="public/assets/lib/easing/easing.min.js"></script>
    <script src="public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="public/assets/js/main.js"></script>