<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class VocabularyController extends Controller{
    private $vocabulary = array(
        'airconditioner' => "an appliance that cools down the air in a home or building",
        'avalanche' => "a dangerous slide of snow down a mountain",
        'below freezing' => "temperature less than 0°C or 32°F",
        'blizzard' => "a storm with lots of snow and wind"
    );  

    public function show_array(){
        return view('vocabulary_info', ['vocabulary' => $this->vocabulary]);
    }

    public function search(Request $request){
        $word = $request->word;
        $definition = NULL;
        if (array_key_exists($word, $this->vocabulary)){
            $definition = $this->vocabulary[$word];
        }
        return view('search_result', ['word' => $word, 'definition' => $definition]);
    }    

    public function suggest(Request $request){
        $suggestion = $request->suggestion;
        return view('suggestion', ['suggestion' => $suggestion]);
    }  
}

?>