<?php
$id = $_GET['id'];
include '../classes/Library.php';
$obj = new Library;



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
                <div class="card w-50 mx-auto shadow">
                    <div class="card-header bg-success p-2 text-white text-monospace fs-italic text-center fs-4">
                    Edit Books
                    </div>
                    <div class="card-body">
                        <form action="../actions/update-item.php" method="post">
                            <div class="input-group">
                                <input type="hidden" name="item-id" value="<?php echo $id ?>">
                                <input type="text" name="book-name" id="" placeholder="Book Name" class="form-control">
                                <input type="text" name="book-genre"id="" placeholder="Book Genre" class="form-control">                                                                    
                            </div>
                            <div class="input-group mt-3">
                                <input type="text" name="book-author" id="" placeholder="Book Author" class="form-control">
                                <button type="submit" class="btn btn-outline-primary">Save</button>                                
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