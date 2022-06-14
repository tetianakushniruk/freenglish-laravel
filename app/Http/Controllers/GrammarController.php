<?php 

namespace App\Http\Controllers;

use App\Models\GrammarSection;
use Illuminate\Http\Request;

class GrammarController extends Controller{
    private $topics = [
        "verb_to_be" => "Verb to be",
        "modal_can" => "Modal “Can”",
        "present_simple" => "Present Simple Tense",
        "present_continuous" => "Present Continuous Tense",
        "future_simple" => "Future Simple Tense",
        "past_simple" => "Past Simple Tense",
        "past_continuous" => "Past Continuous Tense",
        "present_perfect" => "Present Perfect Tense",
        "be_going_to" => "“Be going to”",
    ];

    public function show_info($topic){
        $data = GrammarSection::with(['examples', 'formations', 'formulas'])->where('topic', $this->topics[$topic])->first();
        return view('grammar_info', ['data' => $data]);
    }
}

?>