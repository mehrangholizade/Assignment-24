<html>
    <head>
    <title>Add New Contact</title>
      <meta charset="utf-8">
      <meta name="author" content="Mehran Gholizadeh">
      <meta name="description" content="Add & Delete contacts">
      <meta name="keywords" content="Add & Delete contacts,contacts,html,css,js,bootstrap,php and ...">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
      <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div style="width: 30%" class="container">
            <div class="mt-3">
                <form  method="post" action="new_message.php">
                    <div class="bg-dark px-4 pb-4">
                        <div class="row text-center">
                            <h3 class="mt-3 text-white" >Add New Contact</h3>
                        </div>
                        <hr style="color: white" class="px-0">
                        <label class="form-label text-white mt-3">First Name</label>
                        <input type="text" class="form-control m-0" name="first_name" >
                        <label class="form-label text-white mt-3" >Last Name</label>
                        <input type="text" class="form-control" name="last_name">
                        <label class="form-label text-white mt-3" >Email</label>
                        <input type="email" class="form-control" name="email">
                        <label class="form-label text-white mt-3" >Mobile Number</label>
                        <input type="text" class="form-control" name="mobile_number">
                        <label class="form-label text-white mt-3" >Phone Number</label>
                        <input type="text" class="form-control" name="phone_number">
                        
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary text-white mt-2">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>