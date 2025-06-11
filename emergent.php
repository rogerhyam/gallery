<?php
    
    $page_title = "Roger Hyam: Strathglass";

    require_once('header.php');

    // define some photos of the gallery

    $display_title = "Emergent";
    $intro = "Photographs that don't yet form part of a thematic project.";

    $photos = array(
        (object)array(
            'file' => 'projects/emergent/pentlands-1.jpg',
            'title' => "Big fat tree",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/emergent/antonine-1.jpg',
            'title' => "Big fat tree",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/emergent/antonine-2.jpg',
            'title' => "Big fat tree",
            'info' => null
        )
    );

    require_once('gallery_template.php');
    require_once('footer.php');
?>