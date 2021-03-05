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
				
				<th>Batch Name</th>
				
				<th>Date</th>
				<th>First Period</th>
				<th>Second Period</th>
				<th>Third Period</th>
				<th>Fourth Period</th>
				<th>Fifth Period</th>
				<th>Sixth Period</th>
				<th>Seventh Period</th>
				<th>Eighth Period</th>
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
							<td><?php echo $row->date?></td>
							<td><?php echo $row->first?></td>
							<td><?php echo $row->second;?></td>
							<td><?php echo $row->third?></td>
							<td><?php echo $row->fourth?></td>
							<td><?php echo $row->fifth;?></td>
							<td><?php echo $row->sixth?></td>
							<td><?php echo $row->seventh?></td>
							<td><?php echo $row->eighth?></td>
							<td><a href="<?php echo base_url()?>main/delete/<?php echo $row->id;?>" class="text-decoration-none btn-outline-danger">Delete</a></td>

							
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