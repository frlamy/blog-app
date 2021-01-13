<?php
require '../vendor/autoload.php';
use App\Auth\ {
  Auth,
  App
};
use App\Config\Database;

$title = "Administration";
$pageDescribe = "Zone d'administration";
$auth = App::getAuth();
$user = $auth->user();

?>
<h1>Dashboard</h1>
  <hr>
  <?php if(isset($_GET['login'])) : ?>
      <div class="alert alert-success alert-dismissible fade show">
          Vous êtes bien identifié(e)
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  <?php endif; ?>

  <?php if($user) : ?>
      <p class=>Vous êtes connecté en tant que <span class="font-weight-bold"><?= $user->getUsername() ;?></span></p>
  <?php endif; ?>
  <?php if(isset($_GET['denied'])) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Accès à la page interdit</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php endif; ?>