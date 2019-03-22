<?php
	namespace Modele;

    use GuzzleHttp\Client;
    use EntiteInterface\EntiteInterface;
        
    class JeuxModel implements EntiteInterface
    {
        private $name;
		private $editor;
		private $year_published;
		private $description;
		private $category;
		private $time;
        private $number_player;
        
        function __construct(array $jeu_data = []){
            foreach ($jeu_data as $key => $value) {
               $this->$key=$value; 
            }
        }
        function ajouter(){

        }
        function modifier(){

        }
        function supprimer(){

        }
        function ajouterCollection(){

        }
        function supprimerCollection(){

        }
        function voir(){

        }
        function preterJeux(){

        }
        function lister(){
            include_once('vendor/autoload.php');
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://virtserver.swaggerhub.com',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);

            $response = $client->request('GET', 'vanessakovalsky/BoardGames/1.0.0/boardgame/findByStatus?status=available');
            $jeu_data = json_decode($response->getBody()->getContents(), true);
            // var_dump($jeu_data);
            $table_jeu=[];
            foreach ($jeu_data as $jeu) {
                $table_jeu[] = new JeuxModel($jeu);
            }
            // print_r($table_jeu[0]);
            return $table_jeu;
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
    
?>