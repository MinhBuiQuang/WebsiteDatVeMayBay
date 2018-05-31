<?php  include 'includes/header.php'; ?>
<div class="col-lg-12">
    <h1 class="page-header">Quản lý loại vé</h1>
</div>
<?php
        include '../modules/mysqlcon.php';            
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tenloaive = $_POST['tenloaive'];
            $ghichu = $_POST['ghichu'];
                
            $query = "INSERT INTO loaive(TenLoaiVe, GhiChu) values('{$tenloaive}', '{$ghichu}')";
            $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
            if (mysqli_affected_rows($con) == 1) {
                echo "<center><b style=\"color:green\">Thêm mới thành công!</b>\n</center>";  
                header('Location: loaive.php');     
            } else {
                echo "<center><b style=\"color:red\">Thêm mới thất bại!</b>\n</center>";
            }       
        } 
?>
<form class="needs-validation" name="frmLoaiVe" method="POST">
    <div class="form-group">
        <label>Tên loại vé:</label>
        <input type="text" name="tenloaive" class="form-control" placeholder="Tên loại vé" required>
    </div>
    <div class="form-group">
        <label>Ghi chú:</label>
        <textarea class="form-control" rows="2" placeholder="Ghi chú" name = "ghichu"></textarea>
    </div>
    <div class="row" style="margin-bottom: 20px">
        <div class="col-lg-12">
            <input type="submit" value="Thêm mới" name="themmoi" class="btn btn-primary">
        </div>
    </div>
</form>
<?php
    if(isset($_GET['removeID'])) {
        $id = $_GET['removeID'];
        $query = "DELETE FROM loaive WHERE IDLoaiVe = {$id}";
        $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
    }     
?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Tên loại vé</th>
                <th>Ghi chú</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php      
            $query = "SELECT * FROM loaive";
            $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
            echo "<div class=\"row\">";
            while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $elem['TenLoaiVe'] ?> </td>
            <td><?php echo $elem['GhiChu'] ?> </td>
            <td style="text-align:center"><span><a href="loaive.php?removeID=<?php echo $elem['IDLoaiVe'] ?>"  class="fa fa-times" onclick="return confirm('Are you sure?');"></a></span></td>
        <tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<?php include 'includes/footer.php' ?>