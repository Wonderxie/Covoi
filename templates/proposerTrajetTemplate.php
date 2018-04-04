<section class="probootstrap-cover overflow-hidden relative background-page " data-stellar-background-ratio="0.5"  id="section-home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md">
          <h2 class='heading mb-2 display-4 font-light probootstrap-animate'>Proposez un trajet !</h2>

          <p class="lead mb-5 probootstrap-animate">
          </p>
        </div>
        <div class="col-md probootstrap-animate">
          <form action="index.php?action=tryPropose" class="probootstrap-form" method="post" >
            <div class="form-group">
              <div class="row mb-3">
                <div class="col-md">
                  <div class="form-group">
                    <label for="id_label_single">Départ</label>

                    <label for="id_label_single" style="width: 100%;">
                      <select class="js-example-basic-single js-states form-control" id="departCity" style="width: 100%;">

                        <option value="Lavoisier">Résidence Lavoisier</option>
                        <option value="Bourseul">Site Bourseul</option>
                        <option value="Lahure">Site Lahure</option>
                        <option value="Condorcet">Résidence Condorcet</option>
                        <option value="Descartes">Résidence Descartes</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="id_label_single2">Arrivée</label>
                    <div class="probootstrap_select-wrap">
                      <label for="id_label_single2" style="width: 100%;">
                      <select class="js-example-basic-single js-states form-control" id="arrivalCity" style="width: 100%;">
                       <option value="Lahure">Site Lahure</option>
                       <option value="Lavoisier">Résidence Lavoisier</option>
                       <option value="Bourseul">Site Bourseul</option>
                       <option value="Condorcet">Résidence Condorcet</option>
                       <option value="Descartes">Résidence Descartes</option>
                      </select>
                    </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END row -->
              <div class="row mb-5">
                <div class="col-md">
                  <div class="form-group">
                    <label for="probootstrap-date-departure">Aller le</label>
                    <div class="probootstrap-date-wrap">
                      <span class="icon ion-calendar"></span>
                      <input type="text" id="probootstrap-date-departure" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="probootstrap-date-arrival">Retour le</label>
                    <div class="probootstrap-date-wrap">
                      <span class="icon ion-calendar"></span>
                      <input type="text" id="probootstrap-date-arrival" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="Immatriculation" class="sr-only sr-only-focusable">Immatriculation</label>
                <input type="text" class="form-control" id="immatriculation" name="immatriculation" placeholder="Immatriculation *">
              </div>

              <div class="form-group">
                <label for="nbPlaces" class="sr-only sr-only-focusable">Nombre de places</label>
                <input type="text" class="form-control" id="immatriculation" name="immatriculation" placeholder="Immatriculation *">
              </div>

              <form class="form-horizontal">

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md">Nombre de places disponibles</label>
  <div class="row mb-6 ">
    <div class="radio col-md-3">
      <label for="type0">
        <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
        1
      </label>
    </div>

    <div class="radio col-md-3">
      <label for="radios-1">
        <input type="radio" name="radios" id="radios-1" value="2">
        2
      </label>
    </div>

    <div class="radio col-md-3">
      <label for="radios-1">
        <input type="radio" name="radios" id="radios-1" value="3">
        3
      </label>
    </div>

    <div class="radio col-md-3">
      <label for="radios-1">
        <input type="radio" name="radios" id="radios-1" value="4">
        4
      </label>
    </div>
  </div>
</div>


<div class="form-group">

  <div class="row">
    <label class="control-label" for="radios">Nombre de places disponibles</label>

    <div class="col-md">
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label>
  </div>

    <div class="col-md">
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label>
  </div>


    <div class="col-md">
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label>
  </div>

    <div class="col-md">
    <label class="radio-inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
      </div>
</div>
</div>

</form>

              <!-- END row -->
              <div class="row">
                <div class="col-md">
          <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger btn-block" href="index.php?action=recherche">Rechercher</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </section>
