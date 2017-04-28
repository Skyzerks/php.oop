<?php
namespace App\Framework\Auth;

use \Exception;
use App\Database\DB;
use App\Models\User;

class Auth implements AuthInterface
{

    private static $user;

    public static function login( Array $credentials ){

        $credentials['email'] ;
        $credentials['password'];

        $arguments = [$credentials['email'],md5($credentials['password'])];

        // DB select
       $res = DB::select("SELECT * FROM users WHERE `email` =? AND `password` = ?",$arguments);
        if(!empty($res)) {

            var_dump($res);

            $user = (new User())->hydrate($res);
            $_SESSION['user_id'] = $res[0]['id'];
            $_SESSION['user_name'] = $res[0]['user_name'];
            $_SESSION['is_admin'] = $res[0]['is_admin'];
            self::$user = $user;
            return true;
        }
        else return false;

    }
    public static function logout(){
        unset($_SESSION['user_id']);
    }

    public static function register( User $user ){
        $user->save();
    }

    public static function getLoggedUser(){
        if( self::$user ) {
            return self::$user;
        }
        else if( isset($_SESSION['user_id']) ) {
            self::$user = User::get( $_SESSION['user_id'] );
            return self::$user;
        }

        return null;
    }

    public static function setLoggedUser(User $user){
        self::$user = $user;
        $_SESSION['user_id'] = self::$user->getId();
    }

    public static function CheckAuthSession(){

    }
}