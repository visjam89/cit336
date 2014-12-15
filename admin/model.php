<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../library/library.php';
function getPosts() {
//    make connection in library
    $connection = websterUser();
    try {
        $sql = 'SELECT blog.blogTitle, blogName, blogDate, blogPost FROM blog ORDER BY blogTitle, blogDATE';
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $blogPosts = $stmt->fetchAll();
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        return FALSE;
    }
    return $blogPosts;
}

function getPost($blogTitle) {
    $connection = websterUser();
    try {
     $sql = 'SELECT blog.blogTitle, blogName, blogDate, blogPost FROM blog  WHERE blog.blogTitle = :blogTitle ORDER BY blogDate';
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':blogTitle', $blogTitle, PDO::PARAM_INT);
        $stmt->execute();
        $post = $stmt->fetch();
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        return FALSE;
    }
    return $post;
}

function addPost($blogName, $blogTitle, $blogDate, $blogPost) {
//    make connection in library
    $connection = websterUser();
    try {
        $sql = 'INSERT INTO blog (blogName, blogTitle, blogDate, blogPost) VALUES (:blogName, :blogTitle, :blogDate, :blogPost';
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':blogName', $blogName, PDO::PARAM_STR);
        $stmt->bindParam(':blogTitle', $blogTitle, PDO::PARAM_STR);
        $stmt->bindParam(':blogDate', $blogDate, PDO::PARAM_STR);
        $stmt->bindParam(':blogPost', $blogPost, PDO::PARAM_STR);
        $stmt->execute();
        $insertRow = $stmt->rowCount();
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        return FALSE;
    }
    return $insertRow;
}
function deletePost($blogTitle) {
//    make connection in library
    $connection = websterAdmin();
    try {
        $sql = 'DELETE FROM blog WHERE blogTitle = :blogTitle';
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':blogTitle', $blogTitle, PDO::PARAM_STR);
        $stmt->execute();
        $deleteRow = $stmt->rowCount();
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        echo 'sorry your post did not work';
        return FALSE;
        
    }
    return $deleteRow;
}
function updatePost($blogName, $blogTitle, $blogDate, $blogPost) {
//    make connection in library
    $connection = websterUser();
    try {
        $sql = 'UPDATE blog SET blogTitle = :blogTitle, blogDate = :blogDate, blogPost = :blogPost) WHERE blogTitle = :blogTitle';
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':blogName', $blogName, PDO::PARAM_STR);
        $stmt->bindParam(':blogTitle', $blogTitle, PDO::PARAM_STR);
        $stmt->bindParam(':blogDate', $blogDate, PDO::PARAM_STR);
        $stmt->bindParam(':blogPost', $blogPost, PDO::PARAM_STR);
        $stmt->execute();
        $updateRow = $stmt->rowCount();
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        return FALSE;
    }
    return $updateRow;
}