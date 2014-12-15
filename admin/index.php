<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'model.php';
if(isset($_POST['action'])){
    $action= $_POST['action'];
}else if (isset($_GET['action'])) {
   $action= $_GET['action']; 
}else {
    $action = 'add_post';
}

$action = strtolower($action);
switch ($action) {
  case 'update_post':
      $blogTitle = $_GET(['title']);
      $post = getPost($blogTitle);
      $title = 'Update Post';
      include 'views/update_post.php';
      break;
  case 'Update_Post':
      $blogTitle = $_POST['title'];
      $blogPost = $_POST['content'];
      $blogName = $_POST['name'];
      $blogDate = $_POST['date'];
      if(empty($blogTitle) || empty($blogPost) || empty($blogName) || empty($blogDate)){
       $message = "Blog Title, Blog Post, Blog Name and Date are required.";   
      }
      if(isset($message)){
          $errors = [$blogTitle, $blogTitle, $blogPost, $blogDate];
          include 'update_post.php';
          exit;
      }
      $updatePost = updatePost($blogName, $blogTitle, $blogDate, $blogPost);
      if($updatePost) {
          $message = "<p class='notice'>Sorry, the update for " . $blogTitle . "failed.</p>";
      }
      $titles = getPosts();
      $title = 'Posts';
      include 'views/posts.php';
      break;
      
  case 'add_post':
      $blogTitle = $_POST['title'];
      $blogPost = $_POST['content'];
      $blogName = $_POST['name'];
      $blogDate = $_POST['date'];
      $title= 'Make a Post';
      include 'views/add_post.php';
      $blogPost = add_tags($blogPost);
      break;
  case 'post_submit':
      addPost($blogTitle, $blogDate, $blogPost);
      echo $insertRow;
      break;
  case 'delete_post':
      $blogTitle = ($_GET['title']);
      $titles = getPost($blogTitle);
      $title = 'Delete Post';
      include 'views/delete_post.php';
      break;
  case 'Delete_Post':
      $blogTitle = $_POST['title'];
      $deleteResult = deletePost($blogTitle);
      if($deleteResult) {
          $message = '<p class="notice">Sorry, the delete for ' . $blogTitle . ' failed.</p>';
      }
      $titles = getPosts();
      $title = 'Posts';
      include 'views/posts.php';
      break;
  case 'all_post':
      $titles = getPosts();
      $title = 'Posts';
      include 'views/posts.php';
      break;
      
}
