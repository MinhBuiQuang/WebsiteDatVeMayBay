<?php  include 'includes/header.php'; ?>
<div class="col-lg-12">
    <h1 class="page-header">Thêm chuyến bay</h1>
</div>
<?php
        include '../modules/mysqlcon.php';            
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $hang = $_POST['hang'];
            $diemkhoihanh = $_POST['diemkhoihanh'];
            $diemtoi = $_POST['diemtoi'];
            $tgkhoihanh = $_POST['tgkhoihanh'];
            $tgtoi = $_POST['tgtoi'];
            $giatien = $_POST['giatien'];
            $query = "INSERT INTO ve(IDHang, IDDiemToi, IDDiemKhoiHanh, ThoiGianToi, ThoiGianKhoiHanh, GiaTien) 
                        values({$hang}, {$diemtoi}, {$diemkhoihanh}, '{$tgtoi}', '{$tgkhoihanh}', {$giatien})";
            $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
            if (mysqli_affected_rows($con) == 1) {
                echo "<center><b style=\"color:green\">Thêm mới thành công!</b>\n</center>";  
                header('Location: chuyenbay.php');     
            } else {
                echo "<center><b style=\"color:red\">Thêm mới thất bại!</b>\n</center>";
            }       
        } 
    ?>
<form class="needs-validation" name="frmSanBay" method="POST">
    <div class="form-group">
        <label>Hãng</label>
        <select class="form-control" name="hang">
        <option selected>Chọn hãng</option>
            <?php 
                 $query = "SELECT * FROM hang";
                 $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
                 echo "<div class=\"row\">";
                 while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            ?>
            <option value="<?php echo $elem['IDHang']; ?>"><?php echo $elem['TenHang']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Điểm khởi hành</label>
        <select class="form-control" name="diemkhoihanh">
            <option selected>Chọn điểm khởi hành</option>
            <?php 
                 $query = "SELECT * FROM sanbay";
                 $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
                 echo "<div class=\"row\">";
                 while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            ?>
            <option value="<?php echo $elem['IDSanBay']; ?>"><?php echo $elem['TenSanBay']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Điểm tới</label>
        <select class="form-control" name="diemtoi">
            <option selected>Chọn điểm tới</option>
            <?php 
                 $query = "SELECT * FROM sanbay";
                 $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
                 echo "<div class=\"row\">";
                 while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            ?>
            <option value="<?php echo $elem['IDSanBay']; ?>"><?php echo $elem['TenSanBay']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Thời gian khởi hành</label>
        <div class="input-group" >
            <input id="daKhoiHanh" name="tgkhoihanh" type='text' class="form-control" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">Thời gian đến</label>
        <div class='input-group'>
            <input id='daDen' name="tgtoi" type='text' class="form-control"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <div class="form-group">
        <label>Giá tiền</label>
        <input class="form-control" type="number" name="giatien" placeholder="Giá tiền">
    </div>
    <div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <input type="submit" value="Thêm mới" onclick="location.href='themchuyenbay.php';" name="themmoi" class="btn btn-primary">
    </div>
</div>
</form>




<?php include 'includes/footer.php' ?>
<script>
    $(document).ready(function(){
        $('#daKhoiHanh').datetimepicker({
            format:'Y-m-d H:i:s'
        });
        $('#daDen').datetimepicker({
            format:'Y-m-d H:i:s'
        });
    })
</script>