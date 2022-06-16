<?php 

namespace App\Http\Controllers;

use App\Models\Suggestion;
use App\Models\SuggestionStatus;
use Illuminate\Http\Request;
use App\Models\VocabularyTopic;
use App\Models\VocabularyWord;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Void_;

class VocabularyController extends Controller{
    public function show_info($topic){
        $topic = VocabularyTopic::where('topic', $topic)->first();
        $wordIds = DB::table('vocabulary_topics_words')->where('vocabulary_topic_id', $topic->id)->pluck('vocabulary_word_id');
        $vocabulary = VocabularyWord::with(['definitions', 'examples'])->whereIn('id', $wordIds)->orderBy('word')->get();
        $view = 'vocabulary_info';
        if (in_array($topic->topic, ['Animals'])){
            $view = 'vocabulary_info_pictures';
        }
            
        return view($view, ['vocabulary' => $vocabulary]);
    }

    public function search(Request $request){
        $word = $request->word;
        $definitions = NULL;
        $examples = NULL;
        $words = VocabularyWord::with(['definitions', 'examples'])->get();
        $isFound = false;
        $view = 'search_result';
        foreach($words as $obj){
            if($obj->word == $word){
                $definitions = $obj->definitions;
                $examples = $obj->examples;
                $isFound = true;
                $wordId = VocabularyWord::where('word', $word)->first()->id;
                $topicId = DB::table('vocabulary_topics_words')->where('vocabulary_word_id', $wordId)->pluck('vocabulary_topic_id')->first();
                $topic = VocabularyTopic::where('id', $topicId)->first()->topic;
                if (in_array($topic, ['Animals'])){
                    $view = 'search_result_pictures';
                }
                break;
            }
        }
        return view($view, ['result' => $isFound, 
        'word' => $word, 'definitions' => $definitions, 'examples' => $examples]);
    }    

    public function suggest(Request $request){
        $suggestion = $request->suggestion;
        Suggestion::create(array(
            'suggestion' => $suggestion,
        ));
        return view('suggestion', ['suggestion' => $suggestion]);
    }  
}

?>