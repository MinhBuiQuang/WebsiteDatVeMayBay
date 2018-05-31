


<?php include 'modules/header.php'; 
	    function product_price($priceFloat) {
			$symbol = ' VNĐ';
			$symbol_thousand = ',';
			$decimal_place = 0;
			$price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
			return $price.$symbol;
		}   
?>
	  
<?php 
	function isDate($date) {
		if (empty($errors['warning_count'])) {
			list($d, $m, $y) = explode('/', $date);
			return checkdate($m, $d, $y);
		}	
		return false;		
	}
	if (isset($_GET['ngay']) && isset($_GET['di']) && isset($_GET['den'])) {
		if(($_GET['di'] != 0) && ($_GET['den'] != 0))
			if (isDate($_GET['ngay']))
				include 'timkiem-sub.php';
	}
?>



<?php include 'modules/footer.php'; ?>
<