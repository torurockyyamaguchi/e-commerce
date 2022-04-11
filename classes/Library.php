<?php

include 'Connection.php' ; // combines 2 files

Class Library extends Connection{

    // contain SQL codes INSERT INTO... SELECT * ...

    public function store_book($bName,$bGenre,$bAuthor){
        $sql= "INSERT INTO books(name,genre,author)VALUES('$bName','$bGenre','$bAuthor')";
        $result= $this->conn->query($sql);

        if($result){
            header('location: ../views/dash-books.php');
        }
    }

    public function show_book(){
        $sql="SELECT * FROM books";
        $result= $this->conn->query($sql);


        if($result->num_rows>0){
            while($rows = $result->fetch_assoc()){
            $container[] = $rows;
            }
            return $container;

        }else{  
            return FALSE;
        }
    }

    public function destroy_book($id){
            $sql = "DELETE FROM books WHERE id = '$id'";
            $result = $this->conn->query($sql);

            if($result){    
                header('location: ../views/dash-books.php');
            }
    }

    public function update_book($name,$genre,$author,$id){
            $sql = "UPDATE books SET name='$name', genre='$genre', author='$author' WHERE id='$id'";  

            $result = $this->conn->query($sql);

            if($result){
                header('location: ../views/dash-books.php');
            }
    }

       
    

}

?>