<!DOCTYPE html>
<html lang="en">

<head>
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

<body class="">
  <div class="logo"><a href="<?php echo base_url()?>main/admin" class="simple-text logo-normal">
          ACADEMIC CALENDER
        </a></div>
  <div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card " style="width: 70rem; height:28rem;">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Batch details</h4>
                  <p class="card-category"></p>
                </div>
<div class="card-body p-5">
                  <form action="<?php echo base_url()?>main/batchinsert" method="post">
                    <div class="row">
                      <div class="col-md-8 mt-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Batch name</label>
                          <input list="batch" name="bname">
      <datalist id="batch">
        <option value="DDU-JSD">
        <option value="YUVA-JSD">
        <option value="DDU-UI">
        <option value="YUVA-UI">
      </datalist>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Start Date</label>
                          <input type="date" class="form-control"name="startdate">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">End Date</label>
                          <input type="date" class="form-control"name="enddate">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total days</label>
                          <input type="text" class="form-control"name="totalday">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total Hours</label>
                          <input type="text" class="form-control"name="totalhr">
                        </div>
                      </div>
                    </div>
                   
                    <button type="submit" class="btn btn-info ">Submit</button>
                    <button  class="btn btn-info "><a class="text-white" href="<?php echo base_url()?>main/batchdetail">VIEW BATCH</a></button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </body>
          </html>


