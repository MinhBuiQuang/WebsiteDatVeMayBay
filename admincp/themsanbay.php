<?php  include 'includes/header.php'; ?>
<div class="col-lg-12">
    <h1 class="page-header">Thêm sân bay</h1>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <?php
            include '../modules/mysqlcon.php';            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $tensanbay = $_POST['tensanbay'];
                $diachi = $_POST['diachi'];
                $soduongbang = $_POST['soduongbang'];
                $namxaydung = $_POST['namxaydung'];
                 
                $query = "INSERT INTO sanbay(TenSanBay, DiaChi, SoDuongBang, NamXayDung) values('{$tensanbay}', '{$diachi}', {$soduongbang}, '{$namxaydung}')";
                $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
                if (mysqli_affected_rows($con) == 1) {
                    echo "<center><b style=\"color:green\">Thêm mới thành công!</b>\n</center>";  
                    header('Location: sanbay.php');     
                } else {
                    echo "<center><b style=\"color:red\">Thêm mới thất bại!</b>\n</center>";
                }       
            } 
        ?>
        <form class="needs-validation" name="frmSanBay" method="POST">
            <div class="form-group">
                <label for="">Tên sân bay</label>
                <input type="text" name="tensanbay" class="form-control" placeholder="Tên sân bay" required>
            </div>
            <div class="form-group">
                <label class="control-label">Tỉnh thành</label>
                <input type="text" name="diachi" class="form-control" placeholder="Tỉnh thành" required>
            </div>
            <div class="form-group">
                <label class="control-label">Số đường băng</label>
                <input type="number" name="soduongbang" class="form-control" placeholder="Số đường băng" required>
            </div>
            <div class="form-group">
                <label class="control-label">Năm xây dựng</label>
                <input type="number" name="namxaydung" class="form-control" placeholder="Năm xây dựng" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Thêm mới" name="themmoi" class="btnChon" />
            </div>
        </form>
    </div>
</div>
<?php include 'includes/footer.php' ?>