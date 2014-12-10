<?php
// Create the navigation bar here meeting the requirements listed in step 2
  $locations = array('Europe', 'Africa', 'North America', 'Antarctica', 'Asia', 'South America', 'Oceania');
  sort($locations);
  array_unshift($locations, 'Home');
  

  
  foreach ($locations as $value) {
        $list .= "<li><a href='index.php?action=$value' title='Go to $value page'> $value</a></li>";
             
  }
 $navbar = "<ul>$list</ul>";
  
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>View | PHP Travel Site</title>
  </head>
  <body>
    <header>
      <h1>PHP Travel Site</h1>
    </header>
    <nav>
      <?php
        // The navigation bar (step 2) will display here in the browser
        // Do NOT alter this code block
      	echo $navbar;
      ?>
    </nav>
    <main>
      <?php
        // The content from the controller (step 3) will display here in the browser
        // Do NOT alter this code block
      	echo $content;
      ?>
    </main>
    <footer>

	</footer>
  </body>
</html>