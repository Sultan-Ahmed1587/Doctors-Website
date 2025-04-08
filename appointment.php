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
    <title>Witch Doctor GP | Appointments</title>
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
            <li><a href="details.php">Details</a></li>
            <li class="current"><a href="appointment.php">Appointments</a></li>
            <li><a href="logout.php">Log-out</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Would you like to book an Appointment <?php echo $_SESSION['name']; ?>?</h1>
        <form>
          <li><a href="booking.php">Book</a><li/>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Appointments</h1>
          <ul id="services">
            <li>
              <h3>Monday</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Docotr: Ragesh Tu</p>
            </li>
            <li>
              <h3>Tuesday</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Doctor: Bob the builder</p>
            </li>
            <li>
              <h3>Wednesday</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Doctor: Katalyina Batalin</p>
            </li>
          </ul>
        </article>
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
