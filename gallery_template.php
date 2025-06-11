<div class="w3-content w3-container w3-padding-64 w3-center">

    <?php
    echo "<h1>{$display_title}</h1>";
    echo '<div class="w3-container" style="padding-left: 5%; padding-right: 5%;" >';
    echo "<p class=\"w3-left-align\">{$intro}</p>";
    echo '</div>';

    for ($i=0; $i < count($photos); $i++) { 

        $photo = $photos[$i];
        $dom_id = "image_" . $i;

       
        if ($photo->info) echo "<p onclick=\"document.getElementById('{$dom_id}').style.display='block'\" style=\"cursor: pointer;\">";
        else  echo '<p>';



        echo "<img src=\"{$photo->file}\" style=\"max-width:90%; max-height: 90vh;\"  alt=\"{$photo->title}\"";
        if ($i > 1) echo ' loading="lazy" ';
        echo ">";
        echo "<br />";
        echo $photo->title;

        // dialogue box if needed
        if($photo->info){

        echo  '&nbsp;-&nbsp;<i class="fa fa-info"></i>';
           
?>


    <div id="<?php echo $dom_id ?>" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity" style="max-width: 800px;">
            <header class="w3-container">
                <span onclick="document.getElementById('<?php echo $dom_id ?>').style.display='none'"
                    class="w3-button w3-display-topright">&times;</span>
                <h2><?php echo $photo->title; ?></h2>
            </header>
            <div class="w3-container w3-left-align">
                <div style="padding-left: 5%; padding-right: 5%;" >
                    <?php echo $photo->info ?>
                </div>
            </div>
            <footer class="w3-container">
                &nbsp;
            </footer>
        </div>
    </div>

    <?php
        } // include

        echo '</p>';

    }
   
?>

    <hr />
    <p class="w3-right-align">
        <a href="/#photographs">More photographs <i class="fa fa-arrow-right"></i></a>
    </p>

</div>