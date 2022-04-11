<?php

    include '../classes/Library.php';
    $obj = new Library;



    $name = $_POST['book-name'];
    $genre = $_POST['book-genre'];
    $author = $_POST['book-author'];
    $item_id = $_POST['item-id'];
  
    $obj->update_book($name,$genre,$author,$item_id);
    

?>