
<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <script>
                        function togglePassword() {
                            var passwordInput = document.getElementById("password");
                            if (passwordInput.type === "password") {
                                passwordInput.type = "text";
                            } else {
                                passwordInput.type = "password";
                            }
                        }
                        function validateForm() {
                        var isValid = true;
                        var emali = document.forms["myForm"]["email"].value;
                        var pass = document.forms["myForm"]["password"].value;
                            if (emali == "" ) {
                                document.getElementById("emailError").innerHTML = "Vui lòng nhập Email";
                                isValid = false;
                            }
                            if (pass == "") {
                                document.getElementById("passError").innerHTML = "Vui lòng nhập mật khẩu";
                                isValid = false;
                            }
                            return isValid;
                        }

                        function clearError(id) {
                            document.getElementById(id).innerHTML = "";
                        }
                    </script>
                        <form name="myForm" action="?controller=Login&action=slogin_kh" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3>Đăng nhập</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="username" name="email" oninput="clearError('emailError')">
                                <label for="username">Email</label>
                                <div id="emailError" class="text-danger"></div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" name="password" oninput="clearError('passError')">
                                <label for="password">Mật khẩu</label>
                                <div id="passError" class="text-danger"></div>
                            </div>
                            <p class="text-center mb-0 text-danger">
                                <?php
                                    if (isset($_SESSION['error_login'])) {
                                        echo $_SESSION['error_login'];
                                        unset($_SESSION['error_login']);
                                    }
                                ?>
                            </p>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check error">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="togglePassword()">
                                    <label class="form-check-label" for="exampleCheck1">Hiện mật khẩu</label>
                                </div>
                                <a href="">Quên mật khẩu</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" id="btn" name="submit">Đăng nhập</button>
                            <p class="text-center mb-0">Chưa có tài khoản? <a href="">Đăng Ký</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
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