<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minecraft-pedia - Create Manage your server</title>

  <!-- favicon svg -->

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- css link -->

  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- font link -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- - #Header -->

  <header class="header">

    <div class="header-top">
      <div class="container">

        <div class="countdown-text">
          Here we go to Our Minecraft World !!!
        </div>

        <div class="social-wrapper">

          <p class="social-title">Follow us on :</p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="header-bottom skewBg" data-header>
      <div class="container">

        <a href="#" class="logo">Minecraft-pedia</a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#home" class="navbar-link skewBg" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#live" class="navbar-link skewBg" data-nav-link>Server Streaks</a>
            </li>

            <li class="navbar-item">
              <a href="#features" class="navbar-link skewBg" data-nav-link>Features</a>
            </li>

            <li class="navbar-item">
              <a href="#shop" class="navbar-link skewBg" data-nav-link>Trading</a>
            </li>

            <li class="navbar-item">
              <a href="#blog" class="navbar-link skewBg" data-nav-link>Blogs</a>
            </li>

            <li class="navbar-item">
              <a href="#" class="navbar-link skewBg" data-nav-link>Contact</a>
            </li>

          </ul>
        </nav>

        <div class="header-actions">

          <button class="cart-btn" aria-label="cart">
            <ion-icon name="cart"></ion-icon>

            <span class="cart-badge">0</span>
          </button>

          <button class="search-btn" aria-label="open search" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
          </button>

          <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
            <ion-icon name="menu-outline" class="menu"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
          </button>
        </div>
      </div>
    </div>

  </header>
  <!-- - #Search  -->
  <div class="search-container" data-search-box>

    <div class="input-wrapper">
      <input type="search" name="search" aria-label="search" placeholder="Search here..." class="search-field">

      <button class="search-submit" aria-label="submit search" data-search-toggler>
        <ion-icon name="search-outline"></ion-icon>
      </button>

      <button class="search-close" aria-label="close search" data-search-toggler></button>
    </div>

  </div>



  <main>
    <article>

      <!-- hero section  -->

      <section class="section hero" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Hello Chief</p>

            <h1 class="h1 hero-title">
              Create <span class="span">Manage</span> Your SMP
            </h1>

            <p class="hero-text">
              Have a check-in to your server change the zone of E-sports
            </p>

            <button class="btn skewBg">Go to server</button>

          </div>

          <figure class="hero-banner img-holder" style="--width: 700; --height: 700;">
            <img src="./assets/images/hero-banner.png" width="700" height="700" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>

      <!-- brand section  -->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <ul class="has-scrollbar">

            <li class="brand-item">
              <img src="./assets/images/brand-1.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-2.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-3.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-4.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-5.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-6.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>
          </ul>
        </div>
      </section>
      <div class="section-wrapper"></div>


      <section class="section latest-game" aria-label="latest game">
        <div class="container">

          <p class="section-subtitle">Assist & Manage</p>

          <h2 class="h2 section-title">
            <span class="span">Players on Server</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="latest-game-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                  <img src="./assets/images/p-1.jpg" width="400" height="470" loading="lazy" alt="White Walker Daily"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">The Zookeeper</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">loki <span class="span"></span></a>
                  </h3>

                  <p class="card-price">
                    Online<span class="span">Now</span>
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="latest-game-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                  <img src="./assets/images/p-2.jpeg" width="400" height="470" loading="lazy" alt="Hunter Killer II"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">The Farmer</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">HunterBee<span class="span"></span></a>
                  </h3>

                  <p class="card-price">
                    1 Hour<span class="span">ago</span>
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="latest-game-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                  <img src="./assets/images/p-3.png" width="400" height="470" loading="lazy" alt="Cyberpunk Daily"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">The Noob</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Smasher<span class="span"></span></a>
                  </h3>

                  <p class="card-price">
                    Online<span class="span">Now</span>
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="latest-game-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                  <img src="./assets/images/p-4.webp" width="400" height="470" loading="lazy" alt="Cyberpunk Daily"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">The Achiever</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">17<span class="span"></span></a>
                  </h3>

                  <p class="card-price">
                    Online<span class="span">Now</span>
                  </p>

                </div>

              </div>
            </li>

          </ul>

        </div>

        <!-- World Information Section -->
        <!-- World Information Section -->
        <section class="section world-information">
          <div class="container">
            <h2>World Information</h2>
            <ul class="world-list">
              <?php
              // Database connection parameters
              $servername = "localhost";
              $username = "root";
              $password = "root";
              $dbname = "proj1";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              // SQL query to fetch data from the database
              $sql = "SELECT * FROM worlds";
              $result = $conn->query($sql);

              // Display data on the webpage
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<li class='world-info'>";
                  echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                  echo "<p><strong>Name:</strong> " . htmlspecialchars($row['name']) . "</p>";
                  echo "<p><strong>Seed:</strong> " . htmlspecialchars($row['seed']) . "</p>";
                  echo "<p><strong>Creation Date:</strong> " . htmlspecialchars($row['creation_date']) . "</p>";
                  echo "<p><strong>Size:</strong> " . htmlspecialchars($row['size']) . "</p>";
                  echo "</li>";
                }
              } else {
                echo "0 results found";
              }

              // Close connection
              $conn->close();
              ?>
            </ul>
          </div>
        </section>



        <!-- Player Management Section -->
        <!-- Player Management Section -->
        <section class="section player-management">
          <div class="container">
            <h2>Player Management</h2>
            <ul class="players-list">
              <?php
              // Database connection parameters
              $servername = "localhost";
              $username = "root";
              $password = "root";
              $dbname = "proj1";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              // SQL query to fetch data from the database
              $sql = "SELECT * FROM players";
              $result = $conn->query($sql);

              // Display data on the webpage
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<li class='player-info'>";
                  echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                  echo "<p><strong>Name:</strong> " . htmlspecialchars($row['name']) . "</p>";
                  echo "<p><strong>Health:</strong> " . htmlspecialchars($row['health']) . "</p>";
                  echo "<p><strong>Level:</strong> " . htmlspecialchars($row['level']) . "</p>";
                  echo "<p><strong>Hunger:</strong> " . htmlspecialchars($row['hunger']) . "</p>";

                  // Decode JSON data for top players and tamed animals
                  $topPlayers = json_decode($row['top_players'], true);
                  $tamedAnimals = json_decode($row['tamed_animals'], true);

                  echo "<h4>Top Players</h4>";
                  echo "<ul class='leaderboard'>";
                  foreach ($topPlayers as $player) {
                    echo "<li>" . htmlspecialchars($player['name']) . " - Level " . htmlspecialchars($player['level']) . "</li>";
                  }
                  echo "</ul>";

                  echo "<h4>Owned Tamed Animals</h4>";
                  echo "<div class='tamed-animals'>";
                  foreach ($tamedAnimals as $animal) {
                    echo "<p>" . htmlspecialchars($animal['animal']) . " - Name: " . htmlspecialchars($animal['name']) . "</p>";
                  }
                  echo "</div>";

                  echo "</li>";
                }
              } else {
                echo "0 results found";
              }

              // Close connection
              $conn->close();
              ?>
            </ul>
          </div>
        </section>




        <!-- Other Sections (Portal System, Mob Information, Trading System, Animal Information, etc.) -->
        <div class="sections-container">
          <section class="section portal-system">
            <div class="container">
              <h2>Portals</h2>
              <ul class="content-list" id="portalList">
                <!-- Portals will be loaded here using AJAX -->
              </ul>
              <form id="addPortalForm">
                <label for="portalName" class="hc">Portal Name:</label>
                <input type="text" class="hc" id="portalName" name="name" required>
                <label for="xCoordinate" class="hc">X Coordinate:</label>
                <input type="number" class="hc" id="xCoordinate" name="xCoordinate" required>
                <label for="zCoordinate" class="hc">Z Coordinate:</label>
                <input type="number" class="hc" id="zCoordinate" name="zCoordinate" required>
                <button type="submit" class="small-button">Add Portal</button>
              </form>
            </div>
          </section>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
            $(document).ready(function () {
              // Load portals when the page is ready
              loadPortals();

              // AJAX request to load portals
              function loadPortals() {
                $.ajax({
                  url: "get_portals.php",
                  method: "GET",
                  success: function (data) {
                    $("#portalList").html(data);
                  }
                });
              }

              // AJAX request to add a new portal
              $("#addPortalForm").submit(function (event) {
                event.preventDefault();

                var formData = $(this).serialize();
                $.ajax({
                  url: "add_portal.php",
                  method: "POST",
                  data: formData,
                  success: function (response) {
                    alert(response);
                    // Reload portals after adding a new one
                    loadPortals();
                    // Clear the form fields
                    $("#addPortalForm")[0].reset();
                  }
                });
              });

              // AJAX request to delete a portal
              $(document).on("click", ".deletePortalBtn", function () {
                var portalId = $(this).data("id");
                $.ajax({
                  url: "delete_portal.php",
                  method: "POST",
                  data: { id: portalId },
                  success: function (response) {
                    alert(response);
                    // Reload portals after deletion
                    loadPortals();
                  }
                });
              });
            });
          </script>


          <section class="section mob-system">
            <div class="container">
              <h2>Mobs</h2>
              <ul class="content-list" id="mobList">
                <!-- Mobs will be loaded here using AJAX -->
              </ul>
              <form id="addMobForm">
                <label for="mobName" class="hc">Mob Name:</label>
                <input type="text" class="hc" id="mobName" name="name" required>
                <label for="mobHealth" class="hc">Health:</label>
                <input type="number" class="hc" id="mobHealth" name="health" required>
                <button type="submit" class="small-button">Add Mob</button>
              </form>
            </div>
          </section>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
            $(document).ready(function () {
              // Load mobs when the page is ready
              loadMobs();

              // AJAX request to load mobs
              function loadMobs() {
                $.ajax({
                  url: "get_mobs.php",
                  method: "GET",
                  success: function (data) {
                    $("#mobList").html(data);
                  }
                });
              }

              // AJAX request to add a new mob
              $("#addMobForm").submit(function (event) {
                event.preventDefault();

                var formData = $(this).serialize();
                $.ajax({
                  url: "add_mob.php",
                  method: "POST",
                  data: formData,
                  success: function (response) {
                    alert(response);
                    // Reload mobs after adding a new one
                    loadMobs();
                    // Clear the form fields
                    $("#addMobForm")[0].reset();
                  }
                });
              });

              // AJAX request to delete a mob
              $(document).on("click", ".deleteMobBtn", function () {
                var mobId = $(this).data("id");
                $.ajax({
                  url: "delete_mob.php",
                  method: "POST",
                  data: { id: mobId },
                  success: function (response) {
                    alert(response);
                    // Reload mobs after deletion
                    loadMobs();
                  }
                });
              });
            });
          </script>


          <section class="section trade-system">
            <div class="container">
              <h2>Trades</h2>
              <ul class="content-list" id="tradeList">
                <!-- Trades will be loaded here using AJAX -->
              </ul>
              <form id="addTradeForm">
                <label for="tradeItems">Items (comma-separated):</label>
                <input type="text" id="tradeItems" name="items" required>
                <button type="submit" class="small-button">Add Trade</button>
              </form>
            </div>
          </section>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
            $(document).ready(function () {
              // Load trades when the page is ready
              loadTrades();

              // AJAX request to load trades
              function loadTrades() {
                $.ajax({
                  url: "get_traders.php",
                  method: "GET",
                  success: function (data) {
                    $("#tradeList").html(data);
                  }
                });
              }

              // AJAX request to add a new trade
              $("#addTradeForm").submit(function (event) {
                event.preventDefault();

                var formData = $(this).serialize();
                $.ajax({
                  url: "add_traders.php",
                  method: "POST",
                  data: formData,
                  success: function (response) {
                    alert(response);
                    // Reload trades after adding a new one
                    loadTrades();
                    // Clear the form fields
                    $("#addTradeForm")[0].reset();
                  }
                });
              });

              // AJAX request to delete a trade
              $(document).on("click", ".deleteTradeBtn", function () {
                var tradeId = $(this).data("id");
                $.ajax({
                  url: "delete_traders.php",
                  method: "POST",
                  data: { id: tradeId },
                  success: function (response) {
                    alert(response);
                    // Reload trades after deletion
                    loadTrades();
                  }
                });
              });
            });
          </script>


          <section class="section animal-system">
            <div class="container">
              <h2>Animals</h2>
              <ul class="content-list" id="animalList">
                <!-- Animals will be loaded here using AJAX -->
              </ul>
              <form id="addAnimalForm">
                <label for="animalType">Animal Type:</label>
                <input type="text" id="animalType" name="type" required>
                <label for="animalName">Animal Name:</label>
                <input type="text" id="animalName" name="name" required>
                <label for="animalHealth">Health:</label>
                <input type="number" id="animalHealth" name="health" required>
                <button type="submit" class="small-button">Add Animal</button>
              </form>
            </div>
          </section>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
            $(document).ready(function () {
              // Load animals when the page is ready
              loadAnimals();

              // AJAX request to load animals
              function loadAnimals() {
                $.ajax({
                  url: "get_animals.php",
                  method: "GET",
                  success: function (data) {
                    $("#animalList").html(data);
                  }
                });
              }

              // AJAX request to add a new animal
              $("#addAnimalForm").submit(function (event) {
                event.preventDefault();

                var formData = $(this).serialize();
                $.ajax({
                  url: "add_animal.php",
                  method: "POST",
                  data: formData,
                  success: function (response) {
                    alert(response);
                    // Reload animals after adding a new one
                    loadAnimals();
                    // Clear the form fields
                    $("#addAnimalForm")[0].reset();
                  }
                });
              });

              // AJAX request to delete an animal
              $(document).on("click", ".deleteAnimalBtn", function () {
                var animalId = $(this).data("id");
                $.ajax({
                  url: "delete_animal.php",
                  method: "POST",
                  data: { id: animalId },
                  success: function (response) {
                    alert(response);
                    // Reload animals after deletion
                    loadAnimals();
                  }
                });
              });
            });
          </script>

        </div>
        <section class="section blog" id="blog" aria-label="blog">
          <div class="container">

            <h2 class="h2 section-title">
              Latest News & <span class="span">Articles</span>
            </h2>

            <p class="section-text">
              Take your storytelling to the next level with all the new features that will inspire you to set out into
              the Overworld and share tales of your travels!
            </p>

            <ul class="blog-list">

              <li>
                <div class="blog-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                    <img src="./assets/images/blog-1.avif" width="400" height="290" loading="lazy"
                      alt="Shooter Action Video" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <ion-icon name="person-outline"></ion-icon>

                        <a href="#" class="item-text">Admin</a>
                      </li>

                      <li class="card-meta-item">
                        <ion-icon name="calendar-outline"></ion-icon>

                        <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                      </li>

                    </ul>

                    <h3>
                      <a href="#" class="card-title">Building a Fram</a>
                    </h3>

                    <p class="card-text">
                      Managing your food in Minecraft will ensure you can explore longer without needing to worry about
                      your hunger.
                    </p>

                    <a href="#" class="card-link">
                      <span class="span">Read More</span>

                      <ion-icon name="caret-forward"></ion-icon>
                    </a>

                  </div>

                </div>
              </li>

              <li>
                <div class="blog-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                    <img src="./assets/images/blog-2.webp" width="400" height="290" loading="lazy"
                      alt="The Walking Dead" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <ion-icon name="person-outline"></ion-icon>

                        <a href="#" class="item-text">Admin</a>
                      </li>

                      <li class="card-meta-item">
                        <ion-icon name="calendar-outline"></ion-icon>

                        <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                      </li>

                    </ul>

                    <h3>
                      <a href="#" class="card-title">Zombie sp</a>
                    </h3>

                    <p class="card-text">
                      Zombies that are wearing armor and go underwater continue wearing the armor when converted to a
                      drowned, although tools and weapons are lost
                    </p>

                    <a href="#" class="card-link">
                      <span class="span">Read More</span>

                      <ion-icon name="caret-forward"></ion-icon>
                    </a>

                  </div>

                </div>
              </li>

              <li>
                <div class="blog-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                    <img src="./assets/images/blog-4.jpg" width="400" height="290" loading="lazy"
                      alt="Defense Of The Ancients" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <ion-icon name="person-outline"></ion-icon>

                        <a href="#" class="item-text">Admin</a>
                      </li>

                      <li class="card-meta-item">
                        <ion-icon name="calendar-outline"></ion-icon>

                        <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                      </li>

                    </ul>

                    <h3>
                      <a href="#" class="card-title">builder</a>
                    </h3>

                    <p class="card-text">
                      Compete With 100 Players On A Remote Island Thats Winner Takes Showdown Known Issue.
                    </p>

                    <a href="#" class="card-link">
                      <span class="span">Read More</span>

                      <ion-icon name="caret-forward"></ion-icon>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>


        <section class="section course" aria-label="course" id="course" data-section>
          <div class="container">
            <div class="title-wrapper">
              <h4 class="h2 section-title">Select a Question:</h4>
            </div>
            <div class="appoint-form">
              <form id="questionForm">
                <div class="input-group">
                  <label for="questionType">Select Question Type:</label>
                  <select name="questionType" id="questionType" class="name-field">
                    <option value="1">Retrieve Players' Names and Their Respective Levels</option>
                    <option value="2">Find Total Number of Mobs in Each World</option>
                    <option value="3">retrieving coordinates of netherworld portal</option>
                    <option value="4">Find Players With Health Less Than 50</option>
                    <option value="5">Get Villager Trade Offers Function</option>
                    <option value="6">Find Average Health of Hostile Mobs</option>
                  </select>
                </div>
                <div class="button-container">
                  <button type="submit" class="btnsub btn-submit">Submit</button>
                </div>
              </form>
            </div>
            <div class="result-container" id="resultContainer">
              <!-- Results will be displayed here -->
            </div>
          </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
          $(document).ready(function () {
            // Handle form submission
            $("#questionForm").submit(function (event) {
              event.preventDefault();

              // Get selected question type
              var questionType = $("#questionType").val();

              // Send AJAX request to process the selected question
              $.ajax({
                url: "process_question.php",
                method: "POST",
                data: { questionType: questionType },
                success: function (response) {
                  $("#resultContainer").html(response);
                }
              });
            });
          });
        </script>
      </section>


      <footer class="footer">
        <div class="footer-top">
          <div class="container">
            <div class="footer-brand">
              <a href="#" class="logo">Minecraft-pedia</a>
              <p class="footer-text">
                A Gaming Guide to SMPs
              </p>
              <ul class="contact-list">
                <li class="contact-item">
                  <div class="contact-icon">
                    <ion-icon name="location"></ion-icon>
                  </div>
                  <address class="item-text">
                    Address : Pune
                  </address>
                </li>

                <li class="contact-item">
                  <div class="contact-icon">
                    <ion-icon name="headset"></ion-icon>
                  </div>

                  <a href="tel:+241245654235" class="item-text">Phone : +91 1245 654 235</a>
                </li>

                <li class="contact-item">
                  <div class="contact-icon">
                    <ion-icon name="mail-open"></ion-icon>
                  </div>

                  <a href="mailto:info@exemple.com" class="item-text">Email : info@exemple.com</a>
                </li>
              </ul>
            </div>

            <ul class="footer-list">
              <li>
                <p class="footer-list-title">Header</p>
              </li>

              <li>
                <a href="#" class="footer-link">Graphics (26)</a>
              </li>

              <li>
                <a href="#" class="footer-link">Backgrounds (11)</a>
              </li>

              <li>
                <a href="#" class="footer-link">Fonts (9)</a>
              </li>

              <li>
                <a href="#" class="footer-link">Music (3)</a>
              </li>

              <li>
                <a href="#" class="footer-link">Streams(3)</a>
              </li>

            </ul>

            <ul class="footer-list">

              <li>
                <p class="footer-list-title">Need Help?</p>
              </li>

              <li>
                <a href="#" class="footer-link">Terms & Conditions</a>
              </li>

              <li>
                <a href="#" class="footer-link">Privacy Policy</a>
              </li>

              <li>
                <a href="#" class="footer-link">Affiliate</a>
              </li>

              <li>
                <a href="#" class="footer-link">Use Cases</a>
              </li>

            </ul>

          </div>
        </section>
        </div>
</body>

</html>