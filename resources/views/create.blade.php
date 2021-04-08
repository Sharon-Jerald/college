<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
</head>
<body>
  <div class="container">
      <div class="row">
      <form action="/facultyread" method="post">

      {{ csrf_field() }}
          <div class="col col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <table class="table table-borderless">
          <tr>
              <td>Name:</td>
              <td><input name="fname" type="text" class="form-control"></td>
          </tr>
          <tr>
              <td>Designation:</td>
              <td><input name="fdesignation" type="text" class="form-control"></td>
          </tr>
          <tr>
              <td>College:</td>
              <td><input name="fcollege" type="text" class="form-control"></td>
          </tr>
          <tr>
              <td>Contact No.</td>
              <td><input name="fcontact" type="text" class="form-control"></td>
          </tr>
          <tr>
              <td></td>
              <td><button class="btn btn-success">SUBMIT</button></td>
          </tr>
          </table>
          </div>
          </form>
      </div>
  </div>  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>