<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VocabularyWord;

class VocabularyController extends Controller{
    public function show_info(){
        $vocabulary = VocabularyWord::with(['definitions'])->get();
        return view('vocabulary_info', ['vocabulary' => $vocabulary]);
    }

    public function search(Request $request){
        $word = $request->word;
        $definitions = NULL;
        $vocabulary = VocabularyWord::with(['definitions'])->where('word', $word)->first();
        if ($vocabulary){
            $definitions = $vocabulary->definitions;
        }
        return view('search_result', ['word' => $word, 'definitions' => $definitions]);
    }    

    public function suggest(Request $request){
        $suggestion = $request->suggestion;
        return view('suggestion', ['suggestion' => $suggestion]);
    }  
}

?>