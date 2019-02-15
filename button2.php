<!-- Delete -->
<div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete this item?</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($db,"select * from marketprices where id='".$row['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
                    <h4><center>Commodity: <strong><?php echo $drow['commodity']; ?></strong></center></h4> 
					<h5><center>Market: <strong><?php echo $drow['market']; ?></strong></center></h5> 
                    <h6><center>Date: <strong><?php echo $drow['created_at']; ?></strong></center></h6> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->