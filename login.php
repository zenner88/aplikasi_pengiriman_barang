<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <style type="text/css">
    body {
      background: #3D5AFE;
    }
    .btn-primary {
      color: #fff;
      background-color: #2962FF;
      border-color: #2962FF; 
      width: 100%;
      border-radius: 0px;
    }
    .btn-primary:hover {
      cursor: pointer;
    }
    .form-control {
      border-radius: 0px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div style="width: 400px; margin: 0 auto; padding: 8% 0 0 0;">
      <div class="clearfix" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); background: #fff; padding: 10%">
        <form name="form1" id="form1" method="post" action="ceklogin.php">
          <div class="col-md-12" style="text-align: center;">
            <label>Login Administrator</label>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <input type="text" name="txtusername" class="form-control" placeholder="username">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <input type="password" name="txtpassword" class="form-control" placeholder="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Login Now</button>  
            </div>
          </div>
        </form>
      </div>
        
    </div>
  
  
</body>
</html>