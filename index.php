<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- requirement head template -->
  <meta name="description" content="A simple index page">
  <meta name="keywords" content="HTML, simple, webpage">
  <meta name="author" content="Nguyen Duc Thinh">
  <!-- responsive setup -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
  <link rel="manifest" href="images/favico/site.webmanifest">
  <!-- style sheet link -->
  <link rel="stylesheet" href="./styles/enhancements.css">
  <link rel="stylesheet" href="./styles/styles.css">
  <title>Homepage</title>
</head>

<body>
  <?php include 'includes/header.inc'; ?>
  <!-- main content -->
  <main id="index">

    <!-- animation banner -->
    <div class="featured_banner">
      <div class="featured_banner_image"></div>
    </div>



    <!-- page title -->
    <h1>Hogwart Bookstore</h1>

    <article class="section_white">
      <!-- article title -->

      <h2 class="section_title">What do we have here <br><a href="https://youtu.be/-eHqmRASj14">Assignment 1: Link to our team presentation</a><br><a href="https://youtu.be/gdcBZ2j3Ejc">Assignment 2: Link to our team presentation</a></h2>

      <!-- section 1: product page introduction -->
      <section class="row">
        <!-- image column -->
        <div class="column">
          <img src="images/home/1.jpg" alt="Picture">
        </div>
        <!-- content column -->
        <div class="column">
          <h2>Explore All Genres with Ease</h2>
          <p>We proudly introduce ourselves as one of the biggest book
            e-commerce brands of the world, selling books from adventure fiction
            books to real-life scientific books. A million of brilliant books
            are waiting for you to discover!!!</p>
          <!-- button with link the the introduced web -->
          <a href="product.php" class="btn modi">Learn more</a>
        </div>
      </section>

      <!-- section 2: enquire page introduction -->
      <section class="row">
        <!-- content column -->
        <div class="column">
          <h2>Seamless Online Book Ordering</h2>
          <p>We ensures that customers can quickly and securely buy books from the comfort of their own homes. With the
            ease of online transactions and the security measures in place to protect personal and financial
            information, customers can browse a vast selection of books and make their purchases with confidence.
            Additionally, fast shipping and reliable delivery services ensure that books arrive in a timely manner,
            making the online purchase process both fast and convenient.</p>
          <!-- button linked to the enquire page -->
          <a href="enquire.php" class="btn modi">Learn more</a>
        </div>

        <!-- image column -->
        <div class="column">
          <img src="images/home/2.jpg" alt="Picture 2">
        </div>
      </section>


      <!-- section 3: about page introduction -->
      <section class="row">

        <!-- image column -->
        <div class="column">
          <img src="images/home/3.webp" alt="Picture 3">
        </div>

        <!-- content column -->
        <div class="column">
          <h2>Passionate and Reliable Developer Team</h2>
          <p>Have a nice meeting without our developer team, whose are not only enthusiastic but also resopnsible in developing this website. Feel free to contact us whenever you want!!</p>
          <!-- button with link to the about page -->
          <a href="about.php" class="btn modi">Learn more</a>
        </div>
      </section>

      <!-- section 4: enhancements page introduction -->
      <section class="row">

        <!-- content column -->
        <div class="column">
          <h2>Strive for Further Enhancements</h2>
          <p>Our developers are eager study and develop more advanced technique to further develop this website. To understand more about what we have applied in our website so far, please visit our Enhancements page. You are welcome!</p>
          <!-- button with link to the enhancements page -->
          <a href="enhancements.php" class="btn modi">Learn more</a>
        </div>

        <!-- image column -->
        <div class="column">
          <img src="images/home/4.jpg" alt="Picture 4">
        </div>
      </section>
    </article>
  </main>

  <!-- footer with small font + centered -->
  <?php include 'includes/footer.inc'; ?>
</body>

</html>