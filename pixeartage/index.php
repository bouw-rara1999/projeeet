<?php 





require_once __DIR__ . './src/controllers/homePageCont.php';
require_once './src/models/class/user.class.php';

$user = new User();

// Vérifier si la variable POST existe et qu'elle contient les informations nécessaires
if (!empty($_POST['currentpseudo']) && !empty($_POST['newpseudo'])) {
    $user->modif();
}



if (!empty($_GET) && isset($_GET)) {
    if (!empty($_GET['action'] === 'login')){
        require_once __DIR__ . './src/controllers/loginCont.php';
        getViewLogin();
    } else if ( !empty($_GET['action'] === 'register')){
        require_once __DIR__ . './src/controllers/registerCont.php';
        getViewRegister();} 
        else if ( !empty($_GET['action'] === 'modif')){
    require_once __DIR__ . './src/controllers/modif.php';
    modif();
}
    }


    
    // } else if ( $_GET['action'] == 'askRegister'){
    //     verifInscription ();
    
    // }
//   if (!empty($_GET['action'] === 'register')) {
//     registerView();
//     // if($_POST){
//       // var_dump($_POST);
//       // var_dump($errors);
//     // }
//   } else if (!empty($_GET['action'] === 'login')){
//     loginView();
//   } else if(!empty($_GET['action'] === 'pictures')){
//     picturesView();
//   } else if ($_GET['action'] === 'videos'){
//     videosView();
//   }


 else {
  getViewHomePage();
}