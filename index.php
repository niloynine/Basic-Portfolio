<?php
// Include the configuration file
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($portfolio_data['personal_info']['name']) ? $portfolio_data['personal_info']['name'] : 'Portfolio'; ?> - Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#home" class="nav-logo"><?php echo isset($portfolio_data['personal_info']['name']) ? $portfolio_data['personal_info']['name'] : 'Portfolio'; ?></a>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#achievements">Achievements</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <?php if (isset($portfolio_data['personal_info']['profile_image']) && !empty($portfolio_data['personal_info']['profile_image'])): ?>
                <div class="profile-image">
                    <img src="<?php echo htmlspecialchars($portfolio_data['personal_info']['profile_image']); ?>" alt="<?php echo isset($portfolio_data['personal_info']['name']) ? htmlspecialchars($portfolio_data['personal_info']['name']) : 'Profile'; ?>">
                </div>
            <?php endif; ?>
            <h1><?php echo isset($portfolio_data['personal_info']['name']) ? $portfolio_data['personal_info']['name'] : 'Your Name'; ?></h1>
            <h2><?php echo isset($portfolio_data['personal_info']['title']) ? $portfolio_data['personal_info']['title'] : 'Your Title'; ?></h2>
            <p>Passionate about creating innovative solutions</p>
            <a href="#projects" class="cta-button">View My Work</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Me</h2>
            <p><?php echo isset($portfolio_data['personal_info']['bio']) ? $portfolio_data['personal_info']['bio'] : 'Your bio goes here.'; ?></p>
            
            <h3>Technologies I work with:</h3>
            <div class="skills-grid">
                <?php 
                if (isset($portfolio_data['skills']) && is_array($portfolio_data['skills'])) {
                    foreach($portfolio_data['skills'] as $skill): 
                ?>
                    <div class="skill-item"><?php echo htmlspecialchars($skill); ?></div>
                <?php 
                    endforeach; 
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="projects-grid">
                <?php 
                if (isset($portfolio_data['projects']) && is_array($portfolio_data['projects'])) {
                    foreach($portfolio_data['projects'] as $project): 
                ?>
                    <div class="project-card">
                        <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                        <div class="tech-tags">
                            <?php 
                            if (isset($project['technologies']) && is_array($project['technologies'])) {
                                foreach($project['technologies'] as $tech): 
                            ?>
                                <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                            <?php 
                                endforeach; 
                            }
                            ?>
                        </div>
                        <div class="project-links">
                            <?php if (isset($project['github']) && !empty($project['github'])): ?>
                                <a href="<?php echo htmlspecialchars($project['github']); ?>" target="_blank">
                                    <i class="fab fa-github"></i> Code
                                </a>
                            <?php endif; ?>
                            <?php if (isset($project['live']) && !empty($project['live'])): ?>
                                <a href="<?php echo htmlspecialchars($project['live']); ?>" target="_blank">
                                    <i class="fas fa-external-link-alt"></i> Live Demo
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php 
                    endforeach; 
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements" class="achievements">
        <div class="container">
            <h2>Achievements</h2>
            <div class="achievements-grid">
                <?php 
                if (isset($portfolio_data['achievements']) && is_array($portfolio_data['achievements'])) {
                    foreach($portfolio_data['achievements'] as $achievement): 
                ?>
                    <div class="achievement-card">
                        <h3><?php echo htmlspecialchars($achievement['title']); ?></h3>
                        <p><strong>Category:</strong> <?php echo htmlspecialchars($achievement['category']); ?></p>
                        <?php if (isset($achievement['college'])): ?>
                            <p><strong>College:</strong> <?php echo htmlspecialchars($achievement['college']); ?></p>
                        <?php endif; ?>
                        <?php if (isset($achievement['University'])): ?>
                            <p><strong>University:</strong> <?php echo htmlspecialchars($achievement['University']); ?></p>
                        <?php endif; ?>
                        <p><strong>Level:</strong> <?php echo htmlspecialchars($achievement['level']); ?></p>
                        <p><strong>Prize:</strong> <?php echo htmlspecialchars($achievement['prize']); ?></p>
                        <p><strong>Date:</strong> <?php echo htmlspecialchars($achievement['date']); ?></p>
                    </div>
                <?php 
                    endforeach; 
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Let's Connect</h2>
            <p>Interested in working together? Let's schedule a time to chat!</p>
            <div class="contact-links">
                <?php if (isset($portfolio_data['personal_info']['email'])): ?>
                    <a href="mailto:<?php echo htmlspecialchars($portfolio_data['personal_info']['email']); ?>">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                <?php endif; ?>
                <?php if (isset($portfolio_data['personal_info']['linkedin'])): ?>
                    <a href="<?php echo htmlspecialchars($portfolio_data['personal_info']['linkedin']); ?>" target="_blank">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                <?php endif; ?>
                <?php if (isset($portfolio_data['personal_info']['github'])): ?>
                    <a href="<?php echo htmlspecialchars($portfolio_data['personal_info']['github']); ?>" target="_blank">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>
</body>
</html>