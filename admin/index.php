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
  case 'add_post':
      $blogTitle = $_POST['title'];
      $blogDate = $_POST['data'];
      $blogPost = $_POST['content'];
      $blogName = $_POST['name'];
      $title= 'Make a Post';
      include 'views/add_post.php';
      $blogPost = add_tags($blogPost);
      break;
  case 'post_submit':
      addPost($blogTitle, $blogDate, $blogPost);
      echo $insertRow;
      break;
}
