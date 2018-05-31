<?php  include 'includes/header.php'; ?>
<div class="col-lg-12">
    <h1 class="page-header">Danh sách các hãng</h1>
</div>
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <input type="button" value="Thêm mới" onclick="location.href='themhang.php';" name="themmoi" class="btn btn-primary">
    </div>
</div>
<?php
    include '../modules/mysqlcon.php';
    if(isset($_GET['removeID'])) {
        $id = $_GET['removeID'];
        $query = "DELETE FROM hang WHERE IDHang = {$id}";
        $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
    }     
?>
<?php      
    $query = "SELECT * FROM hang";
    $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
    echo "<div class=\"row\">";
    while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
    <div class="col-lg-4">
        <div class="panel panel-default" style="height:200px;">
            <div class="panel-heading">
                <center><?php echo $elem['TenHang']; ?><span><a href="hang.php?removeID=<?php echo $elem['IDHang'] ?>"  class="fa fa-times pull-right" onclick="return confirm('Are you sure?');"></a></span></center>                
            </div>
            <div class="panel-body">
                <img class="imgCenter" src="../images/<?php echo $elem['Logo']; ?>" alt="">
            </div>
        </div>
    </div>
<?php
    }
?>
    </div>
    <style>
        .imgCenter {
            max-height:120px;
            max-width:200px;
            margin: auto;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
        }
    </style>

    

<?php include 'includes/footer.php' ?>