<?php
include('../database/conn.php');

// Query to fetch data from the 'messages' table
$query = "SELECT * FROM messages";
$stmt = $pdo->prepare($query);
$stmt->execute();

// Fetch all rows as an associative array
$messages = $stmt->fetchAll();
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
    <link rel="stylesheet" href="../css/components/admin.css">
    <link rel="stylesheet" href="../css/components/card.css">
</head>
<body>
    <!-- Main Content -->
    <div class="content">
        <!-- Navbar for larger screens -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#home">JC_Ortega</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Messages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="status.php">Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        function openModal(name, email, subject, message) {
            // Set the modal fields with the values passed from the button
            document.getElementById('modalName').value = name;
            document.getElementById('modalEmail').value = email;
            document.getElementById('modalSubject').value = subject;
            document.getElementById('modalMessage').value = message;
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
