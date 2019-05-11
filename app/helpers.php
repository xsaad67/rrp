<?php

function validUrlImage($file) {
	try{
		$size = getimagesize($file);
   		return (strtolower(substr($size['mime'], 0, 5)) == 'image' ? true : false);  
	}catch(Exception $e){
		return false;
	}
   
}

function savingTags($tags,$id){
    $tags = explode(",",$tags);
    foreach($tags as $tag){
        $tag =  \App\Tag::firstOrCreate([ 'name'=>strtolower($tag) ]);
        if($tag->id){ $taggable = \App\Taggable::firstOrCreate(['tag_id'=>$tag->id,'taggable_id'=>$id,'taggable_type'=>"App\Post"]); }
    }
}



function newGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
    return $guidText;
}

 
function postImagePath($fileName){
    return asset("/images/memes/".$fileName);
}

function addWatermarkToImage($baseImage,$watermarkImage)
{
    $baseImage = Image::make(public_path($baseImage));
    $watermark = Image::make(public_path($watermarkImage))->resize(60,60);
    $baseImage->insert($watermark, 'bottom-left');
    return $baseImage;
}

function saveImgflip($url){

    $image = Image::make($url);
    $width = $image->width();
    $height = $image->height();
    return $image->crop($width,$height,null,-15)->response("png");
}



function setEnvironmentValue(array $values)
{

    $envFile = app()->environmentFilePath();
    $str = file_get_contents($envFile);

    if (count($values) > 0) {
        foreach ($values as $envKey => $envValue) {

            $str .= "\n"; // In case the searched variable is in the last line without \n
            $keyPosition = strpos($str, "{$envKey}=");
            $endOfLinePosition = strpos($str, "\n", $keyPosition);
            $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

            // If key does not exist, add it
            if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                $str .= "{$envKey}={$envValue}\n";
            } else {
                $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
            }

        }
    }

    $str = substr($str, 0, -1);
    if (!file_put_contents($envFile, $str)) return false;
    return true;

}

function getInitials($string)
{
    $expr = '/(?<=\s|^)[a-z]/i';
    preg_match_all($expr, $string, $matches);
    $result = implode('', $matches[0]);
    return strtoupper($result);
}



?>