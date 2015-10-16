<?php

/*
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

// Bouton cacher/afficher menu vertical gauche
    	if ($conf->theme == "azely")
		{
			print '<script type="text/javascript">

			function showHide() {
				$(\'#id-left\').slideToggle(310);
				$(\'#id-right\').css(\'width\', \'100%\');
				$(\'.fiche\').css(\'width\', \'auto\');
			}

			$(document).ready(function () {
							
				$(\'#swap-img\').attr(\'title\', \'Cacher le menu\');
				$(window).resize(function(){
					var classtiptip = document.getElementById("swap-img").className;
					if (classtiptip == "classfortooltip open") {
						var widthidleft = $("#id-left").width();
						console.log(classtiptip);
						if (widthidleft > 63) {
							$(\'#id-right\').css(\'width\', \'90% \');
						} else {
							$(\'#id-right\').css(\'width\', \'96% \');
						}
					} else {
						$(\'#id-right\').css(\'width\', \'100% \');
					}
				});
			        $(\'img#swap-img\').click(function () {
			        if(!$(this).hasClass("open"))
			        {
			            $(this).attr("src","'.DOL_URL_ROOT.'/theme/azely/img/hide.png");
			            $(this).addClass("open");
			            $(\'#tiptip_content\').replaceWith(\'<div id="tiptip_content" title="Cacher le menu">Cacher le menu</div>\');
				    setTimeout(function(){
					var widthidleft = $("#id-left").width();
					if (widthidleft > 63 ) {
						$(\'#id-right\').css(\'width\', \'90% \');
					} else {
						$(\'#id-right\').css(\'width\', \'96% \');
					}
				    }, 300);

			        } else {
			            $(this).delay(250).queue(function(next){ $(this).attr("src","'.DOL_URL_ROOT.'/theme/azely/img/show.png"); next();})   
			            $(this).removeClass("open");
			            setTimeout(function(){
			            	$(\'#tiptip_content\').replaceWith(\'<div id="tiptip_content" title="Afficher le menu">Afficher le menu</div>\'); 
				    }, 300);
					
			        }            
			    });
			});
			</script>';
	print '<div id="cachehide">';
	print '<a onclick="showHide();" href="#"><img class="classfortooltip open" title="Cacher le menu" id="swap-img" src="'.DOL_URL_ROOT.'/theme/azely/img/hide.png"></a>';
	print '</div>';
	print '<li class="tmenusel cachehide1" id="mainmenutd_home">
		   <a class="tmenuimage" href="'.DOL_URL_ROOT.'/index.php?mainmenu=home&amp;leftmenu=">
		 	<div class="icon-home mainmenu home" style="left:"> </div>
			<div class="mainmenuaspan cachehide2">'.$langs->trans(Home).'</div>
		   </a>
		</li>';
		}
// End Bouton cacher/afficher menu vertical gauche

