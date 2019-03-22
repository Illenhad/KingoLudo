<?php
	namespace Controller;
	
	use Modele\UtilisateurModel;
	use Session\Session;
	/**
	 * 
	 */
	abstract class UtilisateurController 
	{
		protected $role;
		protected $permission = [];
		protected $isConnected;
		private $session;

		function __construct(Session $session)
		{
			$this->session = $session;
		}
		static function connexion(Session $session){
			if (empty($_POST)){
				$result = include_once('src\Vue\formulaire_connexion.php');
				return $result;
			}else{
				$user = new UtilisateurModel();
				$content = $user->connexion($_POST);
				if($content == 'test'){
					if($session->session_exist('login')){
						$session->insert_value('login', $_POST['login']);
					}else {
						$session->create_session('login');
          				$session->insert_value('login',  $_POST['login']);
					}
				}	
				return "Hello ".$_POST['login'];
						
			}
			
		}
		function deconnexion(Session $session){
			if($session->session_exist('login')){
				$session->remove_session('login');
				header('location: index.php');
			}
			die('test');
		}
		function modifierProfil(){
			return 'Modifier Profil';
		}
		function aLaPermission(){
			return 'permission';
		}
		function lister(){
			return 'Liste Membre';
		}

		/**
		 * Get the value of isConnected
		 */ 
		function getIsConnected()
		{
				return $this->isConnected;
		}

		/**
		 * Set the value of isConnected
		 *
		 * @return  self
		 */ 
		function setIsConnected($isConnected)
		{
				$this->isConnected = $isConnected;

				return $this;
		}

		/**
		 * Get the value of role
		 */ 
		function getRole()
		{
				return $this->role;
		}

		/**
		 * Set the value of role
		 *
		 * @return  self
		 */ 
		function setRole($role)
		{
				$this->role = $role;

				return $this;
		}

		/**
		 * Get the value of permission
		 */ 
		function getPermission()
		{
				return $this->permission;
		}

		/**
		 * Set the value of permission
		 *
		 * @return  self
		 */ 
		function setPermission($permission)
		{
				$this->permission = $permission;

				return $this;
		}
	}