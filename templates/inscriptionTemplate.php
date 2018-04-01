<section class="probootstrap-cover overflow-hidden relative background-page" data-stellar-background-ratio="0.5" id="section-home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md-6">
        <h2 class=" heading mb-2 display-4 font-light probootstrap-animate ">Inscription</h2>
      </div>

      <div class="col-md-6 probootstrap-animate">
        <form action="index.php?action=validateInscription" method="post" class="probootstrap-form probootstrap-form-box mb60">
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form-group">
                <label for="Nom" class="sr-only sr-only-focusable">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom *">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="prenom" class="sr-only sr-only-focusable">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom *">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="sr-only sr-only-focusable">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email *">
          </div>
          <div class="form-group">
            <label for="inscPassword" class="sr-only sr-only-focusable">Mot de passe</label>
            <input type="password" class="form-control" id="inscPassword" name="inscPassword" placeholder="Mot de passe *">
          </div>
          <div class="form-group">
            <label for="confPassword" class="sr-only sr-only-focusable">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="confPassword" name="confPassword" placeholder="Confirmer le mot de passe *">
          </div>

          <div class="form-group">
            <label class="col-md">Type d'utilisateur</label>
            <div class="row mb-3">
              <div class="radio col-md-6">
                <label for="type0">
                  <input type="radio" name="userType" id="type0" value="AGENT" checked="checked">
                  Agent
                </label>
              </div>

              <div class="radio col-md-6">
                <label for="radios-1">
                  <input type="radio" name="userType" id="type1" value="ETUDIANT">
                  Etudiant
                </label>
              </div>
            </div>
          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-warning btn-block" id="submit" name="submit" value="S'inscrire">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</section>
