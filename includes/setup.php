<?php require_once("../core/init.php"); ?>

<?php include 'nav.php'; ?>
<?php include 'sidenav.php'; ?>
<?php include 'header.php'; ?>
<?php $user_id=$_SESSION['user_id']; ?>
<?php $blocks=$user->fetchbyid('blocks',$user_id); ?>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<hr>
			<fieldset>
				<legend>Blocks</legend>
				<table class="table table-dark">
					<thead>
						<tr>
							<th scope="col">Blockname</th>
							<th scope="col">Units</th>
							
						</tr>
					</thead>
					<tbody>
						<tr><td><?php echo $blocks->blockname; ?></td></tr>						
					</tbody>
				</table>
			</fieldset>
			
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
			Add blocks
			</button>
			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Add Block</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="jumbotron">
								<form action="" method="post">
									<input type="text" name="blocks"><br><br>
									
									
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Add Units
			</button>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>