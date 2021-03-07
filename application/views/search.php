<!-- 
@Search timetable by date
*@Athulya
*@date
*@06/03/2021
 -->
<!DOCTYPE html>
<html>
<head>
<title>login</title>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>admin/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Academic Calendar
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>admin/assets/demo/demo.css" rel="stylesheet" />
</head>
<style>
  form
  {
    border:2px solid;
    margin-left:400px;
    width:400px;
    text-align:center;

  }
  input
  {
    padding:10px;
    margin:20px;
  }
  *{
  padding:0px;
  margin:0px;
}
.bi{
  background-image:url(../image/f1.png);
  background-size:cover;
  height:500px;
  }
  td,tr{
    padding:10px;
  }
.menubar{
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:100px;
}

.menubar ul{
    list-style:none;
    display:inline-flex;
    padding:5px;
}
.menubar ul li a{
      color:white;
      text-decoration:none;
      padding:10px;
      font-size:18px;
      font-stretch:expanded; 
      font-weight:bold; 
      font-family: "Times New Roman", Times, serif;
  
}
.menubar ul li{
       padding:10px; 
       
}
a:hover{
      background-color:grey;
      border-radius:10px;
}
.submenu{
      display:none;  
     border-radius:10px; 

}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:#B22222;
         color:white;
         margin-left:-25px;
         padding:10px;
}
.submenu ul{
           display:block;
}
.submenu ul li{
             
             border-radius:10px; 
}
  
.bgcolor
{
  color:#B22222;
}
.navbar-brand img
{
  height: 50px;
  padding-left:30px;
}
#nav-bar
{
  position: sticky;
  top: 0;
  z-index: 10;
}
</style>
<body>
  <!-- <nav class="menubar navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../image/log.png"></a>
        
    </div>
</nav> -->
<div class="logo"><a href="<?php echo base_url()?>main/student" class="simple-text logo-normal">
          ACADEMIC CALENDER
        </a></div>
<section class="py-5 bi">
  <div class="col-12">
 </div>

  <form method="post" action="<?php echo base_url()?>main/searchaction">
    <center><table class="h-10">
      <tr>
        <td>DATE</td> 
    <td><input type="date" name="dat" placeholder="DATE FOR TIME TABLE"></td>
      </tr>
      <tr><td>
        BATCH:</td><td><select name="bname" class="form-select">
          <?php
          if($n->num_rows()>0)
          {
            foreach ($n->result() as $row) 
            {
              # code...
            
          ?>
          <option value="<?php echo $row->id;?>"><?php echo $row->bname;?></option> 
          
          <?php
        }
        }
        ?>
        </select>
        </td></tr>
    
    <tr>
    <td><input type="submit" name="submit" value="ok"></td>
    </tr>
    </table>
  </form>
  </section>
  
    
  



</body>
</html>