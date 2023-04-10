<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
    if(empty($_SESSION ['usuario'])){ // si hay un usuario logeado me vas a manadar a esta sesion
        header("Location:login.php");
        exit();
    }

?>


<style>
    #welcome-message {
        background: linear-gradient(to bottom right,#EFEFEF, #bac6d6);
        padding: 10px;
        border-radius: 10px;
        box-shadow: 1px 1px 3px #888888;
    }
</style>

<h1 id="welcome-message" class="text-center mt-4 animate__animated animate__bounceInDown">Bienvenido <?= $_SESSION['usuario']?></h1>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    setTimeout(function(){
        $("#welcome-message").addClass("animate__fadeOutUp");
        setTimeout(function(){
            $("#welcome-message").remove();
        }, 1000);
    }, 2000);
</script>

<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");

?>