<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <!-- Affichage par rapport à la taille de l'écran -->
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>Formulaire de contact</title>

    <!-- Polices Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Feuilles de style personnalisées -->
    <link rel="stylesheet" href="code/css/style.css">
    <link rel="stylesheet" href="code/css/responsive.css">
</head>

    <title>Validation pour ajouter un contact</title>

    <?php
//connexion à la bdd
$servername = "localhost"; $username = "root"; $password = "root";
$dbname = "artisan-php";

// Créer une connexion à la base de données
$conn = new mysqli("localhost", "root", "root", "artisan-php");

// Vérifier la connexion
if ($conn->connect_error) {
die("Echec de la connexion: " . $conn->connect_error);
}

//Récupérer les données du formulaire de contact
$name = $_POST['name']; $email = $_POST['email']; $message = $_POST['message'];

// Préparer et exécuter la requête SQL pour insérer les données
$sql = "INSERT INTO Contact (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
echo "Votre message a été envoyé avec succès.";
} else {
echo "Une erreur s'est produite lors de l'envoi de votre message: " .
$conn->error; }

// Redirection vers la page 'thank you'
header('Location: thankyou.php');  

// Fermer la connexion à la base de données
$conn->close(); 

?>


       

