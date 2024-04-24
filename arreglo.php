<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $semana = [
            'Lunes',
            'Martes',
            'Miercoles',
            'Jueves',
            'Viernes',
            'Sabado',
            'Domingo'
        ];
        
        var_dump($semana);
        foreach ($semana as $dia) {
                echo $dia . "<br>";
        }
        echo "<br>";
        
        echo $semana[0];
        echo $semana[1];
        echo $semana[2];
        echo $semana[3];
        echo $semana[4];
        echo $semana[5];
        echo $semana[6];

        
        echo "<br>";

        $planetas = []; 

        $planetas[] = "Marte";
        $planetas[] = "Tierra";
        $planetas[] = "Venus";
        var_dump($planetas);
        echo
        count($planetas);//3

        
            ?>
</body>
</html>