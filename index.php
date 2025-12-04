<?php
$titre = "Pitcherln";
$salut = "Salut ";
?>
<!DOCTYPE html>
<html>
    <style>
        body{
            background-color: #b72323ff;
            border-radius: 6px;
        }
        .huch{
            color: #62cb5eff;
            font-size: 4rem;
            font-weight: bold;
            font-family: "Goudy Stout", sans-serif;
        }
        .button_ok{
            color: #741f1fff;
            border-radius: 6px;
            font-family: "Arial Black", sans-serif

        }
        .input_1{
            color: #62cb5eff;
            border-radius: 6px;
            font-family: "Arial Black", sans-serif

        }


    </style>
    <title><?php echo $titre ?></title>
    <body>
        <h1 class="huch"><?php echo $titre ?></h1>
        <form method="POST">
        <input type="text" name="nom" placeholder="Entrez votre nom" class="input_1">
        <button type="submit" class="button_ok">Ok</button>
    </form>

    </body>
    
</html>
<?php
if (isset($_POST['nom'])){
    $nom = $_POST['nom'];
    echo "$salut $nom";
    include 'alert.php';
    

}
?>