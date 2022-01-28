<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page de test2</title>
  </head>
  <body>   
    This is php page.
   <?php
      echo "Test console";
      $user=$_SERVER['HTTP_USER_AGENT'];

      if(stristr($user,'Macintosh')){$machine="Mac";}
      elseif(stristr($user,'Win')){$machine="PC";}

      //- smartphones-----------------
      elseif(stristr($user,'iPhone')){$machine="iPhone";}
      elseif(stristr($user,'iPod')){$machine="iPod";}
      elseif(stristr($user,'Android')){$machine="Android";}
      elseif(stristr($user,'iPad')){$machine="iPad";}

      else{$machine="Linux";}

      if(stristr($user,'Chrome')){$navigateur="Chrome";}
      elseif(stristr($user,'Camino')){$navigateur="Camino";}
      elseif(stristr($user,'Firefox')){$navigateur="Firefox";}
      elseif(stristr($user,'Safari')){$navigateur="Safari";}
      elseif(stristr($user,'MSIE')){$navigateur="Explorer";}
      elseif(stristr($user,'Opera')){$navigateur="Opera";}
      elseif(stristr($user,'Epiphany')){$navigateur="Epiphany";}
      elseif(stristr($user,'ChromePlus')){$navigateur="ChromePlus";}
      elseif(stristr($user,'Lynx')){$navigateur="Lynx";}


      else{$navigateur="inconnu";}
      echo $navigateur;
      ?>
  </body>
</html>


