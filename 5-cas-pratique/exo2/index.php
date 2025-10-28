<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Calculatrice"; //Mettre le nom du titre de la page que vous voulez
?>




<?php
// index.php - formulaire de calcul simple

$result = null;
$error = '';
$a_raw = $_POST['a'] ?? '';
$b_raw = $_POST['b'] ?? '';
$op = $_POST['op'] ?? 'add';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($a_raw === '' || $b_raw === '') {
        $error = 'Veuillez fournir les deux nombres.';
    } elseif (!is_numeric($a_raw) || !is_numeric($b_raw)) {
        $error = 'Entrez des nombres valides.';
    } else {
        $a = (float) $a_raw;
        $b = (float) $b_raw;

        switch ($op) {
            case 'add':
                $result = $a + $b;
                break;
            case 'sub':
                $result = $a - $b;
                break;
            case 'mul':
                $result = $a * $b;
                break;
            case 'div':
                if ($b == 0.0) {
                    $error = 'Division par zéro impossible.';
                } else {
                    $result = $a / $b;
                }
                break;
            default:
                $error = 'Opération inconnue.';
        }
    }
}

// helper to escape output
function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Calculatrice simple</title>
    <link rel="stylesheet" href="calculatrice.css">
</head>
<body>
    <div class="calculatriceContainer">


<div class="formulaire">
    <div class="formulaireContent">
        <h1>Calculatrice</h1>
      
        <form method="post" action="">
              <div class="calculatriceElement">
        <label class="rounded-label">
            <!-- Premier nombre : -->
            <input type="number" name="a" step="any" value="<?php echo e($a_raw); ?>">
        </label>
      

            <label class="operation">
            <!-- Opération : -->
            <select name="op">
                <option value="add" <?php echo ($op === 'add') ? 'selected' : ''; ?>>+</option>
                <option value="sub" <?php echo ($op === 'sub') ? 'selected' : ''; ?>>-</option>
                <option value="mul" <?php echo ($op === 'mul') ? 'selected' : ''; ?>>×</option>
                <option value="div" <?php echo ($op === 'div') ? 'selected' : ''; ?>>÷</option>
            </select>
        </label>
   
        <label>
            <!-- Deuxième nombre : -->
            <input type="number" name="b" step="any" value="<?php echo e($b_raw); ?>">
        </label>
   
     </div>
        <button type="submit">check result</button>
    </form>

        <?php if ($error): ?>
        <p style="color:red;"><?php echo e($error); ?></p>
    <?php endif; ?>

    <?php if ($result !== null && $error === ''): ?>
        <p class="result"> <strong><?php echo e($result); ?></strong></p>
    <?php endif; ?>
    </div>
    </div>
</div>
</body>
</html>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>