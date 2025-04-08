<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Witch Doctor GP | Prescriptions</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Witch</span> Doctor GP</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="details.php">Details</a></li>
            <li><a href="appointment.php">Appointments</a></li>
            <li><a href="logout.php">Log-out</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1><?php echo $_SESSION['name']; ?></h1>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Your Contact Details</h1>
          <p>

          </p>
          <p class="dark">
            <?php echo $_SESSION['user_name']; ?><br>
            <?php echo $_SESSION['name']; ?><br>
            <?php echo $_SESSION['address']; ?><br>
            <?php echo $_SESSION['tele']; ?><br>
          </p>
        </article>

        <article id="main-col">
          <h1 class="page-title">Your Medical History <?php echo $_SESSION['name']; ?><br></h1>
          <p>

          </p>
          <p class="dark">
            <?php echo $_SESSION['user_name']; ?><br>
            <?php echo $_SESSION['name']; ?><br>
            <?php echo $_SESSION['address']; ?><br>
            <?php echo $_SESSION['tele']; ?><br>
            <?php echo $_SESSION['medicalH']; ?><br>
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Doctors Note</h3>
            <p></p>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Witch Doctor GP, Copyright &copy; 2022</p>
    </footer>
  </body>
</html>
<?php
}else{
    header("Location: login.php");
    exit();
}
 ?>
