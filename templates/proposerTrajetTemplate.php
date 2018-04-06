<section class="probootstrap-cover overflow-hidden relative background-page " data-stellar-background-ratio="0.5"  id="section-home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md">
          <h2 class='heading mb-2 display-4 font-light probootstrap-animate'>Proposez un trajet !</h2>

          <p class="lead mb-5 probootstrap-animate">
          </p>
        </div>

        <div class="col-md-6 probootstrap-animate">

          <form action="index.php?action=tryPropose" method="post" class="probootstrap-form probootstrap-form-box mb60">
            <div class="row mb-3">
              <div class="form-group col-md">
                <label for="deparCity">Départ</label>
                <label for="deparCity" class="sr-only sr-only-focusable">Départ</label>
                <input type="text" class="form-control" id="deparCity" name="deparCity" placeholder="Départ">
              </div>
              <div class="form-group col-md">
                <label for="arrivalCity">Arrivée</label>
                <label for="arrivalCity" class="sr-only sr-only-focusable">Arrivée</label>
                <input type="text" class="form-control" id="arrivalCity" name="arrivalCity" placeholder="Arrivée">
              </div>
            </div>

            <div class="row mb-3">
              <div class="form-group col-md">
                <label for="deparDate">Date de Départ</label>
                <label for="departDate" class="sr-only sr-only-focusable">Date de départ</label>
                <input type="date" class="form-control" id="departDate" name="departDate" placeholder="Date de départ">
              </div>
              <div class="form-group col-md">
                <label for="deparTime">Heure  de Départ</label>
                <label for="departTime" class="sr-only sr-only-focusable">Heure de départ</label>
                <input type="time" class="form-control" id="" name="departTime" placeholder="Heure de départ">
              </div>
            </div>

            <div>
              <a href="" class="btn btn-xs btn-default btn-block" id= "addTroncon" onclick="addTroncon()">+ Ajouter un tronçon</a>
            </div>

            <div class="form-group">
              <label for="Immatriculation">Immatriculation</label>
              <label for="Immatriculation" class="sr-only sr-only-focusable">Immatriculation</label>
              <input type="text" class="form-control" id="immatriculation" name="immatriculation" placeholder="Immatriculation *">
            </div>

            <div class="form-group">
              <label for="nbPlaces">Nombre de places disponibles</label>
              <label for="nbPlaces" style="width: 100%;">
                <select class=" js-states form-control" id="nbPlaces" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </label>
            </div>
            <div class="form-group">
              <label for="trajetType">Type de trajet</label>
              <label for="trajetType" class="sr-only sr-only-focusable">Type de trajet</label>
              <input type="text" class="form-control" id="trajetType" name="trajetType" placeholder="Type de trajet">
            </div>
            <div class="form-group col-md">
              <input type="submit" class="btn btn-warning btn-block" id="submit" name="submit" value="Proposer">
            </div>



            </div>
          </form>
        </div>

    </div>

  </section>
