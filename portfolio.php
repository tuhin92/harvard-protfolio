<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Ali Emam Al Mamun</title>
  <link rel="stylesheet" href="portfolio.css">
  <style>
    /* Modern Card & Search Styles */
    .portfolio-hero {
      padding: 120px 0 40px;
      background: linear-gradient(135deg, #232526 0%, #414345 100%);
      color: #fff;
      text-align: center;
      border-bottom: 1px solid #333;
    }

    .search-bar-portfolio {
      margin: 30px auto 0;
      max-width: 400px;
      display: flex;
      align-items: center;
      background: #23272f;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      border: 1px solid #333;
    }

    .search-bar-portfolio input {
      flex: 1;
      padding: 12px 16px;
      border: none;
      background: transparent;
      color: #fff;
      font-size: 1rem;
      border-radius: 8px 0 0 8px;
      outline: none;
    }

    .search-bar-portfolio button {
      background: #4a90e2;
      color: #fff;
      border: none;
      padding: 0 18px;
      height: 44px;
      border-radius: 0 8px 8px 0;
      cursor: pointer;
      font-size: 1.1rem;
      transition: background 0.2s;
    }

    .search-bar-portfolio button:hover {
      background: #357ab8;
    }

    .projects-grid {
      margin-top: 30px;
    }

    .project-card {
      background: linear-gradient(135deg, #232526 0%, #414345 100%);
      border: 1.5px solid #333;
      border-radius: 18px;
      box-shadow: 0 6px 24px rgba(0,0,0,0.18);
      transition: transform 0.18s, box-shadow 0.18s;
      overflow: hidden;
      margin-bottom: 24px;
    }

    .project-card:hover {
      transform: translateY(-6px) scale(1.03);
      box-shadow: 0 12px 32px rgba(0,0,0,0.28);
      border-color: #4a90e2;
    }

    .project-image img {
      height: 180px;
      object-fit: cover;
      border-bottom: 1px solid #333;
      width: 100%;
    }

    .project-content {
      padding: 18px 20px 20px 20px;
    }

    .project-content h3 {
      color: #4a90e2;
      font-size: 1.25rem;
      margin-bottom: 8px;
    }

    .project-content p {
      color: #e5e7eb;
      font-size: 0.97rem;
      margin-bottom: 12px;
    }

    .project-tags span {
      background: #2d3748;
      color: #b3c7e6;
      border: 1px solid #4a90e2;
      padding: 4px 8px;
      border-radius: 6px;
      font-size: 0.8rem;
      margin-right: 6px;
    }

    @media (max-width: 600px) {
      .project-image img {
        height: 120px;
      }
      .project-content {
        padding: 12px;
      }
    }
  </style>
</head>
<body>

  <!-- Header Section -->
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="home.php" class="logo-link">
          <img src="https://i.ibb.co/84Sff3J8/photo-2025-01-30-19-35-16.jpg" alt="Ali Emam" class="logo-img">
          <span class="name">Ali Emam Al Mamun</span>
        </a>
      </div>
      <nav class="header-nav">
        <ul class="nav-menu">
          <li><a href="home.php" class="nav-link">Home</a></li>
          <li><a href="about.php" class="nav-link">About Me</a></li>
          <li><a href="portfolio.php" class="nav-link active">My Portfolio</a></li>
        </ul>
      </nav>
      <div class="header-right">
        <button class="search-btn" aria-label="Search">
          <span class="icon">🔍</span>
          <span class="btn-text">Search</span>
        </button>
        <button class="menu-btn" aria-label="Menu">
          <span class="icon">☰</span>
          <span class="btn-text">Menu</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Portfolio Hero Section -->
  <section class="portfolio-hero" style="padding: 160px 0 50px; background: linear-gradient(120deg, #4a90e2 0%, #232526 100%); color: #fff; text-align: center; border-bottom: 1px solid #333;">
    <div class="container">
      <h1 style="font-size: 2.8rem; font-weight: 700; letter-spacing: 1px; margin-bottom: 12px;">
        <span style="background: linear-gradient(90deg, #fff 60%, #4a90e2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">My Projects</span>
      </h1>
      <p style="font-size: 1.18rem; color: #e0e6ed; margin-bottom: 28px;">
        Explore my latest <span style="color:#ffd700;">web projects</span> and <span style="color:#4a90e2;">UI experiments</span>
      </p>
      <!-- Project Search Bar -->
      <form class="search-bar-portfolio" onsubmit="return false;" style="box-shadow:0 4px 24px rgba(0,0,0,0.18);">
        <input type="text" id="projectSearch" placeholder="Search projects by name or tag..." style="background:#fff;color:#232526;font-size:1.1rem;">
        <button type="button" id="searchBtn" style="background:#ffd700;color:#232526;">
          <span class="icon">🔍</span>
        </button>
      </form>
    </div>
  </section>

  <!-- Projects Grid Section -->
  <section class="projects">
    <div class="container">
      <div class="projects-grid" id="projectsGrid">
        <!-- Bio Data Management System Card -->
        <div class="project-card compact" data-title="Bio Data Management System" data-tags="php mysql authentication matrimonial user-management">
          <a href="Lab_report5/index.php" class="project-link-wrapper">
            <div class="project-image">
              <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Bio Data Management System">
            </div>
            <div class="project-content">
              <h3>Bio Data Management System</h3>
              <p>Complete matrimonial bio-data system with user authentication, profile management, and comprehensive bio forms</p>
              <div class="project-tags">
                <span>PHP</span>
                <span>MySQL</span>
                <span>Authentication</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Calculator Card -->
        <div class="project-card compact" data-title="Interactive Calculator" data-tags="html5 css3 javascript calculator">
          <a href="calculator.php" class="project-link-wrapper">
            <div class="project-image">
              <img src="https://images.unsplash.com/photo-1587145820266-a5951ee6f620?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Calculator">
            </div>
            <div class="project-content">
              <h3>Interactive Calculator</h3>
              <p>A functional calculator with modern UI and operations</p>
              <div class="project-tags">
                <span>HTML5</span>
                <span>CSS3</span>
                <span>JavaScript</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Daraz Clone Card -->
        <div class="project-card compact" data-title="Daraz Clone" data-tags="html5 css3 ecommerce clone">
          <a href="Daraz/darazindex.php" class="project-link-wrapper">
            <div class="project-image">
              <img src="images/Hero Main/hero-section.jpg" alt="Daraz Clone">
            </div>
            <div class="project-content">
              <h3>Daraz Clone</h3>
              <p>E-commerce homepage clone with product cards and modern UI</p>
              <div class="project-tags">
                <span>HTML5</span>
                <span>CSS3</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Alibaba Clone Card -->
        <div class="project-card compact" data-title="Alibaba Clone" data-tags="html5 css3 b2b clone">
          <a href="Alibaba/alibaba.php" class="project-link-wrapper">
            <div class="project-image">
              <img src="./images/ali.png" alt="Alibaba Clone">
            </div>
            <div class="project-content">
              <h3>Alibaba Clone</h3>
              <p>B2B marketplace homepage clone with navigation, search, and modern UI.</p>
              <div class="project-tags">
                <span>HTML5</span>
                <span>CSS3</span>
              </div>
            </div>
          </a>
        </div>

        <!-- CRUD Operations Card -->
        <div class="project-card compact" data-title="CRUD Operations" data-tags="php mysql crud database student-management">
          <a href="crud_operations.php" class="project-link-wrapper">
            <div class="project-image">
              <img src="https://images.unsplash.com/photo-1544377193-33dcf4d68fb5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="CRUD Operations">
            </div>
            <div class="project-content">
              <h3>CRUD Operations</h3>
              <p>Student Management System with Create, Read, Update, Delete operations using PHP and MySQL</p>
              <div class="project-tags">
                <span>PHP</span>
                <span>MySQL</span>
                <span>CRUD</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Fixed Search Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('projectSearch');
      const searchButton = document.getElementById('searchBtn');
      const cards = document.querySelectorAll('.project-card');

      function filterProjects() {
        const input = searchInput.value.trim().toLowerCase();
        cards.forEach(card => {
          const title = card.getAttribute('data-title')?.toLowerCase() || '';
          const tags = card.getAttribute('data-tags')?.toLowerCase() || '';
          if (input === '' || title.includes(input) || tags.includes(input)) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      }

      searchInput.addEventListener('input', filterProjects);
      searchButton.addEventListener('click', filterProjects);
    });
  </script>

</body>
</html>
