<?php


/**
 * crete User function to manupulate user table
 * 
 * @version 1.0
 * @package pbp-blog-site
 */
final class Users{

    public static function get_username( $user_id ){
        global $users, $app;
        $result = '';
        // get name sql query
        $get_sql = "SELECT username FROM $users WHERE id = :id";
        $statement = $app->prepare( $get_sql );
        $statement->bindParam( ':id', $user_id, PDO::PARAM_STR );
        
        // execute the query
        $statement->execute();

        while( $row = $statement->fetch(PDO::FETCH_ASSOC) ){
            $result = $row['username'];
        }
        return $result;

    }
}

