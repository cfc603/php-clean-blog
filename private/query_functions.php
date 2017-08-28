<?php

    function create_post($record){
        global $db;

        $sql = "INSERT INTO posts ";
        $sql .= "(title, subtitle, body, image, live) ";
        $sql .= "VALUES (";
        $sql .= $record["title"] . ", ";
        $sql .= $record["subtitle"] . ", ";
        $sql .= $record["body"] . ", ";
        $sql .= $record["image"] . ", ";
        $sql .= $record["live"] . "";

        confirm_query($db, $sql);
    }

    function delete_post($id){
        global $db;

        $sql = "DELETE FROM posts ";
        $sql .= "WHERE id='" . $id . "' ";
        $sql .= "LIMIT 1";

        confirm_query($db, $sql);
    }

    function update_post($record){
        global $db;

        $sql = "UPDATE subjects SET ";
        $sql .= "title='" . $record["title"] . "', ";
        $sql .= "subtitle='" . $record["subtitle"] . "', ";
        $sql .= "body='" . $record["body"] . "', ";
        $sql .= "image='" . $record["image"] . "', ";
        $sql .= "live='" . $record["live"] . "' ";
        $sql .= "WHERE id='" . $record["id"] . "' ";
        $sql .= "LIMIT 1";

        confirm_query($db, $sql);
    }

    function get_all_posts(){
        global $db;

        $sql = "SELECT * FROM posts ";
        $sql .= "ORDER BY created ASC";

        $result = mysqli_query($db, $sql);
        confirm_result_set($result);

        return $result;
    }


    function get_post_by_id($id){
        global $db;

        $sql = "SELECT * FROM posts ";
        $sql .= "WHERE id = {$id}";

        $result = mysqli_query($db, $sql);
        confirm_result_set($result);

        $record = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        return $record;

    }

?>