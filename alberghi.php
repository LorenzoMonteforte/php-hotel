<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=0; $i<sizeof($hotels); $i++){
                    $parking;
                    if($hotels[$i]["parking"]==true){
                        $parking = "Si";
                    }else{
                        $parking = "No";
                    }
                    echo "<tr>
                            <td>".$hotels[$i]["name"]."</td>
                            <td>".$hotels[$i]["description"]."</td>
                            <td>".$parking."</td>
                            <td>".$hotels[$i]["vote"]."</td>
                            <td>".$hotels[$i]["distance_to_center"]."</td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>