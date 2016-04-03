<?php
session_start();
include('includes/functions.php');
include('includes/connection.php';)
    
    if(isset($_POST['login'])) {
        
        $userEmail    = $POST['email'];
        $userPassword = $POST['password'];
        
    }
    
include('includes/header.php'); 

?>
    <br>
    <br>
    <br>
     <br>
     <br>
     <br>
     <br>
      <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ); ?>" 
       method="post">
       
        <h2 class="form-signin-heading">Please sign in</h2>
        
        <label for="input-email" class="sr-only">Email</label>
        <input type="email"  class="form-control" placeholder="Email" autofocus id="login-email" name="email">
        
        <label for="input-password" class="sr-only">Password</label>
        <input type="password"  class="form-control" placeholder="Password" autofocus id="login-password" name="password">
        
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" />
      </form>

<?php include('includes/footer.php'); ?>
    
   