<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../library/library.php';
function getPosts($blogTitle, $blogDate, $blogPost) {
//    make connection in library
    $connection = websterUser();
    try {
        $sql = 'SELECT blog blogTitle, blogDate, blogPost';
        $stmt = $link->prepare($sql);
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

function addPost($blogTitle, $blogDate, $blogPost) {
//    make connection in library
    $connection = websterUser();
    try {
        $sql = 'INSERT INTO blog blogTitle, blogDate, blogPost) VALUES (:blogTitle, :blogDate, :blogPost';
        $stmt = $link->prepare($sql);
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
function deletePost($blogTitle, $blogDate, $blogPost) {
//    make connection in library
    $connection = websterUser();
    try {
        $sql = 'INSERT INTO blog (blogTitle, blogDate, blogPost) VALUES (:blogTitle, :blogDate, :blogPost';
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':blogTitle', $blogTitle, PDO::PARAM_STR);
        $stmt->bindParam(':blogDate', $blogDate, PDO::PARAM_STR);
        $stmt->bindParam(':blogPost', $blogPost, PDO::PARAM_STR);
        $stmt->execute();
        $insertRow = $stmt->rowCount();
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        return FALSE;
        echo 'sorry your post did not work';
    }
    return $insertRow;
}
function updatePost($blogTitle, $blogDate, $blogPost) {
//    make connection in library
    $connection = websterUser();
    try {
        $sql = 'INSERT INTO blog.blogTitle, blogDate, blogPost) VALUES (:blogTitle, :blogDate, :blogPost';
        $stmt = $link->prepare($sql);
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