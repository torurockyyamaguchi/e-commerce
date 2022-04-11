<?php
$id = $_GET['id'];
include '../classes/Users.php';
$obj = new Users;



?>

<!doctype html>
<html lang="en">
  <head>
    <title>edit-books</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <section class="p-5 mt-5">
            <div class="container">
                <div class="card w-100 mx-auto shadow">
                    <div class="card-header bg-success p-2 text-white text-monospace fs-italic text-center fs-4">
                    Edit Users
                    </div>
                    <div class="card-body">
                        <form action="../actions/update-user.php" method="post">
                            <div class="input-group">
                                <input type="hidden" name="item-id" value="<?php echo $id ?>">
                                <input type="text" name="fname" placeholder="First Name" id="" class="form-control mx-1">
                                <input type="text" name="lname" placeholder="Last Name" id="" class="form-control mx-1">
                                <input type="text" name="contact" placeholder="Contact" id="" class="form-control mx-1">
                                <input type="text" name="username" placeholder="Username" id="" class="form-control mx-1">
                                <input type="password" name="password" placeholder="Password" id="" class="form-control mx-1">
                                <input type="email" name="email" placeholder="Email" id="" class="form-control mx-1">
                                <button type="submit" class="btn btn-success col mx-1">Save</button>                                                                      
                            </div>                            
                        </form>                        
                    </div>
                </div>
            </div>
        </section>




      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>