<?php
	namespace Controller;

	use Modele\JeuxModel;
	/**
	 * 
	 */
	class JeuController
	{
		private $name;
		private $editor;
		private $year_published;
		private $description;
		private $category;
		private $time;
		private $number_player;

		function __construct()
		{
			# code...
		}

		function ajouter(){
			include_once 'src\Vue\formulaire_ajout_jeu.php';
		}

		function modifier(){
			return 'Modifier Jeux';
		}

		function supprimer(){
			return 'Supprimer Jeux';
		}
		function lister(){
			$listeJeux = new JeuxModel();
			$result = $listeJeux->lister();
			include_once('src\Vue\jeu_view_liste.php');
		}



		/**
		 * Get the value of name
		 */ 
		public function getName()
		{
				return $this->name;
		}

		/**
		 * Set the value of name
		 *
		 * @return  self
		 */ 
		public function setName($name)
		{
				$this->name = $name;

				return $this;
		}

		/**
		 * Get the value of editor
		 */ 
		public function getEditor()
		{
				return $this->editor;
		}

		/**
		 * Set the value of editor
		 *
		 * @return  self
		 */ 
		public function setEditor($editor)
		{
				$this->editor = $editor;

				return $this;
		}

		/**
		 * Get the value of year_published
		 */ 
		public function getYear_published()
		{
				return $this->year_published;
		}

		/**
		 * Set the value of year_published
		 *
		 * @return  self
		 */ 
		public function setYear_published($year_published)
		{
				$this->year_published = $year_published;

				return $this;
		}

		/**
		 * Get the value of description
		 */ 
		public function getDescription()
		{
				return $this->description;
		}

		/**
		 * Set the value of description
		 *
		 * @return  self
		 */ 
		public function setDescription($description)
		{
				$this->description = $description;

				return $this;
		}

		/**
		 * Get the value of category
		 */ 
		public function getCategory()
		{
				return $this->category;
		}

		/**
		 * Set the value of category
		 *
		 * @return  self
		 */ 
		public function setCategory($category)
		{
				$this->category = $category;

				return $this;
		}

		/**
		 * Get the value of time
		 */ 
		public function getTime()
		{
				return $this->time;
		}

		/**
		 * Set the value of time
		 *
		 * @return  self
		 */ 
		public function setTime($time)
		{
				$this->time = $time;

				return $this;
		}

		/**
		 * Get the value of number_player
		 */ 
		public function getNumber_player()
		{
				return $this->number_player;
		}

		/**
		 * Set the value of number_player
		 *
		 * @return  self
		 */ 
		public function setNumber_player($number_player)
		{
				$this->number_player = $number_player;

				return $this;
		}
	}