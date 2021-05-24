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
$sql = "SELECT DISTINCT CNAME, CATEGORY_ID FROM category order by CNAME asc";
$result = mysqli_query($db, $sql) or die ("Bad SQL: $sql");

$opt = "<select class='form-control' name='category' required>
        <option value='' disabled selected hidden>Chọn loại</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='".$row['CATEGORY_ID']."'>".$row['CNAME']."</option>";
  }

$opt .= "</select>";

  $query = 'SELECT PRODUCT_ID,PRODUCT_CODE, NAME, DESCRIPTION, QTY_STOCK, PRICE, c.CNAME FROM product p join category c on p.CATEGORY_ID=c.CATEGORY_ID WHERE PRODUCT_ID ='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while($row = mysqli_fetch_array($result))
    {   
      $zz = $row['PRODUCT_ID'];
      $zzz = $row['PRODUCT_CODE'];
      $A = $row['NAME'];
      $B = $row['DESCRIPTION'];
      $C = $row['PRICE'];
      $D = $row['CNAME'];
    }
      $id = $_GET['id'];
?>

<center>
    <div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
        <div class="card-header py-3">
            <h4 class="m-2 font-weight-bold text-primary">Sửa sản phẩm</h4>
        </div>
        <a href="product.php?action=add" type="button" class="btn btn-primary bg-gradient-primary">Quay lại</a>
        <div class="card-body">

            <form role="form" method="post" action="pro_edit1.php">
                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                <div class="form-group row text-left text-warning">
                    <div class="col-sm-3" style="padding-top: 5px;">
                        Mã sản phẩm:
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" placeholder="Mã sản phẩm" name="prodcode"
                            value="<?php echo $zzz; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row text-left text-warning">
                    <div class="col-sm-3" style="padding-top: 5px;">
                        Tên sản phẩm:
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" placeholder="Tên sản phẩm" name="prodname" value="<?php echo $A; ?>"
                            required>
                    </div>
                </div>
                <div class="form-group row text-left text-warning">
                    <div class="col-sm-3" style="padding-top: 5px;">
                        Mô tả:
                    </div>
                    <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Mô tả"
                            name="description"><?php echo $B; ?></textarea>
                    </div>
                </div>
                <div class="form-group row text-left text-warning">
                    <div class="col-sm-3" style="padding-top: 5px;">
                        Giá:
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" placeholder="Giá" name="price" value="<?php echo $C; ?>" required>
                    </div>
                </div>
                <div class="form-group row text-left text-warning">
                    <div class="col-sm-3" style="padding-top: 5px;">
                        Loại:
                    </div>
                    <div class="col-sm-9">
                        <?php
                    echo $opt;
                   ?>
                    </div>
                </div>
                <hr>

                <button type="submit" class="btn btn-warning btn-block"><i class="fa fa-edit fa-fw"></i>Cập
                    nhập</button>
            </form>
        </div>
    </div>
</center>

<?php
include'../includes/footer.php';
?>