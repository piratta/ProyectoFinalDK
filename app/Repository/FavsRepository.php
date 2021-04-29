<?php

namespace App\Repository;

use Auth;
use App\Favs;

class FavsRepository
{
	protected $fav;
	protected $fillable = [
        'user_id','url','category'
    ];

	public function __construct(Favs $fav)
	{
		$this->fav = $fav;
	}

	public function add($user_id, $url, $category)
	{
		$this->fav->create([
			'user_id'=>$user_id,
			'url'=>$url,
			'category'=>$category
		]);
	}

	public function delete($id)
	{
		$this->fav->where('id','=',$id)->delete();
	}

	public function show($user_id)
	{
		$data = $this->fav->where('user_id','=',$user_id)->get();
		return $data;
	}

	public static function favsURL($url)
	{
		$user_id = Auth::user()->id;
		$data = Favs::where('user_id','=',$user_id)->where('url','=',$url)->exists();
		return $data;
	}
}
