<?php 
include '../modules/header.php';?>
<main>
    <h1>Edit Post</h1>
    <?php if(isset($message)) {
        echo '<p class="notice">'. $message . '</p>';
    }
    ?>
    
    
    <form role="form" action="index.php" method="post" id="add_post">
     


        <div class="row">
            
<!--        <div class=" col-md-2 col-sm-offset-1 form-group">
            <label for='name'>Which Blog?</label>
            <select name="name" class="form-control">
  <option>Family Blog</option>
  <option>TJ's Blog</option>
  <option>Calli's Blog</option>
</select>-->
            <!--</div>-->
        <div class="col-md-3 form-group">
        <label for="title">Blog Title</label>
        <input type="text" class="form-control" name="title" value="<?php if(isset($titles)){echo $titles['blogTitle']; } elseif (isset($errors)) {echo $errors[0];}?>" required>
        </div>
        <div class="col-md-2 form-group">
        <label for="date">Date of post</label>
        <input type="date" class="form-control" name="date" value="<?php if(isset($titles)){echo $titles['blogDate']; } elseif (isset($errors)) {echo $errors[1];}?>" required>
        </div>
            </div>
        <div class="row">
        <div class="col-md-7 col-sm-offset-1 form-group">
            <textarea name="content" class="form-control" rows="10" required><?php if(isset($titles)){echo $titles['blogPost']; } elseif (isset($errors)) {echo $errors[2];}?>" 
        </textarea>
        </div>
        </div>
        <button type="submit" class="col-sm-offset-1 btn btn-default " name='action' value="Update_Post">Submit</button>
        <input type="hidden" name="titles" value="<?php if(isset($titles)){echo $titles['blogTitle']; } elseif(isset($errors)) { echo $errors[3];} ?>">
    </form>
</main>

<?php include '../modules/footer.php';?>



