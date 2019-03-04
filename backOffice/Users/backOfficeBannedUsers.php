<?php
session_start();


include '../../include/config.php';
include '../../include/fonction.php';
?>

<!DOCTYPE html>
<html>
<?php include "includehtml/head.html" ?>

<body>

  <?php
  require '../../Class/Autoloader.php';
  App\Autoloader::register();
  $backOffice=2;
  $type =0;
  $navbar = new App\Navbar($backOffice,$type);
  $navbar->navbar();
  $Session = new App\Session($_SESSION['id']);
  $Session->isConnect();
  ?>

  <br>
  <br>
  <div class="container">
    <h1>Table des comptes bannis</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Mail</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Date de naissance</th>
          <th scope="col">Sexe</th>
          <th scope="col">Admin</th>
          <th scope="col">Unban</th>
        </tr>
      </thead>
      <?php showBannedUser();
      ?>
    </table>
  </div>
  <?php include "../includehtml/footer.php" ?>
</body>
</html>
