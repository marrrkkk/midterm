<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 600px;">
      <h2 class="card-title text-center mb-4">Student Information</h2>
      <div class="card-body">
        <p><strong>Student ID:</strong> <?= esc($student_id) ?></p>
        <p><strong>First Name:</strong> <?= esc($fname) ?></p>
        <p><strong>Last Name:</strong> <?= esc($lname) ?></p>
        <p><strong>Address:</strong> <?= esc($address) ?></p>
        <p><strong>Birthday:</strong> <?= esc($birthday) ?></p>
        <p><strong>Gender:</strong> <?= esc($gender) ?></p>
        <p><strong>Mobile Phone:</strong> <?= esc($mobile) ?></p>
        <p><strong>Email:</strong> <?= esc($email) ?></p>
        <p><strong>Status:</strong> <?= esc($status) ?></p>
      </div>
      <div class="text-center">
        <a href="/" class="btn btn-secondary mt-3">Back to Form</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
