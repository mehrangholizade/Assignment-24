<?php
  include "database.php"; 

  $payamha= mysqli_query($connection, "SELECT *FROM messages");

?>
<html>
    <head>
      <title>Happy Family</title>
      <meta charset="utf-8">
      <meta name="author" content="Mehran Gholizadeh">
      <meta name="description" content="Add & Delete contacts">
      <meta name="keywords" content="Add & Delete contacts,contacts,html,css,js,bootstrap,php and ...">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
      <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
      <div class="container">
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Happy Family</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">View Contacts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"  aria-current="page" href="add_contact.php">Add new contact</a>
                      </li>
                      <li class="nav-item">
                          <form action="delete_contacts.php" method="post">
                          <a class="nav-link" href="delete_contacts.php">Delete Contact</a>
                          </form>
                      </li>
                         
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
              <div class="col-12">
            <div class="table-responsive">
            <table class="table table-bordered text-center table-dark table-striped mt-2">
            <thead>
                        <tr>
                            <th>id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($payamha as $payam): ?>
                            <tr>
                                <td><?php echo $payam["id"]; ?></td>
                                <td><?php echo $payam["first_name"]; ?></td>
                                <td><?php echo $payam["last_name"]; ?></td>
                                <td><?php echo $payam["email"]; ?></td>
                                <td><?php echo $payam["mobile_number"]; ?></td>
                                <td><?php echo $payam["phone_number"]; ?></td>   
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
              </div>  
              </div>
              </div>
           
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="js/bootstrap.js"></script>
    </body>
</html>