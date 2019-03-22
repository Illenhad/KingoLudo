<?php
namespace Controller;

use Controller\MembreController;

/**
	 * 
	 */
class AdminController extends MembreController
{
	function modifier()
	{
		return 'Modifier utilisateur';
	}

	function ajouter()
	{
		include_once('src/Vue/formulaire_ajout_utilisateur.php');
	}

	function supprimer()
	{
		return 'suppression utilisateur';
	}
}
