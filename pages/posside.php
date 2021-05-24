<!-- SIDE PART NA SUMMARY -->
<div class="card-body col-md-3">
    <?php   
        if(!empty($_SESSION['pointofsale'])):  
            
             $total = 0;  
        
             foreach($_SESSION['pointofsale'] as $key => $product): 
        ?>
    <?php  
                  $total = $total + ($product['quantity'] * $product['price']);
                  $lessvat = ($total / 1.12) * 0.12;
                  $netvat = ($total / 1.12);
                  $addvat = ($total *0.1);
                  $id1 = $product['id'];

             endforeach;

//DROPDOWN FOR CUSTOMER
$sql = "SELECT CUST_ID, FIRST_NAME, LAST_NAME
        FROM customer
        order by FIRST_NAME asc";
$res = mysqli_query($db, $sql) or die ("Error SQL: $sql");

$opt = "<select class='form-control'  style='border-radius: 0px;' name='customer' required>
        <option value='' disabled selected hidden>Tên khách hàng</option>";
  while ($row = mysqli_fetch_assoc($res)) {
    $opt .= "<option value='".$row['CUST_ID']."'>".$row['FIRST_NAME'].' '.$row['LAST_NAME']."</option>";
  }
$opt .= "</select>";
// END OF DROP DOWN
        ?>
    <?php 
    date_default_timezone_set("Asia/Ho_Chi_Minh");
          echo "Ngày: "; 
          $today = date("Y-m-d H:i a"); 
          echo $today; 
?>
    <input type="hidden" name="date" value="<?php echo $today; ?>">
    <div class="form-group row text-left mb-3">
        <div class="col-sm-12 text-primary btn-group">
            <?php echo $opt; ?>
            <a href="#" data-toggle="modal" data-target="#poscustomerModal" type="button"
                class="btn btn-primary bg-gradient-primary" style="border-radius: 0px;"><i
                    class="fas fa-fw fa-plus"></i></a>
        </div>

    </div>
    <div class="form-group row mb-2">

        <div class="col-sm-5 text-left text-primary py-2">
            <h6>
                Tổng
            </h6>
        </div>
        <div class="col-sm-7">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo number_format($total, 2); ?>"
                    readonly name="subtotal">
            </div>
        </div>

    </div>

    <!-- <div class="form-group row mb-2">

        <div class="col-sm-5 text-left text-primary py-2">
            <h6>
                Less VAT
            </h6>
        </div>

        <div class="col-sm-7">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo $id1; ?>" readonly name="id1">
            </div>
        </div>

    </div> -->
    <input type="hidden" class="form-control text-right " value="<?php echo $id1; ?>" readonly name="id1">
    <div class="form-group row mb-2">

        <div class="col-sm-5 text-left text-primary py-2">
            <h6>
                Thuế VAT
            </h6>
        </div>

        <div class="col-sm-7">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo number_format($addvat, 2); ?>"
                    readonly name="addvat">

            </div>
        </div>

    </div>
    <div class="form-group row text-left mb-2">

        <div class="col-sm-5 text-primary">
            <h6 class="font-weight-bold py-2">
                Thành tiền
            </h6>
        </div>

        <div class="col-sm-7">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control text-right "
                    value="<?php echo number_format($total+$addvat, 2); ?>" readonly name="total">
            </div>
        </div>

    </div>

    <?php endif; ?>
    <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#posMODAL">Thanh
        toán</button>

    <!-- Modal -->
    <div class="modal fade" id="posMODAL" tabindex="-1" role="dialog" aria-labelledby="POS" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row text-left mb-2">

                        <div class="col-sm-12 text-center">
                            <h3 class="py-0">
                                Tổng cộng
                            </h3>
                            <h3 class="font-weight-bold py-3 bg-light">
                                $ <?php echo number_format($total+$addvat, 2); ?>
                            </h3>
                        </div>

                    </div>

                    <div class="col-sm-12 mb-2">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input class="form-control text-right" id="txtNumber" onkeypress="return isNumberKey(event)"
                                type="text" name="cash" placeholder="Nhập tiền mặt" name="cash" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">TIẾN HÀNH THANH TOÁN</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF Modal -->

    </form>
</div> <!-- END OF CARD BODY -->

</div>