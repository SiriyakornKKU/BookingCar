<!DOCTYPE html>
<html>
<head>
	<title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<?php
 
include('conn.php');
		
$sqlcount = "SELECT count(events.car_id) as numberc, car.car_plate as car_plate from events inner join car on events.car_id=car.car_id group by events.car_id";

$result = $conn->query($sqlcount);

 if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $dataPoints[] = array("y" => $row["numberc"], "label" => "$row[car_plate]");
        }
    } else {
        echo "0 results";
    }


require_once('bdd.php');

$status = $_POST['filterstatus'];

if (isset($status))
{
    
   $sql = "SELECT * FROM events where status='$status'";
   
}
else
{
    $sql = "SELECT * FROM events where status";
    
}

$req = $bdd->prepare($sql);
$req->execute();

$reqstatus = $req->fetchAll();

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "การใช้รถ"
	},
	axisY: {
		title: "ทะเบียนรถ"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## times",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>การอนุมัติการใช้รถ </strong></center></span>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



  
  
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>เลือกสถานะรถ </strong></center></span>	
   <form method="POST" action="allowcar.php">
   <select name="filterstatus" class="form-control" id="filterstatus">
		  <option value=" ">ทั้งหมด</option>
	      <option value="0">รออนุมัติ</option>
 		  <option value="1">อนุมัติ</option>
		  <option value="2">ไม่อนุมัติ</option>
	</select>
		  <button type="submit" class="btn btn-primary">ค้นหา</button>
		  </div>
		  </div>
		 
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>ชื่อเรื่อง</th>
				<th>วันที่เริ่ม</th>
				<th>วันที่สิ้นสุด</th>
				<th>ทะเบียนรถ</th>
				<th>สถานะ</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from events");

				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['start']; ?></td>
						<td><?php echo $row['end']; ?></td>
						<td><?php echo $row['car_id']; ?></td>
						<td><?php 
						     if ($row['status'] == 0)
					         echo "รออนุมัติ"; 
					         else
							 echo "อนุมัติ"; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('buttonallow.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	
</div>
</body>
</html>