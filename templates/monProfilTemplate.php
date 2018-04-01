<section class="probootstrap-cover overflow-hidden relative background-page" data-stellar-background-ratio="0.5" id="section-home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md-6">
        <img src='css/imgs/avatar.jpeg' alt='avatar'>
        <h2 class=" heading mb-2 display-4 font-light probootstrap-animate "> </h2>

      </div>

      <div class="col-md-6 probootstrap-animate">


        <form action="index.php?action=validateInscription" method="post" class="probootstrap-form probootstrap-form-box mb60">
          <div class="row mb-3">
            <div class="col-md-6">
              <!--<div class="form-group">-->
                <?php
                    echo "Nom: ";
                    echo $_SESSION['NOM'];

                ?>
                <!--<label for="Nom" class="sr-only sr-only-focusable">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom *">-->
              <!--</div>-->
            </div>
            <div class="col-md-6">
              <?php
                  echo "Prénom: ".$_SESSION['PRENOM'];

              ?>
            </div>
          </div>
          <div class="row mb-3">

            <?php
                echo "Email: ".$_SESSION['EMAIL'];
            ?>
          </div>
          <div class="row mb-3">
            <?php
                echo "Type d'utilisateur: ".$_SESSION['TYPE'];
            ?>
          </div>

          <div class="row mb-3">
            <?php
                if(empty($_SESSION['UNITE'])){
                  echo "Unité: Non renseigné";
                }
                else {
                  echo "Unité: ".$_SESSION['UNITE'];
                }
            ?>
          </div>
          <div class="row mb-3">
            <?php
                if(empty($_SESSION['PROMOTION'])){
                  echo "Promotion: Non renseignée";
                }
                else {
                  echo "Promotion: ".$_SESSION['PROMOTION'];
                }
            ?>
          </div>

      </div>
    </div>
  </div>
</div>

</section>
