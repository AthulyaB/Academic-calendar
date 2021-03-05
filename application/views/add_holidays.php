<!DOCTYPE html>
<html>
<head>
	<title>Notification Adding</title>

	
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

	<style>
		
		fieldset{
			width:500px;
			height: 400px;

		}
	</style>
</head>
<body>

	

<form method="post" action="<?php echo base_url()?>main/holidays_add" class="form-group">
	<center>
		
		<fieldset class="mt-3">
			<h1> Notification</h1>
			Select Batch: 
			<select name="bname" class="form-select">
			<?php 
			if($n->num_rows()>0)
			{

				foreach($n->result() as $row)
					{
			?>
                
				<option value="<?php echo $row->id;?>"><?php echo $row->bname;?>
					
				</option>
			
			<?php

				}
			}
			?>
			</select><br><br>



			 <label class="bmd-label-floating">Add Holidays</label>
                          <input type="text" class="form-control"name="holiday"><br><br>


			<input type="submit" name="submit" value="Add" class="btn btn-primary">
			
		</fieldset>
	</center>

</form>

</body>
</html>