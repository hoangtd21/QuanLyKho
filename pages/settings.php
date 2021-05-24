<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
  $query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
  $result = mysqli_query($db, $query) or die (mysqli_error($db));
  
  while ($row = mysqli_fetch_assoc($result)) {
            $Aa = $row['TYPE'];
                   
  if ($Aa=='User'){
?>
<script type="text/javascript">
//then it will be redirected
alert("Restricted Page! You will be redirected to POS");
window.location = "pos.php";
</script>
<?php
  }           
}

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
                $id = $_GET['id'];
      ?>

<div class="card shadow mb-4 col-xs-12 col-md-12 border-bottom-primary">
    <div class="card-header py-3">
        <h4 class="m-2 font-weight-bold text-primary">Sửa thông tin tài khoản</h4>
    </div>
    <div class="card-body">


        <form role="form" method="post" action="settings_edit.php">
            <input type="hidden" name="id" value="<?php echo $zz; ?>" />

            <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                    Họ:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Họ" name="firstname" value="<?php echo $a; ?>" required>
                </div>
            </div>
            <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                    Tên:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Tên" name="lastname" value="<?php echo $b; ?>" required>
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
                    Tên đăng nhập:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Tên đăng nhập" name="username" value="<?php echo $d; ?>"
                        required>
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
                    <input class="form-control" placeholder="Email" name="email" value="<?php echo $f; ?>" required>
                </div>
            </div>
            <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                    Liên hệ #:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Liên hệ #" name="phone" value="<?php echo $g; ?>" required>
                </div>
            </div>
            <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                    Vai trò:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Vai trò" name="role" value="<?php echo $h; ?>" readonly>
                </div>
            </div>
            <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                    Ngày thuê:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Ngày thuê" name="hireddate" value="<?php echo $i; ?>"
                        required>
                </div>
            </div>
            <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                    Tỉnh/Thành phố:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Tỉnh/Thành phố" name="province" value="<?php echo $j; ?>"
                        required>
                </div>
            </div>
            <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                    Quận/Huyện:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Quận/Huyện" name="city" value="<?php echo $k; ?>" required>
                </div>
            </div>
            <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                    Loại tài khoản:
                </div>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Loại tài khoản" name="type" value="<?php echo $l; ?>"
                        readonly>
                </div>
            </div>
            <hr>

            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-edit fa-fw"></i>Cập nhập</button>
        </form>
    </div>
</div>

<?php
include'../includes/footer.php';
?>