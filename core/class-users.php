<?php

/**
 * crete User function to manupulate user table
 * 
 * @version 1.0
 * @package pbp-blog-site
 */
final class Users{



    /**
     * get value of the database
     *
     * @param [type] $column_name
     * @param [type] $id
     * @return $result
     */
    public static function get_value( $column_name, $id ){
        // set global variable
        global $users, $app;

        // set result as default value
        $result = '';

        // query
        $get_sql = "SELECT $column_name FROM $users WHERE id = :id";

        // prepare statement
        $stmt = $app->prepare( $get_sql );

        // bind the value
        $stmt->bindParam( ':id', $id, PDO::PARAM_INT );

        $stmt->execute();
        while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){
            $result = $row[$column_name];
        }

        return $result;

    }

    public static function get_id( $username ){
         // set global variable
         global $users, $app;

         // set result as default value
         $result = '';
 
         // query
         $get_sql = "SELECT id FROM $users WHERE username = :username";
 
         // prepare statement
         $stmt = $app->prepare( $get_sql );
 
         // bind the value
         $stmt->bindParam( ':username', $username, PDO::PARAM_STR );
 
         $stmt->execute();

         while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){
             $result = $row['id'];
         }
 
         return $result;
    }

    /**
     * get username from database
     *
     * @param [type] $user_id
     * @return void
     */
    public static function get_username( $user_id ){

       return self::get_value( 'username', $user_id );

    }

    /**
     * get user password from app_users table
     *
     * @param [type] $user_id
     * @return void
     */
    public static function get_password( $user_id ){
        return self::get_value( 'password', $user_id );
    }

    /**
     * get user email address from app_users table
     *
     * @param [type] $user_id
     * @return void
     */
    public static function get_email( $user_id ){
        return self::get_value( 'email', $user_id );
    }


    /**
     * create login method
     *
     * @param [type] $username
     * @param [type] $password
     * @return void
     */
    public static function login( $username, $password ){

        $get_user_id = self::get_id( $username );
        
        // database username
        $db_username      = self::get_username( $get_user_id );

        // database password
        $db_user_password = self::get_password( $get_user_id );


        if( $username === $db_username && $password === $db_user_password ){

            // create session authenticatation
            $_SESSION['authenticated'] = true;

            // set cookie for 15 days
            setcookie('authenticated', true, time() + (60*60*60*24*15), '/');

            header('Location: ../');
        }else{
            header('Location: ../login?error');
        }

    }

    /**
     * create authenticate user called
     * is_user_loged_in()
     *
     * @return boolean
     */
    public static function is_user_logged_in(){
        if( isset( $_SESSION['authenticated'] ) && $_COOKIE['authenticated'] == true ){
            return true;
        }
    }
    
    
}

