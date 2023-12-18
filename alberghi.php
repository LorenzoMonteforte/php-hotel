<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alberghi.css">
    <?php
        $hotels = [

            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
            ],
    
        ];
    ?>
</head>
<body>
    <ul>
        <?php
            for($i=0; $i<sizeof($hotels); $i++){
                $parking;
                if($hotels[$i]["parking"]==true){
                    $parking = "Si";
                }else{
                    $parking = "No";
                }
                echo "<li class='marTop3rem'>
                        <ul>
                            <li><strong>Nome:</strong> ".$hotels[$i]["name"]."</li>
                            <li><strong>Descrizione:</strong> ".$hotels[$i]["description"]."</li>
                            <li><strong>Parcheggio:</strong> ".$parking."</li>
                            <li><strong>Voto:</strong> ".$hotels[$i]["vote"]."</li>
                            <li><strong>Distanza dal centro:</strong> ".$hotels[$i]["distance_to_center"]."</li>
                        </ul>
                      </li>";
            }
        ?>
    </ul>
</body>
</html>