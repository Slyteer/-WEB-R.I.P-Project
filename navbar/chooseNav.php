<?php

$bdd = new PDO('mysql:host=localhost;dbname=rip', 'root', '');

if(isset($_SESSION['id'])){
      $query=$bdd->prepare('SELECT isAdmin
      FROM users WHERE id = :id');
      $query->bindValue(':id',$_SESSION['id']);
      $query->execute();
      $data=$query->fetch();
      if($data['isAdmin'] == 1){
         include('Navbar/NavbarAdmin.php');
      }
    }
   else{
      include('Navbar/Navbar.php');
    }

 ?>