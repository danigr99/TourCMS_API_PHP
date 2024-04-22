<?php
    use TourCMS\Utils\TourCMS;
    require 'vendor/autoload.php';
    $tourCMS = new TourCMS(57150,'8f940e0574f0','simplexml');
    $tours = $tourCMS->search_tours('country=ES', 3930);
    foreach ($tours->tour as $tour) {
        require 'showTours.php';
    }
?>