<?php

function new_Post($content) {
    $content = add_tags($content);
    foreach()
    
    echo '<div class="row main">
                <div class="col-md-8 col-md-offset-2">
                    <h2><?php echo $blogTitle?></h2>
                </div>
            </div>
            <div class="row main">
                <div class="col-md-8 col-md-offset-2">
                    <h3><?php echo $blogDate ?></h3>
                </div>
            </div>
           <div class="row main">
                <div class="col-md-8 col-md-offset-2">
                    <p><?php echo $blogPost ?></p>
                </div>
            </div>';
}
 
