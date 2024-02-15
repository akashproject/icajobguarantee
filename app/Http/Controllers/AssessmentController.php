<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Cookie;
use Session;
use Mail;

class AssessmentController extends Controller
{

    public function instruction($assessment_id) {
        try {
            Session::put('assessment_id', $assessment_id);
            $contentMain = Assessment::where('id', $assessment_id)->first();
            return view('assessment.instruction',compact('contentMain'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
    }

    public function startAssessment() {
        try {
            $assessment_id = Session::get('assessment_id');
            $contentMain = Assessment::findOrFail($assessment_id);
            
            $quesionData = Question::where('assessment_id', $assessment_id);
            $quesions = $quesionData->get();
            $quesionAnswer = array();
            foreach ($quesions as $key => $quesion) {
                $quesionAnswer[$quesion->id] = array(
                    'id' => $quesion->id,
                    'question' => $quesion->question,
                    'description' => $quesion->description,
                    'score' => $quesion->score,
                );
                $answers = Answer::where('question_id', $quesion->id)->get();
                $quesionAnswer[$quesion->id]['answer'] = $answers;
            }
            $totalQuestion = $quesionData->count();
            return view('assessment.assessment',compact('contentMain','quesionAnswer','totalQuestion'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
    }

    public function submitAssessment(Request $request) {
        try {
            $requestData = $request->all();

            $requestData['question_answer'] = (isset($requestData['question_answer'])?$requestData['question_answer']:array());
            $answers = Answer::whereIn('id', $requestData['question_answer'])
            ->where("is_true",true)->get()->toArray();

            $score = 0;
            foreach ($answers as $key => $answer) {
                $score += Question::findOrFail($answer['question_id'])->score;
            }

            sscanf($requestData['taken_time'], "%d:%d:%d", $hours, $minutes, $seconds);
            $takenTime = isset($seconds) ? $hours * 3600 + $minutes * 60 + $seconds : $hours * 60 + $minutes;

            $timeLeft = ($requestData['total_duration']*60) - $takenTime;
            $requestData['taken_time'] = gmdate("i:s", $timeLeft);
            $requestData['report'] = json_encode($requestData['question_answer']);
            $requestData['lead_id'] = Session::get('lead_id');
            $requestData['attempt'] = count($requestData['question_answer']);
            $requestData['correct'] = count($answers);
            $requestData['accuracy'] = $this->cal_percentage(count($answers), $requestData['total_question']).'%';
            $requestData['score'] = $score;
            $requestData['percentile'] = $this->cal_percentage($score, $requestData['total_mark']).'%';
            
            if(Report::create($requestData)){
                return redirect('/assessments/thank-you');
            }
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
    }

    public function result() {
        try {
            $user = Session::get('user');

            $reports = DB::table('assessment_reports')
            ->join('assessments', 'assessments.id', '=', 'assessment_reports.assessment_id')
            ->select('assessment_reports.*','assessments.*','assessment_reports.id as report_id')
            ->where('assessment_reports.lead_id',$user->id)
            ->distinct()
            ->orderBy('assessment_reports.id', 'desc')
            ->get();
            return view('assessment.result',compact('reports'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }

    }

    public function viewResult($id) {
        try {
            $contentMain = DB::table('assessment_reports')
            ->join('assessments', 'assessments.id', '=', 'assessment_reports.assessment_id')
            ->select('assessment_reports.*','assessments.*','assessment_reports.id as report_id')
            ->where('assessment_reports.id',$id)
            ->first();

            $contentMain->enable_otp = 1;
            $answerSheet = json_decode($contentMain->report,true);
           
            $quesionData = Question::where('assessment_id', $contentMain->assessment_id);
            $quesions = $quesionData->get();
            $quesionAnswer = array();


            foreach ($quesions as $key => $quesion) {
                $quesionAnswer[$quesion->id] = array(
                    'id' => $quesion->id,
                    'question' => $quesion->question,
                    'description' => $quesion->description,
                    'score' => $quesion->score,
                    'selected_answer' => (isset($answerSheet[$quesion->id]))?$answerSheet[$quesion->id]:'',

                );
                $answers = Answer::where('question_id', $quesion->id)->get();
                $quesionAnswer[$quesion->id]['answer'] = $answers;
            }
            
            return view('assessment.view-result',compact('contentMain','quesionAnswer'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
    }

    public function thankyou(){
        try {
            $this->sendEmailAssessmentReport();
            return view('assessment.thank-you');
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
    }

    public function faq(){
        return view('assessment.faq');
    }

    public function sendEmailAssessmentReport(){
        try {
            $lead_id = Session::get('lead_id');
            $report = DB::table('assessment_reports')
            ->join('assessments', 'assessments.id', '=', 'assessment_reports.assessment_id')
            ->join('leads', 'leads.id', '=', 'assessment_reports.lead_id')
            ->select('assessment_reports.*','leads.*','assessment_reports.id as report_id')
            ->where('leads.id',$lead_id)
            ->first();
            
            $data['email'] = $report->email;
            $data['name'] = $report->name;

            $mail = Mail::send("email.assessmentScoreReport", $data, function ($m) use ($data) {
                $m->from("connect@icajobguarantee.com", "ICA Edu Skils");
                $m->to($data["email"], $data["name"])->subject(
                    "Assessment Report Summary"
                );
            });
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
    }

    private function cal_percentage($num_amount, $num_total) {
        $count1 = $num_amount / $num_total;
        $count2 = $count1 * 100;
        $count = number_format($count2, 0);
        return $count;
    }
}
