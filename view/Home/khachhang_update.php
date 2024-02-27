
<div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông tin khách hàng</span></h5>
                <div class="bg-light p-30 mb-5">
                <script>
                    function validateForm() {
                        var isValid = true;
                        var name = document.forms["myForm"]["customer_name"].value;
                        var phone = document.forms["myForm"]["customer_phone"].value;
                        var email = document.forms["myForm"]["customer_email"].value;
                        var address = document.forms["myForm"]["customer_address"].value;
                        if (name == "") {
                            document.getElementById("nameError").innerHTML = "Không được bỏ trống phần thông tin này";
                            isValid = false;
                        }
                        if (phone == "") {
                            document.getElementById("phoneError").innerHTML = "Không được bỏ trống phần thông tin này";
                            isValid = false;
                        }
                        if (email == "") {
                            document.getElementById("emailError").innerHTML = "Không được bỏ trống phần thông tin này";
                            isValid = false;
                        }
                        if (address == "") {
                            document.getElementById("addressError").innerHTML = "Không được bỏ trống phần thông tin này";
                            isValid = false;
                        }
                        return isValid;
                    }

                    function clearError(id) {
                        document.getElementById(id).innerHTML = "";
                    }
                </script>
                    <form name="myForm" action="?controller=Home&action=update_Kh" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Họ và tên</label>
                            <input class="form-control" type="text" name="customer_name" placeholder=""  oninput="clearError('nameError')" value="<?php if(isset($_SESSION['check_kh'])){ echo $result['TenKH'];}?>">
                            <div id="nameError" class="error"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" name="customer_phone" placeholder="" oninput="clearError('phoneError')" value="<?php if(isset($_SESSION['check_kh'])){ echo $result['SDT'];}?>">
                            <div id="phoneError" class="error"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" name="customer_email" placeholder="" oninput="clearError('emailError')" value="<?php if(isset($_SESSION['check_kh'])){ echo $result['Email'];}?>">
                            <div id="emailError" class="error"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" name="customer_address" placeholder="" oninput="clearError('addressError')" value="<?php if(isset($_SESSION['check_kh'])){ echo $result['DiaChi'];}?>">
                            <div id="addressError" class="error"></div>
                        </div>
                        <input type="hidden" name="customer_id", value="<?php echo $result['MaKH'];?>">
                        
                        <button class="btn btn-block btn-primary font-weight-bold py-3" type="submit" name="submit">Lưu</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>