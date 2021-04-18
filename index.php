<?php


function easy()
{
    echo "\033[31m Easy\033[0m \n";
    readline("\e[34m Vous voici sur le menu d'accueil du jeu des Allumettes en mode facile, pour commencer appuyer sur entrer. Pour quitter Ctrl + C (--help pour voir vos possibilitées)\e[0m ");
    do {
        $nb_stick = intval(readline("Veuillez entrer un nombre d'allumette entre 11 et 31\e[0m"));
    } while ($nb_stick < 11 || $nb_stick > 31);
    $stick = str_repeat("|", $nb_stick);
    echo $stick . PHP_EOL;
    if($nb_stick >= 1)
    {
        while($nb_stick >= 1)
        {
            $player1 = "Joueur";
            $ia = "L'IA";
            $player = readline("Au tour du Joueur : ");
            if(intval($player >= 4) || intval($player < 1) || intval($player) > $nb_stick)
            {
                do {
                    echo "Erreur : veuillez entrez un nombre positif entre 1 et 3!\n";
                    $player = readline("Au tour du Joueur : ");
                } while(intval($player) >= 4 || intval($player) < 1 || intval($player) > $nb_stick);
            }

            $matches = intval($player);
            echo "Le Joueur a supprimé $matches allumette \n";
            $stick = str_repeat("|", $nb_stick - $matches);
            $nb_stick = $nb_stick - $matches;
            echo $stick . PHP_EOL;
            check_win($nb_stick, $player1);
            echo "Au tour de L'IA ... \n";
            if($nb_stick >= 3)
                $ia_matches = random_int(1, 3);
            else
                $ia_matches = 1;
            echo "L'IA  à supprimer $ia_matches allumettes \n";
            $stick = str_repeat("|", $nb_stick - $ia_matches);
            $nb_stick = $nb_stick - $ia_matches;
            echo $stick . PHP_EOL;
            check_win($nb_stick, $ia);
            echo "$nb_stick alumettes restantes". PHP_EOL;
        }
    }
}

function normal()
{
    echo "\033[31m Normal\033[0m \n";
    readline("\e[34m Vous voici sur le menu d'accueil du jeu des Allumettes en mode normal, pour commencer appuyer sur entrer. Pour quitter Ctrl + C (--help pour voir vos possibilitées)\e[0m ");
    do {
        $nb_stick = intval(readline("Veuillez entrer un nombre d'allumettes entre 11 et 31 \n"));
    } while ($nb_stick < 11 || $nb_stick > 31);
    $stick = str_repeat("|", $nb_stick);
    echo $stick . PHP_EOL;
    if($nb_stick >= 1)
    {
        while($nb_stick >= 1)
        {
            $player1 = "Joueur";
            $ia = "L'IA";
            $player = readline("Au tour du Joueur : ");
            if(intval($player >= 4) || intval($player < 1) || intval($player) > $nb_stick)
            {
                do {
                    echo "Erreur : veuillez entrez un nombre positif entre 1 et 3!\n";
                    $player = readline("Au tour du Joueur : ");
                } while(intval($player) >= 4 || intval($player) < 1 || intval($player) > $nb_stick);
            }

            $matches = intval($player);
            echo "Le Joueur a supprimé $matches allumette \n";
            $stick = str_repeat("|", $nb_stick - $matches);
            $nb_stick = $nb_stick - $matches;
            echo $stick . PHP_EOL;
            check_win($nb_stick, $player1);
            echo "Au tour de L'IA ... \n";
            if($nb_stick == 6 || $nb_stick == 10)
                $ia_matches = 1;
            elseif($nb_stick == 7 || $nb_stick == 3)
                $ia_matches = 2;
            else
                $ia_matches = 1;
            echo "L'IA  à supprimer $ia_matches allumette \n";
            $stick = str_repeat("|", $nb_stick - $ia_matches);
            $nb_stick = $nb_stick - $ia_matches;
            echo $stick . PHP_EOL;
            check_win($nb_stick, $ia);
            echo "$nb_stick alumettes restantes". PHP_EOL;
        }
    }
}

function hard()
{
    echo "\033[31m Hard\033[0m \n";
    readline("\e[34m Vous voici sur le menu d'accueil du jeu des Allumettes en mode difficile, pour commencer appuyer sur entrer. Pour quitter Ctrl + C (--help pour voir vos possibilitées)\e[0m ");

    do {
        $nb_stick = intval(readline("Veuillez entrer un nombre d'allumette entre 11 et 31 \n"));
    } while ($nb_stick < 11 || $nb_stick > 31);
    $stick = str_repeat("|", $nb_stick);
    echo $stick . PHP_EOL;
    if($nb_stick >= 1)
    {
        while($nb_stick >= 1)
        {
            $player1 = "Joueur";
            $ia = "L'IA";
            $player = readline("Au tour du Joueur : ");
            if(intval($player >= 4) || intval($player < 1) || intval($player) > $nb_stick)
            {
                do {
                    echo "Erreur : veuillez entrez un nombre positif entre 1 et 3!\n";
                    $player = readline("Au tour du Joueur : ");
                } while(intval($player) >= 4 || intval($player) < 1 || intval($player) > $nb_stick);
            }

            $matches = intval($player);
            echo "Le Joueur a supprimé $matches allumette \n";
            $stick = str_repeat("|", $nb_stick - $matches);
            $nb_stick = $nb_stick - $matches;
            echo $stick . PHP_EOL;
            check_win($nb_stick, $player1);
            echo "Au tour de L'IA ... \n";
            if ($nb_stick > 2 && $nb_stick == 8)
                $ia_matches = 3;
            elseif($nb_stick > 2 && $nb_stick != 9 && $nb_stick != 5 && $nb_stick != 10)
                $ia_matches = hard_ia(4, $matches);
            else
                $ia_matches = 1;
            echo "L'IA  à supprimer $ia_matches allumette \n";
            $stick = str_repeat("|", $nb_stick - $ia_matches);
            $nb_stick = $nb_stick - $ia_matches;
            echo $stick . PHP_EOL;
            check_win($nb_stick, $ia);
            echo "$nb_stick alumettes restantes". PHP_EOL;
        }
    }
}

function versus()
{
     echo "\033[31m Versus\033[0m \n";
    readline("\e[34m Vous voici sur le menu d'accueil du jeu des Allumettes en versus, pour commencer appuyer sur entrer. Pour quitter Ctrl + C (--help pour voir vos possibilitées)\e[0m ");
    do {
        $nb_stick = intval(readline("Veuillez entrer un nombre d'allumette entre 11 et 31 \n"));
    } while ($nb_stick < 11 || $nb_stick > 31);
    $stick = str_repeat("|", $nb_stick);
    echo $stick . PHP_EOL;
    if($nb_stick >= 1)
    {
        while($nb_stick >= 1)
        {
            $player1 = "Joueur 1";
            $player = readline("Au tour du Joueur 1 : ");
            if(intval($player >= 4) || intval($player < 1) || intval($player) > $nb_stick)
            {
                do {
                    echo "Erreur : veuillez entrez un nombre positif entre 1 et 3!\n";
                    $player = readline("Au tour du Joueur  1 : ");
                } while(intval($player) >= 4 || intval($player) < 1 || intval($player) > $nb_stick);
            }

            $matches = intval($player);
            echo "Le Joueur1 a supprimé $matches allumette \n";
            $stick = str_repeat("|", $nb_stick - $matches);
            $nb_stick = $nb_stick - $matches;
            echo $stick . PHP_EOL;
            echo "$nb_stick alumettes restantes". PHP_EOL;
            check_win($nb_stick, $player1);
            $player2 = "Joueur 2";
            $player2 = intval(readline("Au tour du Joueur 2 : "));
            if(intval($player2) >= 4 || intval($player2) < 1 || intval($player2) > $nb_stick)
            {
                do {
                    echo "Erreur : veuillez entrez un nombre positif entre 1 et 3!\n";
                    $player2 = readline("Au tour du Joueur2 : ");
                } while(intval($player2) >= 4 || intval($player2) < 1 || intval($player2) > $nb_stick);
            }
            echo "Le Joueur 2 à supprimer $player2 allumette \n";
            $stick = str_repeat("|", $nb_stick - $player2);
            $nb_stick = $nb_stick - $player2;
            echo $stick . PHP_EOL;
            check_win($nb_stick, $player2);
            echo "$nb_stick alumettes restantes". PHP_EOL;
        }
    }
}

function hard_ia($a, $b)
{
    return $a - $b;
}

function check_win($nb_stick, $winner)
{
    if($nb_stick == 0)
    {
        die("$winner loose");
    }
    elseif($nb_stick < 0)
    {
        die("$winner loose");
    }
}

function man()
{
    echo "\033[31m Ajoutez ces différentes difficultées après le fichier (php index.php --normal) par exemple.\033[0m\n
          \e[34m--easy ou rien pour lancer le mode facile.\n
          --normal pour lancer le mode normal.\n
          --hard pour lancer le mode difficile.\n
          --versus pour lancer le mode versus.\e[0m\n";
}

function main($argv )
{
    if(!isset($argv[1]) || $argv[1] == "--easy")
        easy();
    elseif($argv[1] == "--help")
        man();
    elseif($argv[1] == "--normal")
        normal();
    elseif($argv[1] == "--hard")
        hard();
    elseif($argv[1] == "--versus")
        versus();
    else
        easy();
}

main($argv);

?>