<?php
    
    $page_title = "Roger Hyam: Strathglass";

    require_once('header.php');

    // define some photos of the gallery

    $display_title = "Strathglass";
    $intro = "
        I'm at the start of a long term project in Strathglass and adjacent glens.
        These glens are some of the
        most beautiful in Scotland. They were shaped by the last ice age and humans have
        probably been here since the ice retreated.
        There is evidence of continuous habitation for at least four thousand years.
        Tap photographs marked with an \"<i class=\"fa fa-info\"></i>\" for background information.
        ";

    $photos = array(
        (object)array(
            'file' => 'projects/strathglass/strathglass-1.jpg',
            'title' => "Stream",
            'info' => "Some text about these sticks. Some text about these sticks. Some text about these sticks. Some text about these sticks. Some text about these sticks. Some text about these sticks. Some text about these sticks. "
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-2.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-3.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-4.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-5.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-6.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-7.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-8.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-9.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-10.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-11.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-12.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-13.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-14.jpg',
            'title' => "Stream",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-15.jpg',
            'title' => "Stream",
            'info' => null
        )
    );

    require_once('gallery_template.php');
    require_once('footer.php');
?>