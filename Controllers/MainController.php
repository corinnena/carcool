<?php
namespace App\Controllers;
abstract class Controller{
    /**
     * Afficher une vue
     *
     * @param string $fichier
     * @param array $data
     * @return void
     */
    public function render(string $fichier, array $data = []){
        // Récupère les données et les extrait sous forme de variables
        extract($data);
    
        // Crée le chemin et inclut le fichier de vue
        require_once(ROOT.'/Views/'.$fichier.'.php');
    }
    
    }

class MainController extends Controller
{
    public function index()
    {
        echo 'Vous êtes sur la page d\'accueil';
    }

    /**
 * Afficher une vue
 *
 * @param string $fichier
 * @param array $data
 * @return void
 */
public function render(string $fichier, array $data = []){
    // Récupère les données et les extrait sous forme de variables
    extract($data);

    // On démarre le buffer de sortie
    ob_start();

    // Crée le chemin et inclut le fichier de vue
    require_once(ROOT.'/Views/'.$fichier.'.php');

    // On stocke le contenu dans $content
    $content = ob_get_clean();

    // On fabrique le "template"
    require_once(ROOT.'/Views/default.php');
}
}