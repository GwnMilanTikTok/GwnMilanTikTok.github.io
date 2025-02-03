<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <link rel="icon" type="image/x-icon" href="logo32.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home | GewoonMilan</title>

  <!-- Google Fonts - Poppins voor een moderne uitstraling -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Iconen voor de website (bijvoorbeeld voor sociale media) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Externe CSS voor Animaties -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Externe Library voor Carrousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">

  <!-- Externe CSS voor parallax effect -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.css">

  <!-- Link naar eigen stijlbestand -->
  <link rel="stylesheet" href="style.css">

  <!-- Favicon voor de website -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
<!-- Header met Navigatie -->
<header>
    <div class="navbar">
      <div class="logo-container">
        <a href="index.php">
          <img src="gwnlogo.png" alt="GWN Web Logo" class="logo">
        </a>
        <h1 class="site-title">GewoonMilan</h1>
      </div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">Over Ons</a></li>
        <li><a href="#features">Kenmerken</a></li>
        <li><a href="#videos">Onze Video's</a></li>
        <li><a href="#testimonials">Recensies</a></li>
        <li><a href="#contact">Contact</a></li>
        
        <!-- Inlog/Uitlog knop (dropdown menu) -->
        <?php if (isset($_SESSION['username'])): ?>
          <li id="welcome-btn">
  <a href="#" class="welcome-btn">Welkom, <?php echo $_SESSION['username']; ?></a>
  <ul class="dropdown-menu">
    <li><a href="profile.php">Onderhoud</a></li>
    <li><a href="logout.php">Uitloggen</a></li>
  </ul>
</li>



        <?php else: ?>
          <li><a href="login.php" class="login-btn">Inloggen</a></li>
        <?php endif; ?>
      </ul>
    </div>
</header>   

<!-- Hero Section met Parallax Effect -->
<section id="home" class="hero" data-aos="fade-in">
    <div class="hero-content">
      <h1>HOME</h1>
      <p>Deze website is nog in onderhoud! Editor: Milan</p>
      <p>Lid worden druk hieronder op inloggen</p>
      <a href="register.php" class="btn">inloggen</a>
    </div>
</section>

</body>
</html>



<!-- JavaScript voor het uitlogmenu -->
<script>
  document.getElementById("welcome-btn").addEventListener("click", function(event) {
    event.stopPropagation(); // Voorkom dat de klik door het menu heen naar de pagina gaat
    var menu = document.getElementById("logout-menu");
    if (menu.style.display === "block") {
      menu.style.display = "none";
    } else {
      menu.style.display = "block";
    }
  });

  // Sluit het uitlogmenu als er ergens anders op de pagina wordt geklikt
  document.addEventListener("click", function(event) {
    if (!event.target.closest("#welcome-btn")) {
      document.getElementById("logout-menu").style.display = "none";
    }
  });
</script>

</body>
</html>



  <!-- Features Section (Interactieve onderdelen) -->
  <section id="features" class="features">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Wat Maakt Ons Anders?</h2>
      <div class="features-list">
        <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
          <i class="fas fa-video"></i>
          <h3>Video Creatie</h3>
          <p>Creëer en deel je eigen video's in een gebruiksvriendelijke omgeving met krachtige tools en filters.</p>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
          <i class="fas fa-users"></i>
          <h3>Community</h3>
          <p>Word deel van een groeiende community van creators, kijkers en influencers die elkaar ondersteunen.</p>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
          <i class="fas fa-share-alt"></i>
          <h3>Deel Gemakkelijk</h3>
          <p>Met één klik kun je je video's delen op andere platforms zoals Instagram, TikTok en YouTube.</p>
        </div>
      </div>
    </div>
  </section>

<!-- Populaire video's sectie -->
<section class="populaire-video's">
    <h2>Populaire video's</h2>
    <div class="container">
      <div class="video-container">
        <!-- Video 1 -->
        <div class="video-card">
          <iframe src="https://www.tiktok.com/embed/7449680697733745942?autoplay=1&mute=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
  
        <!-- Video 2 -->
        <div class="video-card">
          <iframe src="https://www.tiktok.com/embed/7467175129571757344?autoplay=1&mute=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
  
        <!-- Video 3 -->
        <div class="video-card">
          <iframe src="https://www.tiktok.com/embed/7461369423232847137?autoplay=1&mute=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
</section>

  
  

<!-- Recensies Sectie -->
<section class="reviews">
    <h2>Wat onze klanten zeggen</h2>
    <div class="container">
      <div class="review-card">
        <p>"Dit is de beste service die ik ooit heb gehad. Geweldig product en snel geleverd!"</p>
        <p class="author">- Janine De Vries</p>
        <div class="rating">⭐⭐⭐⭐⭐</div>
      </div>
      <div class="review-card">
        <p>"Zeer tevreden over de kwaliteit en de klantenservice. Ik kom zeker terug!"</p>
        <p class="author">- Pieter Janssens</p>
        <div class="rating">⭐⭐⭐⭐</div>
      </div>
      <div class="review-card">
        <p>"Top ervaring! Mijn verwachtingen werden overtroffen. Zeker een aanrader!"</p>
        <p class="author">- Laura Peeters</p>
        <div class="rating">⭐⭐⭐⭐⭐</div>
      </div>
    </div>
  </section>
  

<!-- Contact Sectie -->
<section class="contact">
    <h2>Neem contact met ons op</h2>
    <div class="container">
      <form class="contact-form" action="send_contact.php" method="POST">
        <input type="text" name="name" placeholder="Je naam" required>
        <input type="email" name="email" placeholder="Je e-mailadres" required>
        <textarea name="message" placeholder="Je bericht" required></textarea>
        <button type="submit">Verstuur bericht</button>
      </form>
    </div>
</section>

  

  <!-- Footer Sectie met extra links en social media integraties -->
  <footer>
    <div class="footer-content">
      <p>&copy; 2025 GWN Web. Alle rechten voorbehouden.</p>
      <div class="social-links">
        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
      </div>
      <div class="footer-links">
        <a href="#privacy">Privacybeleid</a>
        <a href="#terms">Gebruiksvoorwaarden</a>
        <a href="#faq">Veelgestelde Vragen</a>
      </div>
    </div>
  </footer>

  <!-- AOS (Animation on Scroll) -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1200,
      easing: 'ease-in-out',
      once: true
    });
  </script>

  <!-- Slick Carrousel Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.video-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
      });

      $('.testimonial-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
  </script>

  <!-- Parallax Effect Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script>
    var scene = document.getElementById('home');
    var parallaxInstance = new Parallax(scene);
  </script>
</body>
</html>
