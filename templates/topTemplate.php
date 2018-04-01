<nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">ISI Covoit'</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="ion-navicon"></i></span>
    </button>
<?php

	$request = Request::getCurrentRequest();
	$controllerName=$request->getControllerName();
	$this->loadTemplate($controllerName."Menu",$this->args);

?>
