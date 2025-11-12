<!-- <?php ob_start(); 
$titre = "Exo 2 : Calculatrice";
?>
 -->



<?php
// index.php - formulaire de calcul simple

$result = null;
$error = '';
$a_raw = $_POST['a'] ?? '';
$b_raw = $_POST['b'] ?? '';
$op = $_POST['op'] ?? 'add';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($a_raw === '' || $b_raw === '') {
        $error = 'Faut 2 nombre pour calculer néné !';
    } elseif (!is_numeric($a_raw) || !is_numeric($b_raw)) {
        $error = 'Entre des nombres nénés !';
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
                    $error = 'On peut pas diviser par 0 néné !';
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
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
    <h1>Calculatrice</h1>
    <button onclick="toggleMode()">Light mode</button>

    <div class="calculatrice">
    <form method="post" action="">
        <label class="number">
            <label for="">1er nombre</label>
            <input type="number" name="a" step="any" value="<?php echo e($a_raw); ?>">
        </label>
 
    <div class="radio-cards">
        <label class="card">
            <input type="radio" name="op" value="add" <?php echo ($op === 'add') ? 'checked' : ''; ?>>
            <div class="content">
                <span class="title">Addition</span>
                <span class="icon"><i class="fa-solid fa-plus"></i></span>
            </div>
        </label>

        <label class="card">
            <input type="radio" name="op" value="sub" <?php echo ($op === 'sub') ? 'checked' : ''; ?>>
            <div class="content">
                <span class="title">Soustraction</span>
                <span class="icon"><i class="fa-solid fa-minus"></i></span>
            </div>
        </label>

        <label class="card">
            <input type="radio" name="op" value="mul" <?php echo ($op === 'mul') ? 'checked' : ''; ?>>
            <div class="content">
                <span class="title">Multiplication</span>
                <span class="icon"><i class="fa-solid fa-xmark"></i></span>
            </div>
        </label>

        <label class="card">
            <input type="radio" name="op" value="div" <?php echo ($op === 'div') ? 'checked' : ''; ?>>
            <div class="content">
                <span class="title">Division</span>
                <span class="icon"><i class="fa-solid fa-divide"></i></span>
            </div>
        </label>
    </div>

        <label class="number">
            <label for="">2eme nombre</label>
            <input type="number" name="b" step="any" value="<?php echo e($b_raw); ?>">
        </label>

        <button type="submit" id="submit">check result</button>
    </form>

    <?php if ($error): ?>
        <p class="error"><?php echo e($error); ?></p>
    <?php endif; ?>

    <?php if ($result !== null && $error === ''): ?>
        <p class="result"><strong><?php echo e($result); ?></strong></p>
    <?php endif; ?>
    </div>


</section>
    <script>
        function toggleMode() {
            document.body.classList.toggle("light");
        }
    </script>
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