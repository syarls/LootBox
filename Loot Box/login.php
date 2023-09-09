<?php include 'includes/session.php'; ?>
<style>
  body {
  /* The image used */
  background-image: url('images/bg.jpg');

  /* Full height */
  height: 90%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.avatar{
    background-image: url('images/logoloot.png');
    width: 140px;
    height: 140px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
}
</style>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body >
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body">
      <div class="form-group">
    	<p class="login-box-msg">Login to start your session</p>
        <div class="avatar">
          
        </div>

    	<form action="verify.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
           <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          <hr>
          <div class="form-group mx-sm-3 mb-2">
            <center>
          <a href="index.php" class="btn btn-outline-primary" role="button"><i class="fa fa-home"></i> Home</a>
          <a href="password_forgot.php" >Forgot Password?</a>
          <a href="signup.php" class="btn btn-link">Sign Up</a>
          </center>
        </div>
        </div>
      	</div>  
    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Login</button>
    </form>
  </div>
</div>
</div>

	
<?php include 'includes/scripts.php' ?>
</body>
</html>



<!-- <div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form" action="verfif" method="post">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <button href="" class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">Send My Password</button>
                                  </div>
                                </fieldset>
                                <a href="login.php">Already have an account?</a>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 > -->

