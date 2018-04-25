<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user where userid='".$row['userid']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Firstname: <strong><?php echo $drow['fname']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['userid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from user where userid='".$row['userid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['userid']; ?>">
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">ชื่อ-นามสกุล:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="fname" class="form-control" value="<?php echo $erow['fname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">ชื่อบัญชีผู้ใช้:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="username" class="form-control" value="<?php echo $erow['username']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">รหัสผ่าน:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="password" class="form-control" value="<?php echo $erow['password']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">เบอร์โทร:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="tel" class="form-control" value="<?php echo $erow['tel']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">ประเภท:</label>
						</div>
						<div class="col-lg-9 mt-2">
							<select class="selectpicker" name="type" value="<?php echo $erow['type']; ?>">
							  <option title="เลือกประเภท">user</option>
							  <option title="เลือกประเภท">admin</option>
							</select>
						</div>
					</div>
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