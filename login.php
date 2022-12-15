<?php

$error = null;
$password = '$2y$10$qChNtfS/HhpcAnVFlISS1uwsowytPLAJUbAS67nDTxT6kAC2BgZ42';

if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'John' && password_verify($_POST['motdepasse'], $password)) {
        session_start();
        $_SESSION['connecte'] = 1;
        header('location: /grafikart/dashboard.php');
        exit();
    } else {
        $error = "Identifiants incorrects";
    }
}

require_once 'functions/auth.php';

if(is_connected()){
    header('location: /grafikart/dashboard.php');
    exit();
}


require_once 'header.php';

?>

<?php if ($error): ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif; ?>

<form action="" method="post">
    <div class="form-group mb-4">
        <input class="form-control" type="text" name="pseudo" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group mb-4">
        <input class="form-control" type="password" name="motdepasse" placeholder="Votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php require_once 'footer.php'; ?>
