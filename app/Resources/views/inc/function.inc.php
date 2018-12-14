<div class="slider">
  <div><a href="assets/img/voitures opt/Ferrari/F40/F40_1.jpg"></a></div>
  <div><a href="assets/img/voitures opt/Ferrari/F40/F40_2.jpg"></a></div>
  <div><a href="assets/img/voitures opt/Ferrari/F40/F40_3.jpg"></a></div>
  <div><a href="assets/img/voitures opt/Ferrari/F40/F40_4.jpg"></a></div>
  <div><a href="assets/img/voitures opt/Ferrari/F40/F40_5.jpg"></a></div>
</div>

<?php

// utilisateur est connecté
function userIsConnect() {
	// si l'indice membre existe dans session alors, l'utilisateur est forcément passé par connexion et donc nous a donné un pseudo et un mdp correct.
	if(isset($_SESSION['membre']))  {
		return true;
	}
	return false;
}

// utilisateur est connecté et est admin !
function userIsAdmin () {
	if(userIsConnect() && $_SESSION['membre']['statut'] == 2) {
		return true;
	}
	return false;
}