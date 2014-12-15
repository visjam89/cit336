<?php include '../modules/header.php';?>
<main>
<div class="table-responsive">
  <table class="table">
   <tr>
    <th>Blog Title</th>
    <th>Blog Name</th> 
    <th>Date</th>
  </tr>
  <tbody>
      <?php foreach($blogItems as $post) {
    $titles = "<tr>";
            $titles.= "<td>".$post['blogTitle']."</td>";
            $titles .= "<td>".$post['blogName']."</td>";
            $titles .= "<td>".$post['blogDate']."</td>";
            $titles .= "<td><a href='/admin?action=update&amp;title=".$post['blogTitle']."'>Edit</a></td>";
            $titles .= "<td><a href='/admin?action=delete&amp;title=".$post['blogTitle']."'>Delete</a></td>";
            $titles .= "</tr>";
            echo $titles;
      }
 ?>
  </tbody>
  
  
  </table>
</div>
</main>
    <?php ?>

<?php include '../modules/footer.php';?>

