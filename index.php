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

    ?>


    <h1> PHP-HOTELS </h1>


    <table class="table table-bordered text-center mt-3">
        <tr>
            <th> NAME </th>
            <th> DESCRIPTION </th>
            <th> PARKING </th>
            <th> VOTE </th>
            <th> DISTANCE TO CENTER </th>
        </tr>
        <?php foreach ($hotels as $hotel) : ?>
        <tr>
            <td> <?php echo $hotel['name']; ?> </td>
            <td> <?php echo $hotel['description']; ?> </td>
            <td> <?php echo $hotel['parking'] ? 'Yes' : 'No'; ?> </td>
            <td> <?php echo $hotel['vote']; ?> </td>
            <td> <?php echo $hotel['distance_to_center']; ?> </td>
        </tr>
        <?php endforeach; ?>
        
    </table>

    <?php




    ?>





</body>

</html>