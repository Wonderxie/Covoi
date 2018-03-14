
<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Connexion</h2>
          </div>
        </div>
		<?php
		if(isset($inscErrorText)){
			echo '<span class="error">' . $inscErrorText . '</span>';
		}
		?>
		<form id="login_form" action="index.php?action=tryConnexion" method="POST">
		<table>
		<tr>
		  <th><h3 class="text-muted">Mail :</h3></th>
		<td><input type="text" name="email"></td>
		</tr>
		<tr>
		  <th><h3 class="text-muted">Mot de passe :</h3></th>
		<td><input type="password" name="CoPassword"></td>
		</tr>
		<tr>
		  <th></th>
		<td><input type="submit" value="Se connecter..." /></td>
		</tr>
		</table>
		</form>
      </div>
    </section>
	