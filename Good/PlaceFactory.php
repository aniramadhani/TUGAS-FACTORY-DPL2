<?php

require_once 'Place.php';

class PlaceFactory {
    public static function createPlace($type) {
        switch($type) {
            case 'restaurant':
                return new Restaurant();
            case 'park':
                return new Park();
            case 'museum':
                return new Museum();
            default:
                throw new Exception("Invalid place type.");
        }
    }
}

?>
