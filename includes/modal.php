<!-- Employee select and script -->
<?php
$sqlforjob = "SELECT DISTINCT JOB_TITLE, JOB_ID FROM job order by JOB_ID asc";
$result = mysqli_query($db, $sqlforjob) or die ("Bad SQL: $sqlforjob");

$job = "<select class='form-control' name='jobs' required>
        <option value='' disabled selected hidden>Chọn chức vụ</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $job .= "<option value='".$row['JOB_ID']."'>".$row['JOB_TITLE']."</option>";
  }

$job .= "</select>";
?>
<script>
window.onload = function() {

    // ---------------
    // basic usage
    // ---------------
    var $ = new City();
    $.showProvinces("#province");
    $.showCities("#city");

    // ------------------
    // additional methods 
    // -------------------

    // will return all provinces 
    //console.log($.getProvinces());

    // will return all cities 
    //console.log($.getAllCities());

    // will return all cities under specific province (e.g Batangas)
    //console.log($.getCities("Batangas"));

}
</script>
<!-- end of Employee select and script -->

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
            <div class="modal-body"><?php echo  $_SESSION['FIRST_NAME']; ?> Bạn chắc chắn muốn đăng xuất?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                <a class="btn btn-primary" href="logout.php">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>
<!-- Customer Modal-->
<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="cust_transac.php?action=add">
                    <div class="form-group">
                        <input class="form-control" placeholder="Họ" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Tên" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Số điện thoại" name="phonenumber" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Lưu</button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Đặt lại</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Customer Modal-->
<div class="modal fade" id="poscustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="cust_pos_trans.php?action=add">
                    <div class="form-group">
                        <input class="form-control" placeholder="Họ" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Tên" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Số điện thoại" name="phonenumber" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Lưu</button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Đặt lại</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Employee Modal-->
<div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm nhân viên</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="emp_transac.php?action=add">
                    <div class="form-group">
                        <input class="form-control" placeholder="Họ" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Tên" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <select class='form-control' name='gender' required>
                            <option value="" disabled selected hidden>Giới tính</option>
                            <option value="Male">Nam</option>
                            <option value="Female">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Số điện thoại" name="phonenumber" required>
                    </div>
                    <div class="form-group">
                        <?php
                  echo $job;
                ?>
                    </div>
                    <div class="form-group">
                        <input placeholder="Ngày thuê" type="text" onfocus="(this.type='date')"
                            onblur="(this.type='text')" id="FromDate" name="hireddate" class="form-control" />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="province" placeholder="Tỉnh/Thành phố" name="province"
                            required></select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="city" placeholder="Quận/Huyện" name="city" required></select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Lưu</button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Đặt lại</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete Modal-->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="DeleteModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn chắc chắn muốn xóa?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                <a class="btn btn-danger btn-ok">Xóa</a>
            </div>
        </div>
    </div>
</div>
<script>
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>