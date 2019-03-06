<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
class ImageController extends Controller
{
 	public function index()
 	{
 		$img = Image::make(public_path("memetemplates/temp_020D3462-8D50-9995-CD42-5CFF1A47130C_Sudden-Clarity-Clarence.jpg"));
 		$img->resize(600,600);
 		$img->rectangle(15, 15, 580, 580, function ($draw) {
		    $draw->background('rgba(255, 255, 255, 0.2)');
    		// $draw->background('rgba(255, 255, 255, 0.5)');
    		// $draw->border(2, '#000');
		});
 		// $img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
		$img->text('The quick brown fox', 120, 130, function($font) {
		    $font->size(150);
		    $font->color('#fdf6e3');
		    $font->align('center');
		    $font->valign('middle');
		    $font->angle(45);
		});
 		return $img->response();
 	}

 	
}
