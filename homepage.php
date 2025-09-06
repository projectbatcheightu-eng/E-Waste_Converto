<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-Waste Converto our project</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- AOS Library -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="../assets/css/homepage.css" rel="stylesheet">
   <script src="../assets/js/homepage.js"></script>
</head>
<body>

  <?php include '../partials/nav.php'; ?>
  <!-- Hero Section -->
  <section class="hero">
    <h1>Don't trash it. Convert it</h1>
    <p>Save our future by recycling e-waste responsibly</p>

    <div class="features">
      <div class="feature-tag">♻️ Eco-Friendly</div>
      <div class="feature-tag">🎁 Earn Rewards</div>
      <div class="feature-tag">🔒 Secure Process</div>
    </div>

   <a href="#what-we-do" style="text-decoration:none">
    <button class="learn-more-btn">Learn More</button></a>
  </section>

      <!--choose your role card-->
  <section class="role-section">
    <div class="role-header">
      <h2>Choose Your Role</h2>
      <p>Join our community and start making a positive impact today.</p>
    </div>

    <div class="role-cards">
      <!-- User Card -->
      <div class="role-card">
        <div class="icon-circle">
          <i class="fas fa-user"></i>
        </div>
        <h3>Users</h3>
        <p>Recycle your e-waste, earn rewards, and contribute to a cleaner environment.</p>
        <ul>
          <li>✔ Earn reward points</li>
          <li>✔ Track your impact</li>
          <li>✔ Easy pickup scheduling</li>
        </ul>
        <a href="user_reg.php" style="text-decoration:none"><button class="card-btn">Register/Login</button></a>
      </div>

      <!-- Collector Card -->
      <div class="role-card">
        <div class="icon-circle">
          <i class="fas fa-truck"></i>
        </div>
        <h3>Collectors</h3>
        <p>Join our network of certified collectors and help make e-waste recycling accessible.</p>
        <ul>
          <li>✔ Flexible schedules</li>
          <li>✔ Competitive rates</li>
          <li>✔ Professional support</li>
        </ul>
        <a href="collector_reg.php" style="text-decoration:none"><button class="card-btn">Register/Login</button></a>
      </div>

      <!-- Industry Card -->
      <div class="role-card">
        <div class="icon-circle">
          <i class="fas fa-industry"></i>
        </div>
        <h3>Industry</h3>
        <p>Partner with us to manage e-waste and meet your sustainability goals.</p>
        <br>
        <ul>
          <li>✔ Bulk processing</li>
          <li>✔ Compliance reporting</li>
          <li>✔ Sustainable solutions</li>
          
        </ul>
        <a href="recycler_reg.php" style="text-decoration:none"><button class="card-btn">Register/Login</button></a>
    </div>
  </section>

    <!-- What We Do Section -->
    <section class="what-we-do" id="what-we-do">
    <h2>What We Do</h2>
    <p class="intro">
        E-Waste Converto is revolutionizing electronic waste management by connecting individuals,
        collectors, and industries in a sustainable ecosystem. Our platform makes it easy to dispose of
        electronic waste responsibly while earning rewards for your contribution to environmental protection.
    </p>
    <p>
        Through our innovative system, we ensure that electronic waste is properly processed, valuable materials are
        recovered, and harmful substances are safely handled. Every device recycled through our platform helps reduce
        environmental impact and supports the circular economy.
    </p>
    <p>
        Join thousands of users who are already making a difference. Together, we can build a cleaner, more sustainable
        future for generations to come.
    </p>
    <a href="#awareness" style="text-decoration:none"><button class="watch-btn">
        ▶️ Watch Our Story
    </button></a>
    </section>



        <!-- Hidden Dangers of E-Waste -->
    <section class="dangers-section">
    <h2>The Hidden Dangers of E-Waste</h2>
    <p class="subtitle">
        Understanding the impact of electronic waste is the first step toward creating positive change.
    </p>

    <div class="danger-cards">
        <!-- Card 1 -->
        <div class="danger-card">
        <div class="icon">🌲</div>
        <h3>Environmental Impact</h3>
        <p>
            E-waste releases toxic chemicals into soil and water, harming ecosystems and wildlife.
        </p>
        </div>

        <!-- Card 2 -->
        <div class="danger-card">
        <div class="icon">☠️</div>
        <h3>Health Hazards</h3>
        <p>
            Toxic substances in electronics pose serious health risks to humans and communities.
        </p>
        </div>

        <!-- Card 3 -->
        <div class="danger-card">
        <div class="icon">⚠️</div>
        <h3>Resource Pollution</h3>
        <p>
            Improper disposal contaminates air, water, and land resources for future generations.
        </p>
        </div>
    </div>
    </section>




  <section id="awareness" class="awareness-section scroll-fade">
  <div class="awareness-content">
    <h2>Learn About E-Waste Impact</h2>
    <p>
      Discover the hidden consequences of electronic waste and why proper recycling matters. Watch the video below to learn how you can be part of the solution.
    </p>

    <div class="video-wrapper">
      <iframe
        src="https://www.youtube.com/embed/-uyIzKIw0xY?"

        title="E-Waste Impact"
        frameborder="0"
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>


 <section id="impact" class="impact-section">
  <div class="container">
    <h2 class="impact-title">Our Impact So Far</h2>
    <p class="impact-description">
      Together, we're making a real difference in the fight against electronic waste.
    </p>

    <div class="impact-grid">
      <div class="impact-card">
        <div class="impact-icon">👥</div>
        <p class="impact-count">0+</p>
        <p class="impact-label">Total Users</p>
      </div>

      <div class="impact-card">
        <div class="impact-icon">🏢</div>
        <p class="impact-count">0+</p>
        <p class="impact-label">Total Industries</p>
      </div>

      <div class="impact-card">
        <div class="impact-icon">🚛</div>
        <p class="impact-count">0+</p>
        <p class="impact-label">Total Collectors</p>
      </div>

      <div class="impact-card">
        <div class="impact-icon">♻️</div>
        <p class="impact-count">0 tons</p>
        <p class="impact-label">E-Waste Recycled</p>
      </div>
    </div>
  </div>
</section>
 <?php include '../partials/footer.php'; ?>


</body>
</html>
