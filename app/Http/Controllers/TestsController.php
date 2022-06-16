<?php 

namespace App\Http\Controllers;

use App\Models\GrammarSection;
use App\Models\TestsQuestion;
use App\Models\TestsTopic;
use Illuminate\Http\Request;

class TestsController extends Controller{
    private $topics = [
        "for_schools" => "For Schools",
        "general_eng" => "General English",
        "business_eng" => "Business English"
    ];

    public function show_info($topic){
        $topic = TestsTopic::where('topic', $this->topics[$topic])->first();
        $test = TestsQuestion::with(['options'])->where('tests_topic_id', $topic->id)->get();
        return view('tests_info', ['topic' => $topic->topic, 'test' => $test]);
    }

    public function test_check($topic, Request $request){
        $topic = TestsTopic::where('topic', $this->topics[$topic])->first();
        $test = TestsQuestion::with(['options'])->where('tests_topic_id', $topic->id)->get();
        $score = 0;
        foreach($test as $questions){
            if($request->input($questions->id) == $questions->answer)
                $score++;
        }
        return view('test_result', ['score' => $score.'/'.count($test), 
        'topic' => $topic->topic, 'test' => $test, 'request' => $request]);
    }
}

?>