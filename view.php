<!DOCTYPE html>

<html lang="en">

    <head>

    

   <?php include 'modules/head.php' ?>

    

    </head>



  <body>

    <!-- Google Tag Manager -->

    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PXSWL4"

    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

    })(window,document,'script','dataLayer','GTM-PXSWL4');</script>

    <!-- End Google Tag Manager -->
        <header>
<?php include 'modules/header.php' ?>
            
    </header>
    <nav><?php include 'modules/nav.php' ?></nav>
        <main>
            <div class="row main">
                <div class="col-md-4 col-md-offset-5">
            <h1><?php echo $blogName?></h1>
                </div>
            </div>
            <div class="row main">
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
            </div>
    </main>


    <footer>
       <?php include 'modules/footer.php' ?>
    </footer>
    <!-- Bootstrap core JavaScript

    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="bootstrap/docs/assets/js/docs.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

 
  </body>
</html>
