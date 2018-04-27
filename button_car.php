<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['car_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from car where car_id='".$row['car_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>ป้ายทะเบียน: <strong><?php echo $drow['car_plate']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete_car.php?id=<?php echo $row['car_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['car_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from car where car_id='".$row['car_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit_car.php?id=<?php echo $erow['car_id']; ?>">
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">ป้ายทะเบียน:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="car_plate" class="form-control" value="<?php echo $erow['car_plate']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">ชื่อ-นามสกุล (คนขับ):</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="driver" class="form-control" value="<?php echo $erow['driver']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">หน่วยงาน:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="company" class="form-control" value="<?php echo $erow['company']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">ประเภทรถ:</label>
						</div>
						<div class="col-lg-9">
							<select class="selectpicker" name="car_type">
							  <option title="เลือกประเภท">รถตู้</option>
							  <option title="เลือกประเภท">รถทัวร์</option>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>	
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">รูปรถ:</label>
						</div>
						<div class="col-lg-9">
							<input type="file" name="image" id="image" accept="image/*">
						</div>
					</div>
					<div style="height:10px;"></div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->