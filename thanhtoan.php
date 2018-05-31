<?php include 'modules/header.php' ;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $taikhoan = $_SESSION['taikhoan'];
        $idtaikhoan = $taikhoan['IDTaiKhoan'];
        $soluongve = $_POST['soluong'];
        $giatien = $_POST['giatien'];
        $idve = $_POST['idve'];
        $tongtien = $giatien * $soluongve;
        $query = "INSERT INTO hoadon(IDTaiKhoan, IDVe, SoLuong, TongTien) values('{$idtaikhoan}', '{$idve}', {$soluongve}, '{$tongtien}')";
        $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
        if (mysqli_affected_rows($con) == 1) {
            echo "<center><b style=\"color:green\">Thêm mới thành công!</b>\n</center>";  
            exit();
        } else {
            echo "<center><b style=\"color:red\">Thêm mới thất bại!</b>\n</center>";
        }       
    }
?>
<?php
    if(isset($_SESSION['taikhoan'])) {
        header('Location: login.php');
        exit();
    }
    if(!isset($_GET['id']) || $_SERVER['REQUEST_METHOD'] != 'POST') {
        exit();
    }
?>
<?php     
    function product_price($priceFloat) {
        $symbol = ' VNĐ';
        $symbol_thousand = ',';
        $decimal_place = 0;
        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
        return $price.$symbol;
    }   
?>


<div class="w3ls-section w3-about" id="timkiem">
	<div class="container" style="bod">  
        <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT TenHang, s1.TenSanBay as DiemKhoiHanh, s2.TenSanBay as DiemToi, 
									ThoiGianKhoiHanh, ThoiGianToi, GiaTien, IDVe, Logo
						FROM ve INNER JOIN hang ON ve.IDHang = hang.IDHang
											INNER JOIN sanbay s1 ON ve.IDDiemKhoiHanh = s1.IDSanBay
											INNER JOIN sanbay s2 ON ve.IDDiemToi = s2.IDSanBay
                        WHERE IDVe = {$id}";
                $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            }        
        ?>
        <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
            <div class="panel panel-default" style="height:200px;">
                <div class="panel-heading">
                    <center><span class="fa fa-plane" style='margin-right:20px'></span><?php echo $row['DiemKhoiHanh'] . ' → ' . $row['DiemToi']  ?></center>                
                </div>
                <form action="thanhtoan.php" method="post">
                    <div class="panel-body">
                        <div class="col-md-3">
                            <img class="imgCenter" style="margin-left:30px" src="images/<?php echo $row['Logo']; ?>" alt="">
                        </div>
                        <div class="col-md-3">
                            <center><h2>Khởi hành</h2></center>                    
                            <h1 class="centered" style="margin-top: 20px"><?php echo date('H:i', strtotime($row['ThoiGianKhoiHanh'])) ?></h1>
                        </div>
                        <div class="col-md-3">
                            <center><h2>Thời gian tới</h2></center>
                            <h1 class="centered" style="margin-top: 20px"><?php echo date('H:i', strtotime($row['ThoiGianToi'])) ?></h1>
                        </div>
                        <div class="col-md-3">
                            <center><h2 style="font-weight: 700;font-size: 24px; color: silver;"><?php echo product_price($row['GiaTien']) ?></h2></center>
                            <div class="centered"><span>x</span><input value="1" onchange="inputChange(this.value)" onkeyup="inputChange(this.value)" style="width:40px" type="number" name="soluong"><span>=</span></div>
                            <h1 style="font-weight: 800;font-size: 24px; color: #fa6d01;" class="centered" id="total"><?php echo product_price($row['GiaTien']) ?></h1>
                            <div class="centered"><input type="submit" value="Thanh toán" name="themmoi" class="btnChon" /> </div>
                            <input type="hidden" name="giatien" value="<?php echo $row['GiaTien'] ?>">
                            <input type="hidden" name="idve" value="<?php echo $row['IDVe'] ?>">
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>
<?php include 'modules/footer.php' ?>
<script>
function formatCurrency(number){
    var n = number.split('').reverse().join("");
    var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");    
    return  n2.split('').reverse().join('') + 'VNĐ';
}
    function inputChange(val) {
            var giaTien = '<?php echo $row['GiaTien'] ?>';
            document.getElementById("total").innerHTML = formatCurrency((val*giaTien).toString());
        }
</script>
<style>
    .imgCenter {
        max-height:120px;
        max-width:200px;
        margin: auto;
    }
</style>