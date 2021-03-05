<!DOCTYPE html>
<html>
<head>
	<title>Admin Notification View</title>

	
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

</head>
<body>



	<h2 class="text-primary text-center py-3">NOTIFICATIONS</h2>
	<table class="table table-hover table-bordered border-primary text-center table-success mt-5 ">
		<thead>
			<tr class>
				<th>ID</th>
				<th>Batch Name</th>
				<th>Notification</th>
				<th>Date</th>
				<th>Action</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php
		if($n->num_rows()>0)
		{
			foreach($n->result() as $row)
					{
		?>
						<tr>
							<td><?php echo $row->bname;?></td>
							<td><?php echo $row->notification?></td>
							<td><?php echo $row->date?></td>
							<td><a href="<?php echo base_url()?>main/notify_delete/<?php echo $row->nid;?>" class="text-decoration-none btn-outline-danger">Delete</a></td>

							<td><a href="<?php echo base_url()?>main/admin_update/<?php echo $row->nid;?>" class="text-decoration-none btn-outline-success ">Update</a></td>
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>
	<div class="col-12 text-center">
	<a href="<?php echo base_url()?>main/admin" class="btn btn-primary ">Back to Home</a>
	</div>

</body>
</html>