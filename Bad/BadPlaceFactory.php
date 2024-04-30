<?php

require_once 'Place.php';

// Bad Factory class to create places
class BadPlaceFactory {
    public static function createPlace($type) {
        switch($type) {
            case 'restaurant':
                return new Restaurant();
            case 'park':
                return new Park();
            case 'museum':
                return new Museum();
            case 'cinema': // Problem: adding new place type requires modifying factory class
                return new Cinema();
            default:
                throw new Exception("Invalid place type.");
        }
    }
}

?>
