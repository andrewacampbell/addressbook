<?php include('includes/header.php'); ?>
    
      <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ); ?>" 
       method="post">
       
        <h2 class="form-signin-heading">Please sign in</h2>
        
        <label for="input-username" class="sr-only">User Name</label>
        <input type="text"  class="form-control" placeholder="User Name" autofocus id="login-username" name="username">
        
        <label for="input-password" class="sr-only">Password</label>
        <input type="password"  class="form-control" placeholder="Password" autofocus id="login-password" name="password">
        
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" />
      </form>

<?php include('includes/footer.php'); ?>
    
   