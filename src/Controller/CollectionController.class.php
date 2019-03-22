<?php
	
	/**
	 * 
	 */
	class CollectionController
	{
		private $jeux = [];

		function __construct(){
			
		}

		function ajouterJeu(){
			return "Collection!";
		}

		function supprimerJeu(){

		}

		function préterJeu(){

		}

		/**
		 * Get the value of jeux
		 */ 
		public function getJeux()
		{
				return $this->jeux;
		}

		/**
		 * Set the value of jeux
		 *
		 * @return  self
		 */ 
		public function setJeux($jeux)
		{
				$this->jeux = $jeux;

				return $this;
		}
	}