</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright © Hệ thống quản lý kho 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thoát?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><?php echo  $_SESSION['LAST_NAME']; ?>, Bạn chắc chắn muốn đăng xuất?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                <a class="btn btn-primary" href="logout.php">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../js/demo/datatables-demo.js"></script>
<script src="../js/city.js"></script>


<!-- PROFILE OVERLAY NA MODAL -->
<div id="overlay" onclick="off()">
    <div id="text"> <?php echo  $_SESSION['FIRST_NAME']. ' '.$_SESSION['LAST_NAME'] ;?><BR>
        Địa chỉ: <?php echo  $_SESSION['PROVINCE']. ', '.$_SESSION['CITY'] ;?></div>
</div>
<script>
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}

//used in pos sa number only na textfields
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31 &&
        (charCode < 48 || charCode > 57))
        return false;
    return true;
}
//end of used in pos sa number only na textfields
</script>

</body>

</html>

<?php
  include 'modal.php';
// JOB SELECT OPTION TAB
$sql = "SELECT DISTINCT TYPE, TYPE_ID FROM type";
$result = mysqli_query($db, $sql) or die ("Bad SQL: $sql");

$opt = "<select class='form-control' name='type'>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='".$row['TYPE_ID']."'>".$row['TYPE']."</option>";
  }

$opt .= "</select>";

        $query = "SELECT ID, e.FIRST_NAME, e.LAST_NAME, e.GENDER, USERNAME, PASSWORD, e.EMAIL, PHONE_NUMBER, j.JOB_TITLE, e.HIRED_DATE, t.TYPE, l.PROVINCE, l.CITY
                      FROM users u
                      join employee e on u.EMPLOYEE_ID = e.EMPLOYEE_ID
                      join job j on e.JOB_ID=j.JOB_ID
                      join location l on e.LOCATION_ID=l.LOCATION_ID
                      join type t on u.TYPE_ID=t.TYPE_ID
                      WHERE ID =".$_SESSION['MEMBER_ID'];
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
          while($row = mysqli_fetch_array($result))
          {  
                $zz= $row['ID'];
                $a= $row['FIRST_NAME'];
                $b=$row['LAST_NAME'];
                $c=$row['GENDER'];
                $d=$row['USERNAME'];
                $e=$row['PASSWORD'];
                $f=$row['EMAIL'];
                $g=$row['PHONE_NUMBER'];
                $h=$row['JOB_TITLE'];
                $i=$row['HIRED_DATE'];
                $j=$row['PROVINCE'];
                $k=$row['CITY'];
                $l=$row['TYPE'];
          }
      ?>

<!-- User Edit Info Modal-->
<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin người dùng</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="settings_edit.php">
                    <input type="hidden" name="id" value="<?php echo $zz; ?>" />

                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Họ :
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Họ" name="firstname" value="<?php echo $a; ?>"
                                required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Tên:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Tên" name="lastname" value="<?php echo $b; ?>"
                                required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Giới tính:
                        </div>
                        <div class="col-sm-9">
                            <select class='form-control' name='gender' required>
                                <option value="" disabled selected hidden>Giới tính</option>
                                <option value="Male">Nam</option>
                                <option value="Female">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Tài khoản:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Tên đăng nhập" name="username"
                                value="<?php echo $d; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Mật khẩu:
                        </div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" value=""
                                required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Email:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Email" name="email" value="<?php echo $f; ?>"
                                required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Liên hệ #:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Liên hệ #" name="phone" value="<?php echo $g; ?>"
                                required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Vai trò:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Vai trò" name="role" value="<?php echo $h; ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Ngày thuê:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Ngày thuê" name="hireddate"
                                value="<?php echo $i; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Tỉnh/Thành phố:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Tỉnh/Thành phố" name="province"
                                value="<?php echo $j; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Quận/Huyện:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Quận/Huyện" name="city" value="<?php echo $k; ?>"
                                required>
                        </div>
                    </div>
                    <div class="form-group row text-left text-primary">
                        <div class="col-sm-3" style="padding-top: 5px;">
                            Loại tài khoản:
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Loại tài khoản" name="type"
                                value="<?php echo $l; ?>" readonly>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Lưu</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
                </form>
            </div>
        </div>
    </div>
</div>