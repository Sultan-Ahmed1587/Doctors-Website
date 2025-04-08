<!DOCTYPE html>
<html>

      <head>
          <title>Sign Up</title>
          <link rel="stylesheet" type="text/css" href="login.css">
      </head>

      <body>

            <form action="signup-check.php" method="post">
                  <h2>Sign Up</h2>

                  <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                  <?php }?>

                  <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                  <?php }?>



                  <label>Name</label>
                  <?php if (isset($_GET['name'])) { ?>
                    <input type="text"
                           name="name"
                           placeholder="Name"
                           value="<?php echo $_GET['name']; ?>"><br>

                  <?php }else {?>
                        <input type="text"
                               name="name"
                               placeholder="Name"><br>
                  <?php }?>

                  <label>User Name</label>
                  <?php if (isset($_GET['uname'])) { ?>
                    <input type="text"
                           name="uname"
                           placeholder="User Name"
                           value="<?php echo $_GET['uname']; ?>"><br>

                  <?php }else {?>
                        <input type="text"
                               name="uname"
                               placeholder="User Name"><br>
                  <?php }?>


                  <label>Password</label>
                  <input type="password"
                         name="password"
                         placeholder="Password"><br>

                  <label>Re-Enter Password</label>
                  <input type="password"
                         name="re_password"
                         placeholder="Re-Enter Password"><br>

                  <label>Address</label>
                  <?php if (isset($_GET['address'])) { ?>
                  <input type="text"
                         name="address"
                         placeholder="Address"
                         value="<?php echo $_GET['address']; ?>"><br>

                  <?php }else {?>
                  <input type="text"
                         name="address"
                         placeholder="Address"><br>
                  <?php }?>

                  <label>Telephone</label>
                  <?php if (isset($_GET['tele'])) { ?>
                  <input type="text"
                         name="tele"
                         placeholder="Telephone"
                         value="<?php echo $_GET['tele']; ?>"><br>

                  <?php }else {?>
                  <input type="text"
                         name="tele"
                         placeholder="Telephone"><br>
                  <?php }?>

                  <label>Medical History</label>
                  <?php if (isset($_GET['medh'])) { ?>
                  <input type="text"
                         name="medh"
                         placeholder="Medical History"
                         value="<?php echo $_GET['medh']; ?>"><br>

                  <?php }else {?>
                  <input type="text"
                         name="medh"
                         placeholder="Medcial History"><br>
                  <?php }?>

                  <button type="Submit">Sign Up</button>
                  <a href="login.php" class="ca">Already have an Account?</a>
            </form>

      </body>




</html>
