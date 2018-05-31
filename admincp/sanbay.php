<?php  include 'includes/header.php'; ?>
<div class="col-lg-12">
    <h1 class="page-header">Quản lý sân bay</h1>
</div>
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <input type="button" value="Thêm mới" onclick="location.href='themsanbay.php';" name="themmoi" class="btn btn-primary">
    </div>
</div>
<?php
    include '../modules/mysqlcon.php';
    if(isset($_GET['removeID'])) {
        $id = $_GET['removeID'];
        $query = "DELETE FROM sanbay WHERE IDSanBay = {$id}";
        $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
    }     
?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Tên sân bay</th>
                <th>Địa chỉ</th>
                <th>Số đường băng</th>
                <th>Năm xây dựng</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php      
            $query = "SELECT * FROM sanbay";
            $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
            echo "<div class=\"row\">";
            while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $elem['TenSanBay'] ?> </td>
            <td><?php echo $elem['DiaChi'] ?> </td>
            <td><?php echo $elem['SoDuongBang'] ?> </td>
            <td><?php echo $elem['NamXayDung'] ?> </td>
            <td style="text-align:center"><span><a href="sanbay.php?removeID=<?php echo $elem['IDSanBay'] ?>"  class="fa fa-times" onclick="return confirm('Are you sure?');"></a></span></td>
        <tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include 'includes/footer.php' ?>