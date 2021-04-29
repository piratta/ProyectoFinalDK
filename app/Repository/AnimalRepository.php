<?php

namespace App\Repository;

use Auth;
use App\Repository\FavsRepository;
use Illuminate\Support\Facades\Log;

class AnimalRepository
{
	protected $fav;

	public function __construct(FavsRepository $fav)
	{
		$this->fav = $fav;
	}

	public static function validateUrl($url)
	{
		$info = pathinfo($url);
		$ext = $info['extension'];
		if($ext != 'mp4') {
			return true;
		}
		return false;
	}

	// public static function checkDuplicate($url)
	// {
	// 	$user_id = Auth::user()->id;
	// 	Log::info('animalrepo');
	// 	return $this->fav->favsURL($user_id, $url);
	// }
}
