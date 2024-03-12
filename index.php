
<!-- Controleren op binnenkomendende variabelen in de GET-en POST-array. -->
<?php
    $voornaam = $achternaam = $bestelling = "";
    
    if(!empty($_GET)) {
        $voornaam = $_GET['voornaam'];
        $achternaam = $_GET['achternaam'];
        $bestelling = intval($_GET['bestelling']);
    }
    
    if (!empty($_POST)) {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $bestelling = intval($_POST['bestelling']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop1Get&Post</title>
    <link rel="stylesheet" href="./assets/css/style.css">




</head>
<body>



<div class="container">
<h2>Bestelling Formulier</h2>
<form action="" method="get">
 <!-- Voornaam -->
<label for="voornaam">Voornaam:</label>
<input type="text" name="voornaam" id="voornaam" placeholder="Vul hier je voornaam in" value="<?php echo $voornaam; ?>">

<!-- Achternaam -->
<label for="achternaam">Achternaam:</label>
<input type="text" name="achternaam" id="achternaam" placeholder="Vul hier je achternaam in" value="<?php echo $achternaam; ?>">

<!-- Bestelling  -->
<label for="bestelling">Bestelling:</label>
<select name="bestelling">
    <option value="" <?php echo ($bestelling === '' ? 'selected' : ''); ?>>Selecteer bestelling</option>
    <option value="1" <?php echo ($bestelling === 1 ? 'selected' : ''); ?>>Avocado</option>
    <option value="2" <?php echo ($bestelling === 2 ? 'selected' : ''); ?>>Paprika</option>
    <option value="3" <?php echo ($bestelling === 3 ? 'selected' : ''); ?>>Rucola</option>
 </select>
 <!-- Submit button -->
 <input type="submit" value="Submit">
 </form>

<!-- Tonen van output -->
 <div class="output">
            <?php
                if (!empty($_GET) || !empty($_POST)) {
                    echo "<h2>Bestelling Gegevens</h2>";
                    echo "<p>Voornaam: $voornaam</p>";
                    echo "<p>Achternaam: $achternaam</p>";
                    echo "<p>Bestelling: ";
                    switch ($bestelling) {
                        case 1:
                            echo "Avocado";
                            echo "<img src='./assets/images/avocado.png' alt='avocado'>";
                            break;
                        case 2:
                            echo "Paprika";
                            echo "<img src='./assets/images/paprika.png' alt='paprika'>";
                            break;
                        case 3:
                            echo "Rucola";
                            echo "<img src='./assets/images/rucola.png' alt='rucola'>";
                            break;
                        default:
                            echo "Geen bestelling geselecteerd";
                    }
                    echo "</p>";
                }
            ?>
        </div>

</body>
</html>