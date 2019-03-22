<?php
    namespace Modele;

    use EntiteInterface\EntiteInterface;
    use GuzzleHttp\Client;
    class UtilisateurModel implements EntiteInterface
    {
        function __construct(){
            
        }
        function modifier(){

        }
        function ajouter(){

        }
        function supprimer(){

        }
        function deconnexion(){

        }
        function connexion($var){
            include_once('vendor/autoload.php');
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://virtserver.swaggerhub.com',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            $request = 'vanessakovalsky/BoardGames/1.0.0/user/login?username='.$var['login'].'&password='.$var['password'];
            $response = $client->request('GET', $request);
            if ($response->getStatusCode() == 200){
                return 'test';
            } else {
                return 'Login ou mdp incorrecte';
            }
        }
        function aLaPermission(){

        }
        function lister(){
            
        }
        function voir(){

        }     
    }
    
?>