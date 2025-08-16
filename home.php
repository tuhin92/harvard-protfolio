<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Emam Al Mamun - Portfolio</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- Top Red Alert Bar -->
    <div class="top-alert-bar">
        <span>• Learn about our lawsuits to protect our students and researchers</span>
    </div>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="https://i.ibb.co/84Sff3J8/photo-2025-01-30-19-35-16.jpg" alt="Ali Emam" class="logo-img">
                <span class="name">Ali Emam Al Mamun</span>
            </div>
            <div class="header-right">
                <button class="search-btn">🔍 Search</button>
                <button class="menu-btn" id="menuBtn">☰ Menu</button>
            </div>
        </div>
        <!-- Overlay Navigation -->
        <div id="overlayNav" class="overlay-nav">
            <div class="overlay-nav-header">
                <div class="logo">
                    <img src="https://i.ibb.co/84Sff3J8/photo-2025-01-30-19-35-16.jpg" alt="Ali Emam" class="logo-img">
                    <span class="name">Ali Emam Al Mamun</span>
                </div>
                <button class="close-btn" id="closeNavBtn">&times; Close</button>
            </div>
            <ul class="overlay-nav-menu">
                <li><a href="about.php">About Me</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="#">Academics</a></li>
                <li><a href="#">Campus</a></li>
                <li><a href="#">In Focus</a></li>
                <li><a href="#">Visit</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Junior Software<br>Developer</h1>
            <p class="hero-description">
                Passionate about building intelligent solutions with<br>
                a keen interest in Artificial Intelligence and Software Development.
            </p>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="quick-links">
        <div class="container">
            <div class="links-grid">
                <div class="link-card">
                    <h3>About Me</h3>
                    <p>A passionate web developer with expertise in modern web technologies and UI/UX design.</p>
                    <a href="#about" class="link-arrow">→</a>
                </div>
                <div class="link-card">
                    <h3>My Projects</h3>
                    <p>Explore my latest web development projects, applications, and design work.</p>
                    <a href="#portfolio" class="link-arrow">→</a>
                </div>
                <div class="link-card">
                    <h3>Skills</h3>
                    <p>HTML5, CSS3, JavaScript, React, Node.js, UI/UX Design, and more.</p>
                    <a href="#skills" class="link-arrow">→</a>
                </div>
                <div class="link-card">
                    <h3>Contact</h3>
                    <p>Let's work together! Get in touch for collaboration opportunities.</p>
                    <a href="#contact" class="link-arrow">→</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="featured">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <div class="featured-grid">
                <article class="featured-item">
                    <img src="https://via.placeholder.com/400x250/2A2A2A/FFFFFF?text=E-Commerce" alt="E-Commerce Project" class="featured-img">
                    <div class="featured-content">
                        <h3>E-Commerce Platform</h3>
                        <p>A full-stack e-commerce solution with React and Node.js</p>
                        <a href="#" class="read-more">View Project</a>
                    </div>
                </article>
                <article class="featured-item">
                    <img src="https://via.placeholder.com/400x250/2A2A2A/FFFFFF?text=Dashboard" alt="Dashboard UI" class="featured-img">
                    <div class="featured-content">
                        <h3>Analytics Dashboard</h3>
                        <p>Modern dashboard UI with real-time data visualization</p>
                        <a href="#" class="read-more">View Project</a>
                    </div>
                </article>
                <article class="featured-item">
                    <img src="https://via.placeholder.com/400x250/2A2A2A/FFFFFF?text=Mobile+App" alt="Mobile App" class="featured-img">
                    <div class="featured-content">
                        <h3>Mobile App Design</h3>
                        <p>UI/UX design for a fitness tracking mobile application</p>
                        <a href="#" class="read-more">View Project</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p>Dhaka, Bangladesh<br>
                    Email: ali.emam@example.com</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#portfolio">Projects</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>My Skills</h4>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Responsive Design</a></li>
                        <li><a href="#">Full Stack Development</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Connect</h4>
                    <div class="social-links">
                        <a href="#">GitHub</a>
                        <a href="#">LinkedIn</a>
                        <a href="#">Twitter</a>
                        <a href="#">Behance</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Ali Emam Al Mamun. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Overlay navigation open/close logic
        const menuBtn = document.getElementById('menuBtn');
        const overlayNav = document.getElementById('overlayNav');
        const closeNavBtn = document.getElementById('closeNavBtn');
        const header = document.querySelector('.header');
        const body = document.body;

        menuBtn.addEventListener('click', () => {
            overlayNav.classList.add('open');
            header.classList.add('nav-black');
            body.classList.add('nav-open'); // Add this line
        });
        closeNavBtn.addEventListener('click', () => {
            overlayNav.classList.remove('open');
            header.classList.remove('nav-black');
            body.classList.remove('nav-open'); // Add this line
        });
        // Optional: close overlay on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                overlayNav.classList.remove('open');
                header.classList.remove('nav-black');
                body.classList.remove('nav-open'); // Add this line
            }
        });
    </script>
</body>
</html>