<?php
//J'inclus mon controller, ainsi que la navbar.
include('controller/loversController.php');
include('template/navbar.php'); ?>
<div class="row">
  <?php
  //Pour chaque profil dans mon tableau $users, j'affiche ses information dans une CARD bootsrap
  foreach ($users as $key => $user) {
    $user_info = $users[$key];
    $gender = $user_info['gender'];
    //Si le genre de l'utilisateur correspond à la recherche de l'utilisateur qui s'est inscrit, j'affiche le profil
    if ($gender == $_COOKIE['user_search']) { ?>
      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem">
          <img src="assets/img/<?= $user_info['picture'] ?>" class="card-img-top profil_picture" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $user_info['firstname'] . ' ' . $user_info['lastname'] ?></h5>
            <p><?= $user_info['age'] ?> ans</p>
            <p><?= $user_info['zipcode'] ?></p>
            <p class="card-text"><?= $user_info['description'] ?></p>
            <button class="btn btn-primary like no_liked">Like</a>
          </div>
        </div>
      </div>
  <?php
    }
  }
  ?>
</div>