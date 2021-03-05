<!DOCTYPE html>
<html>
<head>
	<title>Exam details View</title>

	
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

</head>
<body>



	<h2 class="text-primary text-center py-3">EXAM DETAILS</h2>
	<table class="table table-hover table-bordered border-primary text-center table-success mt-5 ">
		<thead>
			<tr class>
				<th>Batch Name</th>
				<th>Exam</th>
				<th>Date</th>
				<th>Total Mark</th>
				<th>Subject</th>
				<th>Starting Time</th>
				<th>Ending Time</th>
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
							<td><?php echo $row->ename?></td>
							<td><?php echo $row->edate?></td>
							<td><?php echo $row->totalmark;?></td>
							<td><?php echo $row->subject?></td>
							<td><?php echo $row->startingtime?></td>
							<td><?php echo $row->endingtime;?></td>
							<td><a href="<?php echo base_url()?>main/exam_delete/<?php echo $row->eid;?>" class="text-decoration-none btn-outline-danger">Delete</a></td>

							<td><a href="<?php echo base_url()?>main/exam_update/<?php echo $row->eid;?>" class="text-decoration-none btn-outline-success ">Update</a></td>
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>
	<div class="col-12 text-center">
	<a href="<?php echo base_url()?>main/trainer" class="btn btn-primary ">Back to Home</a>
	</div>

</body>
</html>