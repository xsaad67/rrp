<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;

class WordController extends Controller
{
    public function index()
    {
	 	/*Flow --
	    	Create word file convert to Html
	    	Convert Html to Pdf
    	*/

	    $template = storage_path('app/public/temp1.docx');

    	if(file_exists($template)){
    		$templateProcessor = new TemplateProcessor($template);

            $testData = array(
                array('List'=>'list 1'),
                array('List'=>'list 2'),
                array('List'=>'List 3')
            );



   //  		$testData = array(
			//     array('Name'=>'Test Name 1', 'Value'=>123.45),
			//     array('Name'=>'Test Name 2', 'Value'=>223.45),
			//     array('Name'=>'Test Name 3', 'Value'=>323.45),
			//     array('Name'=>'Test Name End', 'Value'=>423.45),
			// );

   //  		$t=$templateProcessor->cloneBlock('CLONEME', 3,true,true,$testData);

            // $t=$templateProcessor->cloneBlock('LI', 3,true,true,$testData);
            // $php = new PhpWord();
    		// dd($t);
         
            $templateProcessor->setValue('Name','John Doe');
    		$file=$templateProcessor->saveAs(public_path('w/h.docx'));
            dd($file);

    	}
   

    	
    }

    public function edit()
    {
    	
    }
}
