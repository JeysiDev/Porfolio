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
    <!-- <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components/hero.css">
    <link rel="stylesheet" href="css/components/about.css">
    <link rel="stylesheet" href="css/components/skills.css">
    <link rel="stylesheet" href="css/components/projects.css"> -->
    <link rel="stylesheet" href="css/components/contact.css">
    <link rel="stylesheet" href="../css/components/admin.css">
    <link rel="stylesheet" href="../css/components/card.css">
</head>
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

    <!-- Modal for View -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Message Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="modalName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="modalName" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="modalEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="modalEmail" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="modalSubject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="modalSubject" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="modalMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="modalMessage" rows="4" readonly></textarea>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div> -->
            </div>
        </div>
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
