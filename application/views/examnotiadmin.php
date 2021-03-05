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
        <th>BATCH</th>
        <th>EXAM</th>
        <th>DATE</th>
        <th>TOTALMARK</th>
        <th>STARTING TIME</th>
        <th>ENDING TIME</th>
      
        
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
              <td><?php echo $row->eid;?></td>
              <td><?php echo $row->bname;?></td>
              <td><?php echo $row->ename?></td>
              <td><?php echo $row->edate?></td>
               <td><?php echo $row->totalmark;?></td>
              <td><?php echo $row->startingtime?></td>
              <td><?php echo $row->endingtime?></td>
              
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