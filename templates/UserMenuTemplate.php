<div class="collapse navbar-collapse" id="probootstrap-menu">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item "><a class="nav-link js-scroll-trigger" href="index.php?action=proposerTrajet">Proposer un trajet</a></li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION['PRENOM']." ".$_SESSION['NOM']?>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="monProfil">
          <a class="nav-link js-scroll-trigger dropdown-item " style="color:	#000000;" href="index.php?action=monProfil">Mon profil</a>
          <a class=" nav-link js-scroll-trigger  dropdown-item " style="color:	#000000;" href="index.php?action=parametres">Paramètres</a>
          <a class=" nav-link js-scroll-trigger  dropdown-item " style="color:	#000000;" href="index.php?action=deconnexion">Déconnexion</a>
      </div>
    </li>
      </ul>
    </div>
  </div>
</nav>
