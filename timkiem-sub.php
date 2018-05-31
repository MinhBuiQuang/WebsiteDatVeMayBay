<div class="w3ls-section w3-about" id="timkiem">
	<div class="container" style="bod">  
        <div>
            <h3 data-id="routesTitle" class="title" style="margin-bottom: 10px;">
                <?php 
                    $query = "SELECT * from sanbay WHERE IDSanBay = {$_GET['di']}";
                    $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo $row["TenSanBay"] . " → <br>";
                    $query = "SELECT * from sanbay WHERE IDSanBay = {$_GET['den']}";
                    $result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo $row["TenSanBay"] . "</h3>";
                 ?>
            <div style="float: right;">
                <div><span class="headerSearchSub"><?php if(isset($_GET['ngay'])) echo $_GET['ngay'] ?></span>
                    <span class="headerSearchSub">
                        <span class="_2ouRM">1 người</span>
                    </span>
                    <span class="headerSearchSub">Phổ thông</span>
                </div>
            </div>
        </div>

		<div>
			<table style="margin-right: auto; margin-left: auto;">
				<tr>
					<td class="resultTableHeader">Hãng hàng không</td>
					<td class="resultTableHeader">Khởi hành</td>
					<td class="resultTableHeader">Đến nơi</td>
					<td class="resultTableHeader">Thời gian bay</td>
					<td class="resultTableHeader">Giá vé</td>
				</tr>
			</table>
            <?php
				$ngay = DateTime::createFromFormat('d/m/Y', $_GET['ngay'])->format('Y-m-d');
				$di =  $_GET['di'];
				$den =  $_GET['den'];
				$query = "SELECT TenHang, s1.TenSanBay as DiemKhoiHanh, s2.TenSanBay as DiemToi, 
									ThoiGianKhoiHanh, ThoiGianToi, GiaTien, IDVe, Logo
						FROM ve INNER JOIN hang ON ve.IDHang = hang.IDHang
											INNER JOIN sanbay s1 ON ve.IDDiemKhoiHanh = s1.IDSanBay
											INNER JOIN sanbay s2 ON ve.IDDiemToi = s2.IDSanBay
						WHERE CAST(ThoiGianKhoiHanh AS DATE) = '{$ngay}' 
								AND IDDiemKhoiHanh = {$di} AND IDDiemToi = {$den}";
				$result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
				while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        	?>
			<div style="border: 1px solid #f0f0f0; margin-top: 15px;">
				<div class="container">
					<div class="result" style="width:265px">
						<div class="centered">
							<img class="resultLogo" src="images/<?php echo $elem['Logo'] ?>" alt="">
							<!-- <p class="result" style="font-size:20px"><?php //echo $elem['TenHang'] ?></p> -->
						</div>						
					</div>
					<div class="result" style="width:240px">
						<div class="centered">
							<p class="centered"><?php echo date('H:i', strtotime($elem['ThoiGianKhoiHanh'])) ?></p>
							<p><?php echo $elem['DiemKhoiHanh']; ?></p>
						</div>						
					</div>

					<div class="result" style="width:217px">
						<div class="centered">
						<p class="centered"><?php echo date('H:i', strtotime($elem['ThoiGianToi'])) ?></p>
							<p><?php echo $elem['DiemToi']; ?></p>
						</div>						
					</div>
					<div class="result" style="width:180px;">
						<div class="centered">
							<p class = class="centered"><?php 
									$datetime1 = new DateTime($elem['ThoiGianToi']);
									$datetime2 = new DateTime($elem['ThoiGianKhoiHanh']);
									$interval = $datetime1->diff($datetime2);
									echo $interval->format('%h')." Hours ".$interval->format('%i')." Minutes"; 
							?></p>
							<!-- <p class="centered">Bay thẳng</p> -->
						</div>						
					</div>
					<div class="result" style="width:240px; font-size:18px;	">
						<div class="centered">
							<h3 style="font-weight: 700;font-size: 18px; color: #fa6d01;">
								<?php echo product_price($elem['GiaTien']); ?>
							</h3>
							<button class="btnChon" onclick="window.location.href='thanhtoan.php?id=<?php echo $elem["IDVe"] ?>'">Chọn</button>
						</div>						
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>	
</div>