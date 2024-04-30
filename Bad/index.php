<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Place</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            margin-bottom: 10px;
        }
        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Bad Place</h1>

    <?php
        require_once 'BadPlaceFactory.php';

        // Create a Restaurant
        $restaurant = BadPlaceFactory::createPlace('restaurant');
        echo "<pre>" . $restaurant->getName() . ": " . $restaurant->getDescription() . "</pre>";

        // Create a Park
        $park = BadPlaceFactory::createPlace('park');
        echo "<pre>" . $park->getName() . ": " . $park->getDescription() . "</pre>";

        // Create a Museum
        $museum = BadPlaceFactory::createPlace('museum');
        echo "<pre>" . $museum->getName() . ": " . $museum->getDescription() . "</pre>";

        // Create a Cinema (added later)
        $cinema = BadPlaceFactory::createPlace('cinema');
        echo "<pre>" . $cinema->getName() . ": " . $cinema->getDescription() . "</pre>";
    ?>
</body>
</html>
