<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
   
    <div>                                                           
		
		<a href="index.php?page=start">Start</a> |             	<!-- div erzeugt einen container -->            
        	<a href="index.php?page=contacts">Kontakte</a> |       	<!-- a erzeugt einen Link -->         
		<a href="index.php?page=legal">Projekte</a>  |          <!-- href legt das Ziel des Links fest -->
		<a href="index.php?page=legal">Impressum</a>
				
    </div>   
    

                                                                
    <?php                                                       
                     
                                                                
        $headline = 'Herzlich willkommen!';


        if($_GET['page'] == 'contacts')


        {

        $headline = 'Deine Kontakte';

        }
        
                                                               
        echo '<h1>' . $headline . '</h1>';                 
             

        //wenn man auf Kontakte klickt, soll ein individueller Text angezeigt werden
        //wieso braucht man dafür zwei if Abfragen und schreibt es nicht in eine ??


        if($_GET['page'] == 'contacts')                        


        { 
            
             echo
             
             "<p> Hier siehst du deine <b>Kontakte</b></p>";   

        }


        else                                                    


        {

            echo 'Du bist auf der Startseite';                 

        }



    ?>

    </body>


</html>
