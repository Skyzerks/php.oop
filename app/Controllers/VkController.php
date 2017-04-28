<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Framework\Routing;
use App\Models\{Section, Topic, Post};
use App\Models\User;
use App\Framework\View;
use App\Framework\Auth\Auth;
use App\Database\DB;
use App\Config;
class VkController extends Controller
{
    public function vkCallback()
    {
        $code = isset($_GET['code']) ? $_GET['code'] : null;
        $url = "https://oauth.vk.com/access_token?client_id={$this->config->get('vk_info.client_id')}&client_secret={$this->config->get('vk_info.client_secret')}&redirect_uri={$this->config->get('vk_info.redirect_uri')}&code=".$code;
//        var_dump( file_get_contents($url) );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $res = json_decode(curl_exec($ch), true);
        curl_close($ch);
        $accessToken =  $res['access_token'];
        $userId =  $res['user_id'];
        $userEmail =  $res['email'];

        $checkUser = User::getByEmail($userEmail);

        if(!isset($checkUser[0])){

            $url = "https://api.vk.com/method/users.get?user_id=".$userId."&fields=first_name,last_name&token=".$accessToken."&v=5.52";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $res = json_decode(curl_exec($ch), true)['response'][0];
            curl_close($ch);
            $user = new User();
            $user->setVk_id($userId);
            $user->setEmail($userEmail);
            $user->setName($res['first_name'] .' '. $res['last_name']);
//            var_dump( $user );
            $user->save();

        }

//        var_dump($checkUser[0]);
        Auth::setLoggedUser( $checkUser[0] );
        header('location: /');
        exit();
    }
}