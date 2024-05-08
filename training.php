<?php
    $fullname = "Franck Monge";
    echo "Bonjour {$fullname} et bienvenue sur le site !";
?>
<br><br>
<?php
$isEnabled = true;

if ($isEnabled === true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
else {
    echo "Accès refusé ❌ ";
}
?>
<br><br>
<?php
$isAllowedToEnter = true;

if ($isAllowedToEnter) {
    echo "Bienvenue petit nouveau. :o)";
}
else {
    echo "T'as pas le droit d'entrer !";
}
?>
<br><br>
<?php
$isEnabled = true;
$isOwner = false;

if ($isEnabled && $isOwner) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
?>
<br><br>
<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

<h1>Liste des recettes à base de poulet</h1>

<?php endif; ?><!-- Ni le ";" après le endif -->
<br><br>
<?php
$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Il faudra revoir tout le cours !";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu dois réviser plusieurs modules";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Il te manque quelques révisions pour atteindre la moyenne ";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
<br><br>
<?php
$recipes = [
    ['Poulet coco','Franck Monge'],
    ['Gratin de courgettes', 'Eric Houdard'],
    ['Nuggets aux corns flakes', 'Olivier Astesana'],
    ['Pot au feu', 'Marlène Cavatore'],
];



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bonnes recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines=0; $lines <=3 ; $lines++): ?>
            <li>
                <?php echo $recipes[$lines][0]. ' (' . $recipes[$lines][1] . ')'; ?>
            </li>
            <?php endfor; ?>
    </ul>
    
</body>
</html>

<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
</head>
<body>
<div class="container">
    <h1>Affichage des recettes</h1>
    <!-- Boucle sur les recettes -->
    <?php foreach ($recipes as $recipe) : ?>
        <!-- si la clé existe et a pour valeur "vrai", on affiche -->
        <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo $recipe['author']; ?></i>
            </article>

        <?php endif; ?>
    <?php endforeach ?>
    <br><br>
</div>
</body>
</html>

<?php
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saussice toulousaine';
$length = strlen($recipe);


echo 'La phrase suivante comporte '. $length . ' caractères :' . PHP_EOL . $recipe;
?>
<br><br>
<?php
echo str_replace('c','C','Le cassoulet, c\'est très bon');
?>
<br><br>
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
);
?>
<br><br>
<?php
// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . ' et il est ' . $hour. ' h ' . $minute . ' !';
?>
<br><br>
<?php
// Enregistrons les informations de date dans des variables
$date = date('d/m/Y');
$time = date('H \h i');

// Maintenant on peut afficher ce qu'on a recueilli
echo "Bonjour ! Nous sommes le {$date} et il est {$time}";
?>
<br><br>
<?php

function isValidRecipe(array $recipe) : bool
{
    if(array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}
// 2 exemples
$romanSalad = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => true,
];

$sushis = [
    'title' => 'Sushis',
    'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => false,
];


// Répond true !
$isRomandSaladValid = isValidRecipe($romanSalad);

// Répond false !
$isSushisValid = isValidRecipe($sushis);






function getRecipes(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}

// construire l'affichage HTML des recettes
foreach(getRecipes($recipes) as $recipe) {
    // echo $recipe['title'] .. 
}

function displayAuthor(string $authorEmail, array $users): string
{
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . '(' . $user['age'] . ' ans)';
        }
    }
}



?>

<?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => true,
    ],
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recettes de cuisine</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body>
<div class="container">
    <h1>Liste des recettes de cuisine</h1>

    <?php foreach (getRecipes($recipes) as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
    <?php endforeach ?>
</div>
</body>
</html>