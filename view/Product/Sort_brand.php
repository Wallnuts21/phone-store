
            <!-- Shop Product Start -->
            <!-- <div class="col-lg-9 col-md-8"> -->
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
                        foreach($result_pt as $value){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="upload/<?php echo $value['TenHinhAnh']; ?>" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="?controller=Product&action=detail&id=<?php echo $value['MaSP']; ?>"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="?controller=Product&action=detail&id=<?php echo $value['MaSP']; ?>"><?php echo $value['TenSP']; ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5><?php echo $value['GiaXuat'];?></h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
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
            <!-- </div> -->
            <!-- Shop Product End -->