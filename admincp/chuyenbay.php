<?php  include 'includes/header.php'; ?>
<div class="col-lg-12">
    <h1 class="page-header">Quản lý chuyến bay</h1>
</div>
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <input type="button" value="Thêm mới" onclick="location.href='themchuyenbay.php';" name="themmoi" class="btn btn-primary">
    </div>
</div>
<?php
    include '../modules/mysqlcon.php';
    if(isset($_GET['removeID'])) {
        $id = $_GET['removeID'];
        $query = "DELETE FROM ve WHERE IDVe = {$id}";
        $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
    }  
    function product_price($priceFloat) {
        $symbol = ' VNĐ';
        $symbol_thousand = ',';
        $decimal_place = 0;
        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
        return $price.$symbol;
    }   
?>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Hãng</th>
                <th>Điểm khởi hành</th>
                <th>Điểm tới</th>
                <th>Thời gian khởi hành</th>
                <th>Thời gian tới</th>
                <th>Giá tiền</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php      
            $query = "SELECT TenHang, s1.TenSanBay as DiemKhoiHanh, s2.TenSanBay as DiemToi, 
                                ThoiGianKhoiHanh, ThoiGianToi, GiaTien, IDVe
                     FROM ve INNER JOIN hang ON ve.IDHang = hang.IDHang
                                        INNER JOIN sanbay s1 ON ve.IDDiemKhoiHanh = s1.IDSanBay
                                        INNER JOIN sanbay s2 ON ve.IDDiemToi = s2.IDSanBay";
            $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
            echo "<div class=\"row\">";
            while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $elem['TenHang'] ?> </td>
            <td><?php echo $elem['DiemKhoiHanh'] ?> </td>
            <td><?php echo $elem['DiemToi'] ?> </td>
            <td><?php echo date('d/m/Y H:i:s', strtotime($elem['ThoiGianKhoiHanh'])) ?> </td>
            <td><?php echo date('d/m/Y H:i:s', strtotime($elem['ThoiGianToi'])) ?> </td>
            <td><?php echo product_price($elem['GiaTien']) ?> </td>
            <td style="text-align:center"><span><a href="chuyenbay.php?removeID=<?php echo $elem['IDVe'] ?>"  class="fa fa-times" onclick="return confirm('Are you sure?');"></a></span></td>
        <tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<?php include 'includes/footer.php' ?>