<?php
    
    $page_title = "Roger Hyam: Strathglass";

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
            'title' => "Stream, Glen Affric, May 2025",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-2.jpg',
            'title' => "Plantation, May 2025",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-3.jpg',
            'title' => "Reserves, May 2025",
            'info' => "Reserves are trees left standing after the clear cutting 
            of a plantation.
            "
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-4.jpg',
            'title' => "Generator shed, May 2025",
            'info' => "
            <p>
            
            There was a dramatic increase in the population of Strathglass 
            during the 1940s when workers arrived to construct
            the Affric-Beauly hydro-electric power scheme.
            
            A temporary diesel power station was built to provide electricity.

            Today the shed that housed the generators remains as a storage facility 
            for the company that runs the hydro scheme.

            Opposite is a young pine plantation which will eventually be thinned
            and felled or perhaps lodge in a storm but continue in some form, like the shed.            
            </p>

            "
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-5.jpg',
            'title' => "Domestic garage, Beauly, May 2025",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-6.jpg',
            'title' => "Derelict, Cannich, May 2025",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-7.jpg',
            'title' => "The internet, Cannich, May 2025",
            'info' => "
            Digital communication is 
            the most significant infrastructure added to the glens this Century
            - at least in the lower reaches of the glens.
            Its physical manifestation can be overlooked but affects almost
            everything.
            "
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-8.jpg',
            'title' => "Abandoned car, Beauly, May 2025",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-9.jpg',
            'title' => "Contrail, Loch Monar, May 2025",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-10.jpg',
            'title' => "Boathouse, Loch Mullardoch, May 2025",
            'info' => null
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-11.jpg',
            'title' => "Root plate, Mullardoch Dam, May 2025",
            'info' => "
                The roots of trees submerged when the glens were flooded 
                come loose from the soil and migrate to the dams.
                "
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-12.jpg',
            'title' => "Clan Chisholm Memorial, May 2025",
            'info' => "
            
            \"CUIMHNICHAIBH AIR DAOINE O'N D'THAINIG SIBH\"<br/>
            Remembering the people from whom you have come.
            <br/>Clan Chishom Society
            <br/>Canada Branch, 2001."
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-13.jpg',
            'title' => "Rock marks, Loch Monar, May 2025",
            'info' => "
                As we use electricity the water level falls.
                This reveals patches of bed rock.
                The rock bears markings.
                Intrusions, where one rock penetrated another millions of years ago.
                Ten thousand year old glacial abrasions.
                The scraping of our machinery a mere generation ago.
             "
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-14.jpg',
            'title' => "Tree stump, Comar Wood dun, May 2025",
            'info' => "
                Felling trees leaves a similar pattern on every stump.
                This stump is in <a href=\"https://forestryandland.gov.scot/what-we-do/biodiversity-and-conservation/historic-environment-conservation/investigation/comar-wood-dun\">Comar Wood dun</a> - an Iron Age settlement.
                Settlements leave a similar pattern where ever they occur.
                Trees are returning to cover the dun.
                "
        ),
        (object)array(
            'file' => 'projects/strathglass/strathglass-15.jpg',
            'title' => "Loch Monar, May 2025",
            'info' => null
        )
    );

    require_once('header.php');
    require_once('gallery_template.php');
    require_once('footer.php');
?>