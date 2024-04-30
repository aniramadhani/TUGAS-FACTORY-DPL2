<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Factory Example</title>
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
    <h1>Place Factory Example</h1>

    <?php
        require_once 'PlaceFactory.php';

        // Create a Restaurant
        $restaurant = PlaceFactory::createPlace('restaurant');
        echo "<pre>" . $restaurant->getName() . ": " . $restaurant->getDescription() . "</pre>";

        // Create a Park
        $park = PlaceFactory::createPlace('park');
        echo "<pre>" . $park->getName() . ": " . $park->getDescription() . "</pre>";

        // Create a Museum
        $museum = PlaceFactory::createPlace('museum');
        echo "<pre>" . $museum->getName() . ": " . $museum->getDescription() . "</pre>";
    ?>
</body>
</html>
