<?php
include('database/conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
        // Insert data into the messages table
        $stmt = $pdo->prepare("INSERT INTO messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        
        $stmt->execute();
        
    } catch (PDOException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JC_Ortega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components/hero.css">
    <link rel="stylesheet" href="css/components/about.css">
    <link rel="stylesheet" href="css/components/skills.css">
    <link rel="stylesheet" href="css/components/projects.css">
    <link rel="stylesheet" href="css/components/contact.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">JC_Ortega</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4">Hi, I'm <span class="highlight">Jhon Carlo</span></h1>
                    <!-- <h2 class="typed-text"></h2> -->
                    <h2 class="text">Web Developer</h2>
                    <!-- <p class="lead">Web Developer</p> -->
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary me-3">Contact Me</a>
                        <a href="#projects" class="btn btn-outline-primary">View Projects</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://via.placeholder.com/400" alt="Profile" class="img-fluid rounded-circle profile-img">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>I'm a passionate Web Developer with expertise in designing responsive and user-friendly web applications. Proficient in both front-end and back-end development, I am committed to delivering efficient, scalable, and impactful digital solutions.</p>
                    <div class="about-info">
                        <p><strong>Name:</strong> Jhon Car;lo M. ortega</p>
                        <p><strong>Email:</strong> ortegacarlo83@gmail.com</p>
                        <p><strong>Location:</strong> Bongabong, Oriental Mindoro</p>
                        <p><strong>Available for:</strong> Freelance, Full-time opportunities</p>
                    </div>
                    <a href="#" class="btn btn-primary mt-3">Download CV</a>
                </div>
                <div class="col-md-6">
                    <div class="about-stats">
                        <div class="stat-item">
                            <h3>1+</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat-item">
                            <h3>5+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat-item">
                            <h3>3+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Skills & Expertise</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="skill-category">
                        <h3>Technical Skills</h3>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>HTML/CSS</span>
                                <span>70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>JavaScript</span>
                                <span>30%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 30%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>PHP</span>
                                <span>60%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-category">
                        <h3>Soft Skills</h3>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Communication</span>
                                <span>70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Problem Solving</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Teamwork</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section-padding">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/350x200" alt="Project 1" class="img-fluid">
                        <div class="project-info">
                            <h3>E-Commerce Website</h3>
                            <p>A full-featured online store built with React and Node.js</p>
                            <div class="tech-stack">
                                <span class="badge bg-primary">React</span>
                                <span class="badge bg-primary">Node.js</span>
                                <span class="badge bg-primary">MongoDB</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn btn-sm btn-primary">Live Demo</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/350x200" alt="Project 2" class="img-fluid">
                        <div class="project-info">
                            <h3>Task Manager</h3>
                            <p>A productivity app with real-time updates</p>
                            <div class="tech-stack">
                                <span class="badge bg-primary">Vue.js</span>
                                <span class="badge bg-primary">Firebase</span>
                                <span class="badge bg-primary">Bootstrap</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn btn-sm btn-primary">Live Demo</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/350x200" alt="Project 3" class="img-fluid">
                        <div class="project-info">
                            <h3>Weather App</h3>
                            <p>Real-time weather forecasting application</p>
                            <div class="tech-stack">
                                <span class="badge bg-primary">JavaScript</span>
                                <span class="badge bg-primary">Weather API</span>
                                <span class="badge bg-primary">CSS3</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn btn-sm btn-primary">Live Demo</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="bi bi-envelope"></i>
                            <div>
                                <h3>Email</h3>
                                <p>ortegacarlo83@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-phone"></i>
                            <div>
                                <h3>Phone</h3>
                                <p>+63 995 7725 731</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-geo-alt"></i>
                            <div>
                                <h3>Location</h3>
                                <p>Bongabong, Oriental Mindoro</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form id="contact-form" class="contact-form" method="POST">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Jhon Carlo. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="social-links text-md-end">
                        <a href="#" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-github"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script type="module" src="js/main.js"></script>
</body>
</html>