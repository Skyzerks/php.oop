<?php
namespace App\Models;

use App\Models\Model;

class User extends Model
{
	protected $table = 'users';
	protected $id, $name, $email, $password, $is_admin, $vk_id;

	public function topics() {

//		$topics = Topic::select("SELECT * FROM `topics` INNER JOIN `` ");

//		TODO: show topics
    }

	public function posts() {
		$posts = Post::getByUser_id($_SESSION['user_id']);

		return $posts;
    }
	
}