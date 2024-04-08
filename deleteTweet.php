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
        $post_img = $row['Upload_image'];
        // $user_name = $row['Username'];
        //! Remove the image -------------------------------------------------->
        unlink($post_img);
        //! Remove the image -------------------------------------------------->
        //? TODO: DELETE ALL COMMENTS AND LIKES RELATED TO THE POST */ 
        
        
        //? TODO: DELETE ALL COMMENTS AND LIKES RELATED TO THE POST */
        $deletePost = $conn->prepare("DELETE FROM posts WHERE post_id = :post_id");
        $deletePost->bindParam(":post_id", $Del_ID);
        $deletePost->execute();
        if ($deletePost) {
            header("location:function.php");
            exit;
        } else {
            echo "Er is een fout opgetreden bij het verwijderen van de post.";
        }
    }
?>