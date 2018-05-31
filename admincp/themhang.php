<?php  include 'includes/header.php'; ?>
<div class="col-lg-12">
    <h1 class="page-header">Thêm hãng</h1>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <?php
            include '../modules/mysqlcon.php';            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $tenHang = $_POST['tenhang'];
                $uploaddir = '../images/';
                $uploadfile = pathinfo(basename($_FILES['logo']['name']), PATHINFO_FILENAME);
                $filename = $uploadfile . '_' . date('YmdHis') . '.' . pathinfo(basename($_FILES['logo']['name']), PATHINFO_EXTENSION);
                $uploadfile =  $uploaddir . $filename;         
                if (move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile)) {
                    $query = "INSERT INTO hang(Logo, TenHang) values('{$filename}', '{$tenHang}')";
                    $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
                    if (mysqli_affected_rows($con) == 1) {
                        echo "<center><b style=\"color:green\">Thêm mới thành công!</b>\n</center>";  
                        header('Location: hang.php');     
                    } else {
                        echo "<center><b style=\"color:red\">Thêm mới thất bại!</b>\n</center>";
                    }        
                } else {
                    echo "<center><b style=\"color:red\">Thêm mới thất bại!</b>\n</center>";
                }
            } 
        ?>
        <form enctype="multipart/form-data" name="frmThemHang" method="POST">
            <div class="form-group">
                <label for="">Tên hãng</label>
                <input type="text" name="tenhang" class="form-control" placeholder="Tên hãng">
            </div>
            <div class="form-group">
                <label class="control-label">Logo hãng</label>
                <input type="file" class="filestyle" name="logo" data-buttonText="Chọn ảnh" accept="image/x-png,image/gif,image/jpeg">   
            </div>
            <div class="form-group">
                <input type="submit" value="Thêm mới" name="themmoi" class="btn btn-primary pull-right" />
            </div>
        </form>
    </div>
</div>
 <?php include 'includes/footer.php' ?>