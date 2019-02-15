<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($db,"select * from marketprices where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Market:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="market" class="form-control" value="<?php echo $erow['market']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>

						<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Category:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="category" class="form-control" value="<?php echo $erow['category']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>

						<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Commodity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="commodity" class="form-control" value="<?php echo $erow['commodity']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>

						<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Price:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="price" class="form-control" value="<?php echo $erow['price']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>

						<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Unit:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="unit" class="form-control" value="<?php echo $erow['unit']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>

						<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Supply:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="supply" class="form-control" value="<?php echo $erow['supply']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>

						<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="date" class="form-control" value="<?php echo $erow['created_at']; ?>">
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