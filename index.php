<?php
  include "database.php"; 

  $payamha= mysqli_query($connection, "SELECT *FROM messages");

?>
<html>
    <head>
      <title>Happy Family</title>
      <meta charset="utf-8">
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
                        <a class="nav-link" href="#">Add new contact</a>
                      </li>
                       <!-- Button trigger modal -->
                          <button type="button" id="new_contact_btn" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            +
                          </button>
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
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="new_message.php">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First name</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1" class="form-label">Last name</label>
                        <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1" class="form-label">Mobile number</label>
                        <input type="text" name="mobile_num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1" class="form-label">Phone number</label>
                        <input type="text" name="phone_num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
    
<script src="js/bootstrap.js"></script>
    </body>
</html>