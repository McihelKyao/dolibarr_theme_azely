# dolibarr_theme_azely

- Thème azely pour dolibarr 
  ---------------------------

 -- Contact : ngilbert2@gmail.com

 -- Version compatible dolibarr : 3.8

 -- Fork du thème oblyon (version Version 1.6 - https://github.com/aspangaro/dolibarr_theme_oblyon )

 -- licence GPLv3 


- Installation
  --------------

 -- Copie du répertoire azely dans /htdocs/theme/


- Fichiers du menu :
 ------------------

 -- Copie des fichiers ci-dessous "menus" dans /htdocs/core/menus/standard/

    azely.lib.php et azely_menu.php


- Bouton qui cache/affiche le menu vertical :
 -------------------------------------------

 -- Basé sur une astuce fournit par le 18info sur le forum de dolibarr

 ( http://www.dolibarr.fr/forum/11-suggestionsnouvelles-fonctionnalites/52771-bouton-qui-cache-affiche-le-menu-vertical-azely )

 -- Bout de code ( include './theme/azely/showhide.php'; ) est à placer dans /htdocs/main.inc.php juste au dessus de ( ~ ligne 1728 ):

 print "\n";

 print '<!-- Begin right area -->'."\n";



