<?php
// Connect to the database
require_once 'config.php';

// Fetch all contacts
$sql = "SELECT * FROM contacts ORDER BY created_at DESC";
$stmt = $pdo->query($sql);
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 30px;
        }

        .table {
            font-size: 14px;
        }

        .btn-sm {
            font-size: 12px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center mb-4">Contact Management System</h2>
    <a href="add.php" class="btn btn-primary mb-3">+ Add New Contact</a>

    <?php if (count($contacts) > 0): ?>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?php echo htmlspecialchars($contact['name']); ?></td>
                    <td><?php echo htmlspecialchars($contact['phone']); ?></td>
                    <td><?php echo htmlspecialchars($contact['email']); ?></td>
                    <td><?php echo htmlspecialchars($contact['address']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $contact['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?php echo $contact['id']; ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this contact?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info text-center" role="alert">
            No contacts found in the system.
        </div>
    <?php endif; ?>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>