<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="../../global/accueil/index.php">accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Variables
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php for($i=1;$i <= 20;$i++) : ?>
                <a class="dropdown-item" href="../../1-variables/exo<?=$i?>/index.php">exo<?=$i?></a>
            <?php endfor; ?>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Conditions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../2-conditions/exo1/index.php">exo1</a>
                <a class="dropdown-item" href="../../2-conditions/exo2/index.php">exo2</a>

            </div>
         
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tableaux
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../3-tableaux/exo1/index.php">exo1</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Boucles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../4-boucles/exo1/index.php">exo1</a>
            </div>
        </li>


               <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fonctions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php for($i=1;$i <= 13;$i++) : ?>
                <a class="dropdown-item" href="../../6-fonctions/exo<?=$i?>/index.php">exo<?=$i?></a>
            <?php endfor; ?>
            </div>
        </li>




         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Formulaires
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php for($i=1;$i <= 6;$i++) : ?>
                <a class="dropdown-item" href="../../7-formulaires/exo<?=$i?>/index.php">exo<?=$i?></a>
            <?php endfor; ?>
            </div>
        </li>



        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cas pratiques
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../5-cas-pratique/exo1/index.php">exo1</a>
                <a class="dropdown-item" href="../../5-cas-pratique/exo2">exo2</a>
            </div>
        </li>
        
    </ul>
    </div>
</nav>