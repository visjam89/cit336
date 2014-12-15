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
        <input type="text" class="form-control" name="title" value="<?php echo $titles['blogTitle']?>" readonly>
        </div>
        <div class="col-md-2 form-group">
        <label for="date">Date of post</label>
        <input type="date" class="form-control" name="date" value="<?php echo $titles['blogDate']?>" readonly>
        </div>
            </div>
        <div class="row">
        <div class="col-md-7 col-sm-offset-1 form-group">
            <textarea name="content" class="form-control" rows="10" readonly><?php echo $titles['blogPost']?>" 
        </textarea>
        </div>
        </div>
        <button type="submit" class="col-sm-offset-1 btn btn-default " name='action' value="Delete_Post">Submit</button>
        <input type="hidden" name="titles" value="<?php echo $titles['blogTitle'];?>">
    </form>
