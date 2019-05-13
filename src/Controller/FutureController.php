<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class FutureController
{
	public function number(){
		$number = random_int(0, 100);
		return new Response(
			'<html><body>'.$number.'</body></html>'
		);
	}
}