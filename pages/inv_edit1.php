<?php
include('../includes/connection.php');
			$zz = $_POST['idd'];
            $a = $_POST['qty'];
            $b = $_POST['oh'];
		
	 			$query = 'UPDATE product set QTY_STOCK="'.$a.'", ON_HAND="'.$b.'" WHERE
					PRODUCT_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
<script type="text/javascript">
alert("Cập nhập sản phẩm thành công");
window.location = "inventory.php";
</script>