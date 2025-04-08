<!DOCTYPE html>
<html>

      <head>
          <title>Log In</title>
          <link rel="stylesheet" type="text/css" href="login.css">
      </head>

      <body>

            <form action="doclogins.php" method="post">
                  <h2>Log In</h2>

                  <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                  <?php }?>

                  <label>Username</label>
                  <input type="text" name="uname" placeholder="Username"><br>

                  <label>Password</label>
                  <input type="password" name="password" placeholder="Password"><br>

                  <a href="adminlog.php" class="ca">Admin Login</a>
                  <button type="Submit">Log In</button>
            </form>

      </body>




</html>
