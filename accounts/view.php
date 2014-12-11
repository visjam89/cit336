<?php/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ ?>


<!DOCTYPE html>
<html>
    <head>

    

   <?php include '../modules/head.php' ?>

    

    </head>
<body>
    <header>
<?php include '../modules/header.php' ?>

            
    </header>
    <nav>
    <?php include '../modules/nav.php' ?>
    </nav>
    <form action='index.php' method='post'>
        <div class="form-group">
        <label for="selectRegister">Register</label>
        <!--<input type="submit" class="form-control" name='action' value="RegForm">-->
        <button type="button" class="btn btn-default" name="action" value="RegForm">Register</button>
        <label for="selectLogin">Login</label>
        <!--<input type="submit" class="form-control" name='action' value="LogForm">-->
        <button type="button" class="btn btn-default" name="action" value="LogForm">Login</button>
        <label for="selectUpdate">Update Information</label>
        <input type="submit" class="form-control" name='action' value="UpdForm">
        <label for="selectDelete">Delete Account</label>
        <input type="submit" class="form-control" name='action' value="DelForm">
        <label for="selectView">View Account</label>
        <input type="submit" class="form-control" name='action' value="Getcustomers">
        
    </form>
    
    <footer>
       <?php include '../modules/footer.php' ?>
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