<?php

namespace App\Repository;

use Auth;
use App\Repository\FavsRepository;
use Illuminate\Support\Facades\Log;

class CovidRepository
{
	public static function countryList()
	{
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://covid-19-statistics.p.rapidapi.com/regions",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"x-rapidapi-host: covid-19-statistics.p.rapidapi.com",
				"x-rapidapi-key: d58ecd646amsh9dbcd02744d1812p1c95d2jsn9a71eca5e268"
			],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return "cURL Error #:" . $err;
		} else {
			return json_decode($response)->data;
		}
	}
}
