<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head>  
    <meta http-equiv="content-type"  
          content="text/html; charset=utf-8" /> 
    <title>Exemple d'un tableau simple</title>  
  </head>  
  <body>  
    <p>  
    <?php  
        $notes= array(17, 19, 18, 20) ;
        
        $i=1 ;
        foreach($notes as $note_jour)
        {
    
    echo("La note n° $i est: $note_jour <BR>");   
            $i+1 ;
        }
    ?>  
    <br />  
    
    </p>  
  </body>  
</html>
