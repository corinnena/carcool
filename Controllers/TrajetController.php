<?php
namespace App\Controllers;
use App\Core\Form;
use App\Models\Trajet;


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


class TrajetController extends Controller
{
    public function index(){
        echo 'Ici sera la liste des trajets';
    }
}

/*class TrajetController extends Controller
{
    public function index(){
        // On instancie le modèle
        $model = new Trajet;
    
        // On récupère les données
        $annonces = $model->findAll();
        
        $this->render('trajets/index', compact('trajets'));
    }
    /**
 * Méthode permettant d'afficher un article à partir de son slug
 *
 * @param int $id
 * @return void
 */
//public function lire(int $id){
    // On instancie le modèle
    //$model = new TrajetController;

    // On récupère les données
    //$annonce = $model->find($id);

    //$this->render('trajets/lire', compact('trajet'));
//}
//}
        // On instancie le formulaire         NOUVEAU TRAJET
//$formulaire = new Form;

// On ajoute chacune des parties qui nous intéressent
/*$formulaire->debutForm()
    ->ajoutLabelFor('nbplaces', 'Nombre de places')
    ->ajoutInput('number', 'nbplaces', ['id' => 'nbplaces', 'class' => 'form-control'])
    ->ajoutLabelFor('password', 'Mot de passe')
    ->ajoutInput('password', 'password', ['id' => 'password', 'class' => 'form-control'])
    ->ajoutBouton('Me connecter', ['class' => 'btn btn-primary'])
    ->finForm()
;*/

// On envoie le formulaire à la vue en utilisant notre méthode "create"
//$this->render('users/login', ['loginForm' => $formulaire->create()]);

//?>
<!--div class="container">
    <form>
        

        <label for="exampleDataList" class="form-label">Type</label>
            <select class="form-select form-control-sm" list="datalistOptions" id="exampleDataList" >
            <datalist id="datalistOptions">
            <option>--Choisissez dans la liste--</option>
              <option>aller</option>
              <option>retour</option>
              <option>aller-retour</option>
              
            </select>

            <label for="exampleDataList" class="form-label">Fréquence</label>
            <select class="form-select form-control-sm" list="datalistOptions" id="exampleDataList" >
           
            <option>--Choisissez dans la liste--</option>
              <option>quotidien</option>
              <option>exceptionnel</option>
              
            </select>

            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1">

            <label for="exampleDataList" class="form-label">Confort</label>
            <select class="form-select form-control-sm" list="datalistOptions" id="exampleDataList" >
            
            <option>--Choisissez dans la liste--</option>
              <option>supérieur</option>
              <option>normal</option>
            </select>

              <label for="exampleFormControlInput1" class="form-label">Heure de départ</label>
            <input type="time" class="form-control form-control-sm" id="exampleFormControlInput1">

            <label for="exampleDataList" class="form-label">Confort</label>
            <select class="form-select form-control-sm" list="datalistOptions" id="exampleDataList" >
       
            <option>--Choisissez dans la liste--</option>
              <option>ville 1</option>
              <option>ville 2</option>
                <option>ville 3</option>
                </select>


    </form>
    <div class="container text-center">
        <button type="button" class="btn btn-primary">Insérer</button>
    </div>

  </div-->
