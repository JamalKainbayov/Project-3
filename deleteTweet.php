<?php
require ("Index.php");
    if (isset ($_GET["del"])) {
        $Del_ID = $_GET["del"];
        $selectPost = $conn->prepare("SELECT * FROM posts WHERE post_id = :post_id");
        $selectPost->bindParam(":post_id", $Del_ID);
        $selectPost->execute();
        $row = $selectPost->fetch(PDO::FETCH_ASSOC);
        $post_text = $row['post_content'];
        $post_date = $row['post_date'];
        $post_img = $row['upload_image'];
        $user_name = $row['username'];
        //! Remove the image -------------------------------------------------->
        unlink($post_img);
        //! Remove the image -------------------------------------------------->
        $deletePost = $conn->prepare("DELETE FROM posts WHERE post_id = :post_id");
        $deletePost->bindParam(":post_id", $Del_ID);
        $deletePost->execute();
        //? DELETE ALL COMMENT RELATED TO THE POST */

        
        //? DELETE ALL COMMENT RELATED TO THE POST */
        if ($deletePost) {
            header("location:function.php");
            exit;
        } else {
            echo "Er is een fout opgetreden bij het verwijderen van de post.";
        }
    }
?>