<!-- 

Nome repo: php-hotel
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare una tabella con tutti gli hotel e i relativi dati disponibili.

Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus:
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA:
deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore).
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
 
-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>

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

    
    $filtered_hotels = [];

    if (isset($_GET['parking'])) {
        foreach ($hotels as $hotel) {
            if ($hotel['parking'] === true) {
                $filtered_hotels[] = $hotel;
            }
        }
    } else {
        $filtered_hotels = $hotels;
    }

    ?>

    <h1 class="text-center"> PHP-HOTELS </h1>

    <hr>
    <br>

    <div class="container">

        <form action="" method="GET" class="mb-4">
            <input type="checkbox" name="parking" id="parking" <?php echo isset($_GET['parking']) ? 'checked' : ''; ?>>
            <label for="parking">Only Parking Available</label>
            <button type="submit" class="btn btn-primary btn-sm ml-2">Filtra</button>
            <a href="index.php" class="btn btn-secondary btn-sm ml-1">Reset</a>
        </form>

        <table class="table table-bordered text-center mt-3">
            <tr class="table-dark text-dark">
                <th> NAME </th>
                <th> DESCRIPTION </th>
                <th> PARKING </th>
                <th> VOTE </th>
                <th> DISTANCE TO CENTER </th>
            </tr>
            <?php foreach ($filtered_hotels as $hotel): ?>
                <tr>
                    <td> <?php echo $hotel['name']; ?> </td>
                    <td> <?php echo $hotel['description']; ?> </td>
                    <td> <?php echo $hotel['parking'] ? "<div class='btn btn-success'>Available</div>" : "<div class='btn btn-danger'>Not available</div>"; ?> </td>
                    <td> <?php echo $hotel['vote']; ?> </td>
                    <td> <?php echo $hotel['distance_to_center'] . " KM" ?> </td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>

</body>

</html>