<?php
    namespace Controller;

    use Session\Session;
    use Controller\VisiteurController;
    use Controller\JeuController;
    use Controller\AdminController;

    class RouteController
    {
        function route($method, $action, $session){
            if($method == 'POST'){
                switch ($action) {
                    case 'Deconnexion':
                        ob_start();
                        $content = VisiteurController::deconnexion($session);
                        $content = ob_get_clean();
                        return $content;
                    case 'Connexion':
                        ob_start();
                        $content = VisiteurController::connexion($session);
                        $content = ob_get_clean();
                        return $content;
                    case 'AjoutJeu':
                        $jeu = new JeuController();
                        ob_start();
                        $content = $jeu->ajouterJeu();
                        $content = ob_get_clean();
                        return $content;
                    case 'AjoutUtilisateur':
                        $user = new UtilisateurController($session);
                        ob_start();
                        $content = $user->ajouterUtilisateur();
                        $content = ob_get_clean();
                        return $content;
                    case 'ModificationUtilisateur':
                        $user = new UtilisateurController($session);
                        ob_start();
                        $content = $user->modifierUtilisateur();
                        $content = ob_get_clean();
                        return $content;
                    case 'ModificationJeu':
                        $user = new JeuController();
                        ob_start();
                        $content = $user->modifierJeu();
                        $content = ob_get_clean();
                        return $content;
                    default:
                        return 'Erreur !';
                }
            }else{
                switch ($action) {
                    case 'Deconnexion':
                        ob_start();
                        $content = VisiteurController::deconnexion($session);
                        $content = ob_get_clean();
                        return $content;
                    case 'Connexion':
                        ob_start();
                        $content = VisiteurController::connexion($session);
                        $content = ob_get_clean();
                        return $content;
                    case 'AjoutJeu':
                        $jeu = new JeuController();
                        ob_start();
                        $content = $jeu->ajouter();
                        $content = ob_get_clean();
                        return $content;
                    case 'ListJeux':
                        $jeu = new JeuController();
                        ob_start();
                        $content = $jeu->lister();
                        $content = ob_get_clean();
                        return $content;
                    case 'ListMembre':
                        $user = new VisiteurController($session);
                        // ob_start();
                        $content = $user->lister();
                        //$content = ob_get_clean();
                        return $content;
                    case 'ModificationUtilisateur':
                        $user = new AdminController($session);
                        //ob_start();
                        $content = $user->modifier();
                        //$content = ob_get_clean();
                        return $content;
                    case 'ModificationJeu':
                        $user = new JeuController();
                        //ob_start();
                        $content = $user->modifier();
                        //$content = ob_get_clean();
                        return $content;
                    case 'AjoutUtilisateur':
                        $user = new AdminController($session);
                        ob_start();
                        $content = $user->ajouter();
                        $content = ob_get_clean();
                        return $content;
                    case 'SupprimerUtilisateur':
                        $user = new AdminController($session);
                        //ob_start();
                        $content = $user->supprimer();
                        //$content = ob_get_clean();
                        return $content;
                    case 'SupprimerJeu':
                        $user = new JeuController();
                        //ob_start();
                        $content = $user->supprimer();
                        //$content = ob_get_clean();
                        return $content;
                    }
                }
            }
        }
    
    
