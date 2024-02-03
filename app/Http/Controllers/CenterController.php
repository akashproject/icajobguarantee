<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\State;
use App\Models\City;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\CourseType;
use App\Models\CenterCourse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CenterController extends Controller
{
    public function state($slug)
    {
        try {
            $contentMain = State::where('slug', $slug)->first();
            $centers = Center::where('state_id', $contentMain->id);
            $centers->where('status', 1);
            if(isset($_COOKIE['lng']) && isset($_COOKIE['lat'])){
                $centers->orderBy(DB::raw('POW((lng-'."22.707401".'),2) + POW((lat-'."88.387015".'),2)'));
            }
            $centers = $centers->get();
            //select * from `centers` where `state_id` = 35 and `status` = '1'
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $contentMain->id)->where('status', 1)->orderBy("name","asc")->get();
            return view('centers.index',compact('centers','states','contentMain','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function city($slug)
    {
        try {
            
            $contentMain = City::where('slug', $slug)->first();
            $state = State::where('id',$contentMain->state_id)->first();
            $centers = Center::where('city_id', $contentMain->id)->where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $contentMain->state_id)->where('status', 1)->orderBy("name","asc")->get();
            return view('centers.city',compact('centers','states','state','contentMain','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function viewCenters($slug)
    {
        try {
            $contentMain = Center::where('slug', $slug)->where('status', 1)->first();

            if ($contentMain === null) {
                return redirect('/centers');
            }

            $centerCourses = CenterCourse::where('center_id',$contentMain->id)->where('status',1)->get();

            $courseType = DB::table('course_type')
            ->join('courses', 'course_type.id', '=', 'courses.type_id')
            ->select('course_type.id as category_id','course_type.name as category','course_type.slug as slug')
            ->whereIn('courses.id', json_decode($contentMain->courses))
            ->distinct()
            ->orderBy('course_type.id', 'asc')
            ->get();

            $courses = DB::table('courses')
            ->join('course_type', 'course_type.id', '=', 'courses.type_id')
            ->select('courses.*','course_type.slug as categorySlug')
            ->whereIn('courses.id', json_decode($contentMain->courses))
            ->where('courses.status',1)
            ->get();

            $directoryPath = public_path('gallery/'.$contentMain->slug);
            $fileNames = [];
            if (File::isDirectory($directoryPath)) {
                $fileNames = File::files($directoryPath);
            }
            $galleryImg=[];

            foreach ($fileNames as $file) {
                $galleryImg[] = $contentMain->slug.'/'.pathinfo($file, PATHINFO_FILENAME).'.'.pathinfo($file, PATHINFO_EXTENSION);
            }

            //$courses = Course::where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $center = $contentMain->name;

            $directoryPath = 'u';

            $gallery = DB::table('gallery')->where("center_id",$contentMain->id)->get();


            return view('centers.view',compact('contentMain','center','courses','courseType','gallery','states','centerCourses','galleryImg'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e);
        }
       
    }

    public function getCitiesByStateId(Request $request){
        try {
            $data = $request->all();
            $cities = City::where('state_id', $data['state_id'])->orderBy('name', 'asc')->get();
            return response()->json($cities,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
        
        }
    }
}
