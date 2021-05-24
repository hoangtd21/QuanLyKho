<?php
include'../includes/connection.php';
if(isset($_GET['id'])){
	$query = 'DELETE FROM product WHERE PRODUCT_ID = ' . $_GET['id'];
    $result = mysqli_query($db, $query) or die(mysqli_error($db));		
    ?>
<script type="text/javascript">
alert("Xóa sản phẩm thành công.");
window.location = "product.php";
</script>
<?php
    			//break;
            }
        //}
	
?>