<?php
$auth = 0;
include 'lib/include.php'; 



if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $db->quote( $_POST['username']);
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM user WHERE username=$username AND password='$password'";
    $select = $db->query($sql);
    if($select->rowCount() > 0){
        $_SESSION['Auth'] = $select->fetch();
        setFlash('Vous êtes connecté');
        header('Location:' . WEBROOT . 'admin/index.php');
        die();
    }
}
include 'partials/header.php';
?>
<section id="login">
    <div class="container">
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <?php echo input('username'); ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-default">Se connecter</button>
        </form>
    </div>
</section>
<?php //include 'lib/debug.php'; ?>
<?php //include 'partials/footer.php'; ?>

