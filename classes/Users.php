<?php

include 'Connection.php';

class Users extends Connection{

    public function store_users($fname, $lname, $contact, $username, $password, $email){
        $sql = "INSERT INTO users(fname,lname,contact,username,password,email)VALUES('$fname','$lname','$contact', '$username', '$password','$email')";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/dash-users.php');
        }else{
            die("ERROR: ". $this->conn->error);
        }
    }
    public function show_users(){
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            while($rows = $result->fetch_assoc()){
                $container[] = $rows;
            }
            return $container;
        }else{
            return FALSE;
        }
    }
    public function destroy_users($id){
        $sql ="DELETE FROM users WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/dash-users.php');
        }
    }
    public function update_user($fname,$lname,$contact,$username,$password,$email,$id){
        $sql ="UPDATE users SET fname='$fname', lname='$lname', contact='$contact', username='$username', password='$password', email='$email'  WHERE id = '$id'";
        $result = $this->conn->query($sql);

        if($result){
            header('location: ../views/dash-users.php');
        
        }
    }
}   
?>

