
<?php 
  include('includes/header.php');
?>

<body>
<?php 
  include('includes/nav2.php');
?>
<br />
  <br />

  <div class="container body-content">
    <div class="row">
		<div class="col-xs-12 col-lg-4">
        
		</div>
      <div class="col-xs-12 col-lg-4">
        <h1>
          <center>SALARY CALCULATOR</center>
        </h1>
        <form name="loginform" ng-controller="formCtrl" class="form-horizontal" method="post" action="index.php">
										
										
				
				
										
										
										
						<div class="signup-form-container">					
							<div class="well form-header">		
								<div class="control-group">
									<label class="control-label" for="login_email">Employee Level</label>
									<div class="controls input-group">
									    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<select id="employeelevel" name="employeelevel" class="selectpicker">
  												<option value="intern">Intern</option> 
  												<option value="associate">Associate</option>
  												<option value="manager">Manager</option>
  												<option value="executive">Executive</option>
  												<option value="director">Director</option>
										</select>	
									
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="login_psword">Years of Experience</label>
									<div class="controls input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<!--<input type="select" class="form-control" name="login_psword" placeholder="Your password">-->
										<select id="yearofexp" name="yearofexp" class="selectpicker">
  												<option value="intern">Intern</option> 
  												<option value="associate">Associate</option>
  												<option value="manager">Manager</option>
  												<option value="executive">Executive</option>
  												<option value="director">Director</option>
										</select>	
									</div>
									</div>
									
									
									<br />
									
									<div class="control-group">
										<div class="controls input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>
										<button type="submit" name="login" onclick="getvalue()" class="btn btn-success">Calculate Salary</button>
									</div>
										<br />
										<p><a href="help.php">Help?</a></p>
									</div>
							</div>
							</div>
												</form>	
      </div>
	  <div class="col-xs-12 col-lg-4">
        
      </div>
    </div>
  </div>

 
  <?php 
  include('includes/footer2.php');
?>

