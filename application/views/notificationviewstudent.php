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
				<th>Notification</th>
				<th>Date</th>
				
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
							<td><?php echo $row->nid;?></td>
							<td><?php echo $row->notification?></td>
							<td><?php echo $row->date?></td>
							
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>
	<div class="col-12 text-center">
	
	</div>

</body>
</html>