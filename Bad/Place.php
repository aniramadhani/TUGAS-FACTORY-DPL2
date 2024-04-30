<?php

// Abstract class for places
abstract class Place {
    protected $name;

    public function getName() {
        return $this->name;
    }

    abstract public function getDescription();
}


class Restaurant extends Place {
    protected $name = "Restaurant";

    public function getDescription() {
        return "This is a restaurant.";
    }
}


class Park extends Place {
    protected $name = "Park";

    public function getDescription() {
        return "This is a park.";
    }
}


class Museum extends Place {
    protected $name = "Museum";

    public function getDescription() {
        return "This is a museum.";
    }
}


class Cinema extends Place {
    protected $name = "Cinema";

    public function getDescription() {
        return "This is a cinema.";
    }
}

?>
