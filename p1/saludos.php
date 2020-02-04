<!DOCTYPE html>

<html>
        <head>
                <title>PHP</title>
        </head>
        <body>
                <?php
                        $vueltas = $_GET['num'];
                        echo '<h1> Me has pedido que te salude' . $num . 'veces.</h1>'; 
                        for($i = 0; $i < $vueltas; $i++){
                                echo '<p>' . $i . ' - Hola mundo!</p>'; 
                        } 
                ?>
        </body>
</html>