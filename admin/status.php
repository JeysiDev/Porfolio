<?php
include('../database/conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JC_Ortega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components/hero.css">
    <link rel="stylesheet" href="css/components/about.css">
    <link rel="stylesheet" href="css/components/skills.css">
    <link rel="stylesheet" href="css/components/projects.css"> -->
    <link rel="stylesheet" href="css/components/contact.css">
    <link rel="stylesheet" href="../css/components/admin.css">
    <link rel="stylesheet" href="../css/components/card.css">
</head>
<style>
    h1{
        margin-top: 150px;
        color: black;
    }
</style>
<?php
    include('../header/header.php');
?>
<body>
    <!-- Main Content -->
    <div class="content">
        <section class="messages-section">
            <div class="container">
                <div class="messages">
                    <h3>Messages</h3>
                </div>
                <div class="row">
                    <?php foreach ($messages as $message) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($message['name']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($message['subject']); ?></p>
                                <p class="card-date"><strong>Sent:</strong> <?php echo htmlspecialchars($message['created_at']); ?></p>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewModal" onclick="openModal('<?php echo htmlspecialchars($message['name']); ?>', '<?php echo htmlspecialchars($message['email']); ?>', '<?php echo htmlspecialchars($message['subject']); ?>', '<?php echo htmlspecialchars($message['message']); ?>')">View</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
