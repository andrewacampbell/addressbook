<?php
session_start();

include('includes/functions.php');
include('includes/connection.php');

global $logginError;
global $userEmail;
global $logginUser;

$logginUser = isset($_SESSION['logginUser']) ? $_SESSION['logginUser'] : '';

//$logginUser = $_SESSION['loggedInUser'];

if(isset($_POST['login'])) {
        
        $userEmail    = validateFormData($_POST['email']);
        $userPassword = validateFormData($_POST['password']);
        
    $query = "SELECT username, password FROM users WHERE email = '$userEmail'";

    $result = mysqli_query($conn, $query);
    //echo $result;
    
    if(mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            $name       = $row['username'];
            $hashPass   = $row['password'];
        }
        
        if(password_verify($userPassword, $hashPass)) {
            
            $_SESSION['logginUser'] = $name;
            
            header("Location: clients.php");
        } else {
            $logginError = "<div class = 'alert alert-danger'> Wrong username / password combination. Try again. </div>";
        }
    } else {
        $logginError = "<div class = 'alert alert-danger'> No such user in database. Please try again. <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
}

mysqli_close($conn);

include('includes/header.php'); 

?>
    <br>
    <br>
    <br>
     <br>
     <br>
     <br>
     <br>
     
     <?php echo $logginError; ?>
      <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ); ?>" 
       method="post">
       
        <h2 class="form-signin-heading">Please sign in</h2>
        
        <label for="input-email" class="sr-only">Email</label>
        <input type="email"  class="form-control" placeholder="Email" autofocus id="login-email" name="email" value="<?php echo $userEmail; ?>">
        
        <label for="input-password" class="sr-only">Password</label>
        <input type="password"  class="form-control" placeholder="Password" autofocus id="login-password" name="password">
        
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" />
      </form>

<?php include('includes/footer.php'); ?>
    
   