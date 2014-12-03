<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SQL Datatypes</title>

    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
<div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php">Webster Family Blog</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#contact">Sign-up</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Family Blog</a></li>
                <li><a href="#">TJ's Blog</a></li>
                <li><a href="#">Calli's Blog</a></li>
               <!-- <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>-->
              </ul>
            </li>
          </ul>
          <!--<ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top</a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </div>
</header>
<main>
    <h1>MySQL Data Types</h1>
        <table class="table table-bordered">
            <tr><h2>Numeric Data Types</h2></tr>
            <tr>
                <td>INT[(size)]</td> 
                <td>An integer between -2,147,483,648 and 2,147,483,647 where size is the maximum display size. Default size is 11.</td>
            </tr>
            <tr>
                <td>TINYINT[(size)]</td>
                <td>An integer between -127 and 128 where size is the maximum display size. Default size is 4.</td>
            </tr>
            <tr>
                <td>DECIMAL[(p[,s])]</td> 
                <td>Decimal numbers with fixed precision (p) and scale(s). The maximum precision is 65 and the default is 10. The maximum scale is 30 and the default is 0.</td>
            </tr>
  </table>
    <table class="table- table-bordered">
            <tr><h2>Common String Data Types</tr>
            <tr>
                <td>VARCHAR(size)</td> 
                <td>Variable-length characters where size is the maximum number of characters. The size argument is required. The max size is 65,535.</td>
            </tr>
            <tr>
                <td>CHAR[(size)]</td>
                <td>Fixed-length characters where size is the number of characters. The default size is 1. The maximum size is 225</td>
            </tr>
                <td>TEXT</td> 
                <td>Variable-length characters up to a maximum size of 65,535 bytes.</td>        
            </table>
            <table class="table table-bordered">
                <tr><h2>Common date and time data types</h2></tr>
                <tr>
                <td>DATE</td> 
                <td>Date from January 1, 1000 through December 31, 9999. The default format for entry and dispay is "yyyy-mm-dd".</td>
                </tr>
                <tr>
                <td>TIME</td>
                <td>Times in the range -838:59:59 through 838:59:59. The default format for display and entry is "hh:mi:".</td>
                </tr>
                <tr>
                <td>DATETIME</td>
                <td>Date and time from January 1, 1970 through December 31, 9999. The default format for display and entry is "yyyy-mm-dd hh:mi:ss".</td>
                </tr>
           
    </table>
        <div class="container">
            <h2>Other Useful Information</h2>
            <ul class="list-group">
                <li>By default MySQL uses the Latin-1 character set.</li>
                <li>INT takes 4 bytes of storage while TINYINT only takes 1 byte of storage. So if you are using integers between -127 and 128 it is better to use TINYINT.</li>
        
            </ul>

    </div>
  </main>
<footer>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-5">      
         
             <ul class="list-unstyled list-inline">
                 <li><a href ="siteplan.php">Site Plan</a></li>
                 <li><a href="datatypes.php">mySQL Data Types</a></li>
             </ul>
               
            </div>
        </div> 
    </div>
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

