<?php 
namespace Controller;

use Controller\VisiteurController;
	/**
	 * 
	 */
	class MembreController extends VisiteurController
	{
		protected $login;
		protected $mdp;
		protected $nom;
		protected $prenom;
		protected $mail;
		protected $avatar;
		protected $collection = [];
		protected $favoris = [];
		protected $presentation;

		function __construct()
		{
			# code...
		}

		/**
		 * Get the value of login
		 */ 
		public function getLogin()
		{
				return $this->login;
		}

		/**
		 * Set the value of login
		 *
		 * @return  self
		 */ 
		public function setLogin($login)
		{
				$this->login = $login;

				return $this;
		}

		/**
		 * Get the value of mdp
		 */ 
		public function getMdp()
		{
				return $this->mdp;
		}

		/**
		 * Set the value of mdp
		 *
		 * @return  self
		 */ 
		public function setMdp($mdp)
		{
				$this->mdp = $mdp;

				return $this;
		}

		/**
		 * Get the value of nom
		 */ 
		public function getNom()
		{
				return $this->nom;
		}

		/**
		 * Set the value of nom
		 *
		 * @return  self
		 */ 
		public function setNom($nom)
		{
				$this->nom = $nom;

				return $this;
		}

		/**
		 * Get the value of prenom
		 */ 
		public function getPrenom()
		{
				return $this->prenom;
		}

		/**
		 * Set the value of prenom
		 *
		 * @return  self
		 */ 
		public function setPrenom($prenom)
		{
				$this->prenom = $prenom;

				return $this;
		}

		/**
		 * Get the value of mail
		 */ 
		public function getMail()
		{
				return $this->mail;
		}

		/**
		 * Set the value of mail
		 *
		 * @return  self
		 */ 
		public function setMail($mail)
		{
				$this->mail = $mail;

				return $this;
		}

		/**
		 * Get the value of avatar
		 */ 
		public function getAvatar()
		{
				return $this->avatar;
		}

		/**
		 * Set the value of avatar
		 *
		 * @return  self
		 */ 
		public function setAvatar($avatar)
		{
				$this->avatar = $avatar;

				return $this;
		}

		/**
		 * Get the value of collection
		 */ 
		public function getCollection()
		{
				return $this->collection;
		}

		/**
		 * Set the value of collection
		 *
		 * @return  self
		 */ 
		public function setCollection($collection)
		{
				$this->collection = $collection;

				return $this;
		}

		/**
		 * Get the value of favoris
		 */ 
		public function getFavoris()
		{
				return $this->favoris;
		}

		/**
		 * Set the value of favoris
		 *
		 * @return  self
		 */ 
		public function setFavoris($favoris)
		{
				$this->favoris = $favoris;

				return $this;
		}

		/**
		 * Get the value of presentation
		 */ 
		public function getPresentation()
		{
				return $this->presentation;
		}

		/**
		 * Set the value of presentation
		 *
		 * @return  self
		 */ 
		public function setPresentation($presentation)
		{
				$this->presentation = $presentation;

				return $this;
		}
	}
