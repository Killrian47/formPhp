<p>
<?php
$errors= [];



if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['u_name']) || trim($_POST['u_name'] === '')) {
        $errors[] = "1stname is mandatory";

    } if (!isset($_POST['u_lastname']) || trim($_POST['u_lastname']) === '') {
        $errors[] = "Lastname is mandatory";
        
    } if (!isset($_POST['u_email']) || trim($_POST['u_email']) === ''  || !filter_var($_POST['u_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[]= "Your email is mandatory";
        
    } if (!isset($_POST['u_phone']) || trim($_POST['u_phone']) === '' ) {
        $errors[]= "Your phone ism andatory";
       
    } foreach($errors as $error) { 
        echo $error . "<br>";
    
    } if (empty($errors)) {
         
            
            echo "Merci " . $_POST['u_name'] . " " . $_POST['u_lastname'] . " de nous avoir contacté à propos de " . $_POST['theme'] . "." . "<br>" .
    
            "Un de nos conseillers vous contactera soit à l’adresse " . $_POST['u_email'] . " ou par téléphone au " . $_POST['u_phone']  . " dans les plus brefs délais pour traiter votre demande :" . "<br>" .
            
            $_POST['u_message'];
    }
};

?>
</p>