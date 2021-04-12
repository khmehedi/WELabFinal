<?php 
 
  include "inc/header.php";

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <title>DashBoard- After Login</title>
  </head>

<body>
    <section class="container text-success">
      <div class="jumbotron">
        <h1 class="display-4">WelCome To the Dashboard,<strong> <?php echo $_SESSION['name']; ?></strong></h1>
        <hr class="my-4">
        <p>This is your Profile section/User Dashboard</p>
        <div class="text-right">
          <a href="inc/logout.php" class="btn btn-danger ">Logout</a>
        </div>
      </div>
    </section>
    <section class="container p-5 bg-light">
      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col"><?php echo $_SESSION['name']; ?></th>
            </tr>
            <tr>
              <th scope="col">Email</th>
              <th scope="col"><?php echo $_SESSION['email']; ?></th>
            </tr>
            <tr>
              <th scope="col">Phone</th>
              <th scope="col"><?php echo $_SESSION['phone']; ?></th>
            </tr>
          </thead>
        </table>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>
</html>
