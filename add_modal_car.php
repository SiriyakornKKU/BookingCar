<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_car.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">ป้ายทะเบียน:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="car_plate">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">ชื่อคนขับ:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="driver">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">หน่วยงาน:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="company">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">ประเภทรถ:</label>
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
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
