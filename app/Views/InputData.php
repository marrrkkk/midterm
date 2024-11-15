<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter Student Information</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 600px;">
      <h2 class="card-title text-center mb-4">Enter Student Information</h2>
      <form action="/displayData" method="POST">
        <div class="mb-3">
          <label for="student_id" class="form-label">Student ID:</label>
          <input type="text" id="student_id" name="student_id" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="fname" class="form-label">First Name:</label>
          <input type="text" id="fname" name="fname" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="lname" class="form-label">Last Name:</label>
          <input type="text" id="lname" name="lname" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address:</label>
          <input type="text" id="address" name="address" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="birthday" class="form-label">Birthday:</label>
          <input type="date" id="birthday" name="birthday" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Gender:</label>
          <select id="gender" name="gender" class="form-select" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Prefer not to say">Prefer not to say</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="mobile" class="form-label">Mobile Phone:</label>
          <input type="tel" id="mobile" name="mobile" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status:</label>
          <select id="status" name="status" class="form-select" required>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
            <option value="Separated">Separated</option>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS Bundle (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
