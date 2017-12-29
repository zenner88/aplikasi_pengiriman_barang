<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			form.track.focus( );
			return false;
		}
	}
</script>
<style>
  body{
    background-color:#006064;
  }
  .centered {
    position: fixed;
    top: 50%;
    left: 50%;
    /* bring your own prefixes */
    transform: translate(-50%, -50%);
  }
  div.transbox {
    margin: 90px;
    padding: 20px;
    background-color: #fff;
    border: 4px solid #B2EBF2;
    /* opacity: 0.6; */
  }

</style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
    </div>
    <div class="col-lg-12 col-md-12">
      <div class="text-center">
        <div class="transbox">
          <h2>Trace your Cargo/Courier</h2></br>
          <form action="track-result.php" method="post" name="form" id="form" class="form-inline">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <span class="input-group-addon">Ex: IXM53533553</span>
              <input type="text" id="inlineFormInputGroup" class="form-control" aria-describedby="basic-addon3" name="Consignment" placeholder="Consignment no..." id="Consignment" maxlength="50">
            </div>
              <input name="Submit" type="submit" type="button" class="btn btn-primary" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
          </form>
        </div>
      </div>
    </div>    
    <div class="col-lg-10 col-md-12">
    </div>
  </div>
</div>

</body></html>
