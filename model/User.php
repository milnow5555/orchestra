<?php

function getUsers(){
    $database = new Database();
    $database->connect();
    $query= $database->query("SELECT * FROM user");

    while($user = mysqli_fetch_array($query)){
        
        echo '<tr><td>'.$user['iduser'].'</td><td>'.$user['login'].'</td><td>'.$user['password'].'</td><tr>';
    }
}

function insertUser(){
    $mysqlConnect = new database();
    $mysqlConnect->connect();
 
    $temp_login = $_POST['Login'];
    $temp_haslo = $_POST['Password'];
    $temp_haslo2 = $_POST['Password2'];
    $temp_email = $_POST['Email'];
    $temp_imie = $_POST['Name'];
    $temp_nazwisko = $_POST['Last_Name'];
    

    if($temp_haslo == $temp_haslo2){
        $temp_salt = generateSalt();
        $temp_passsalted = $temp_haslo.$temp_salt;
        $query = "INSERT INTO User(login, password, salt,typeid,name,lastname,email) VALUES ('$temp_login',md5('$temp_passsalted'),'$temp_salt',3,'$temp_imie','$temp_nazwisko','$temp_email');";
        echo $query;
 
        if($mysqlConnect->query($query)){
     //       header("location: ../index.php?msg=OK");
 
        }else{
            echo "Uzytkownik nie zostal dodany!";
            die();
        }
    }else{
        echo "Passwords don't match";
        die();
    };
}

function loginUser(){
    $mysqlConnect = new database();
    $mysqlConnect->connect();
 
    $temp_login = $_POST['login'];
    $temp_haslo = $_POST['password'];
 
    $query = $mysqlConnect->query("SELECT * FROM User WHERE Login = '$temp_login'");
    $user=mysqli_fetch_array($query);
    
    if(md5($temp_haslo.$user['salt']) == $user['password']) {
        unset($_SESSION['Error']);
        $_SESSION['Zalogowany'] = true;
        $_SESSION['User'] = $temp_login;   
        header('Location: ../View/home.php');   
    }else {
        $_SESSION['Error'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
        header('Location: ../View/index.php');
    }
 
}

function generateSalt() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 7; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function logoutUser(){
    session_unset();  
    header('Location: ../View/index.php');
}

?>