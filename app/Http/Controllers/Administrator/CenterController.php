<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\State;
use App\Models\City;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CenterController extends Controller
{

    public $_statusOK = 200;
    public $_statusErr = 500;

    public function index() {
        try {
            $centers = Center::all();
            return view('administrator.centers.index',compact('centers'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            $states = State::all();
            $courseCategories = CourseType::all();
            return view('administrator.centers.add',compact('states','courseCategories'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id) {
        try {
            $courses = Course::all();
            $center = Center::findorFail($id);
            $states = State::all();
            $cities = City::where('state_id', $center->state_id)->orderBy('name', 'asc')->get();
            return view('administrator.centers.show',compact('center','states','cities','courses'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'courses' => 'required',
                'description' => 'required',
                'state_id' => 'center_pincode',
                'state_id' => 'required',
                'lat' => 'required',
                'lng' => 'required',
            ]);
            $data['courses'] = json_encode($data['courses']);
            if($data['center_id'] <= 0){
                Center::create($data);
            } else {
                $center = Center::findOrFail($data['center_id']);
                $center->update($data);
            }

            // Update Faq Meta
            if (isset($data['faq']) && $data['faq']!='' ) {

                $data['faq'] = json_encode($data['faq']);
                $faq = DB::table('faq_meta')->select('id')->where('model','Center')->where('model_id',$center->id)->first();
                if($faq === null){
                    DB::table('faq_meta')->insert(['model'=>'Center','model_id'=>$center->id,'faqs'=>$data['faq']]);
                } else {
                    DB::table('faq_meta')->where('id', $faq->id)->update(['faqs'=>$data['faq']]);
                }
                
            }

            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function getCitiesByStateId(Request $request){
        try {
            $data = $request->all();
            $cities = City::where('state_id', $data['state_id'])->orderBy('name', 'asc')->get();
            return response()->json($cities,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function gallery($id){
        try {
            $gallery = DB::table('gallery')->where("center_id",$id)->get();
           
            return view('administrator.centers.gallery',compact('gallery','id'));       
        } catch(\Illuminate\Database\QueryException $e){
        }     
    }

    public function saveGallery(Request $request) {
        try {
            $data = $request->all();
            $request->validate([
                'file' => 'required|mimes:jpeg,png,jpg,gif,svg,doc,docx,pdf,mp4,m3u8,flv,wmv,avi,mov,3gp',
            ]); 
            // Check is file exist        
            if (!$request->hasFile('file')) {
                return false;
            }

            $today = date("Y-m-d");
            $fileName = $this->rename(str_replace(" ","-",strtolower($request->file->getClientOriginalName())));
            $path = Storage::disk('public')->putFileAs($today,$request->file('file'), $fileName);

            //File successfully upload
            if (!$path) {
                return false;
            }

            $imageType = array("jpeg","png","jpg","webp");
            if(in_array($request->file->extension(), $imageType)){
                $image = Image::make($request->file('file')->getRealPath());
                $dimension = $image->width().'x'.$image->height();
                if($image->width() >= 768){
                    $this->resizeMobile('profile',$fileName,$request);
                }
                $image->resize(120, 120)->save(public_path('upload/'.date("Y-m-d")).'/'."thumb_".$fileName);
            }
            
            $fileArray = array(
                'name' => current(explode('.',$request->file->getClientOriginalName())),
                'type' => $request->file->getMimeType(),
                'filename' => $fileName,
                'alternative' => "",
                'caption' => "",
                'description' => "",
                'extension' => $request->file->extension(),
                'size' => number_format((float)($request->file->getSize()/1024), 2, '.', ''),
                'dimension' => ($dimension)?$dimension:'', 
                'path' => config('constant.relativeMediaPath').'/'.$today,
            );  

            Media::create($fileArray);
            return response()->json($fileArray,$this->_statusOK);
            //return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            //var_dump($e->getMessage()); 
        }
    }

    public function resizeMobile($profile,$fileName,$request){
        $config = config('constant.imageSize.'.$profile);
        $image = Image::make($request->file('file')->getRealPath());
        $width = (768 * $image->width()/1920);
        
        $image->resize($width, $width, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('upload/'.date("Y-m-d")).'/'."mobile_".$fileName);
    }

    public function rename($filename){
        if(!Storage::disk('public')->exists(date("Y-m-d").'/'.$filename)){
            return $filename;
        } else {
            if($this->counter > 1){
                $filenameArr = explode("-",$filename);
                $filenameArr['0'] = $this->counter;
                $filename = implode("-",$filenameArr);
            } else {
                $filename = $this->counter.'-'.$filename;
            }
            $this->counter++;
            return $this->rename($filename);
        }
    }

    public function search(Request $request){
        try {
            $data = $request->all();
            $media = Media::where('name', 'like', '%' . $data['keyword'] . '%')
                    ->orWhere('filename', 'like', '%' . $data['keyword'] . '%')
                    ->get();
            $a = '';
            foreach($media as $value){
                $a .= '<a href="javascript:void(0)" class="image-thumbnail">';
                $a .= '<img src="'.getSizedImage('thumb',$value->id).'" alt="'.$value->alternative.'" style="width:100%">';
                $a .= '</a>';
            } 
            return $a;
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
        
    }

    public function pincode($id){
        try {

            $center = Center::findOrFail($id);
            return view('administrator.centers.pincode',compact('center'));       
        } catch(\Illuminate\Database\QueryException $e){
        }     
    }

    public function savePincode(Request $request) {
        try {


            $data = $request->all();
            $request->validate([
                'pincode' => 'required|mimes:csv,txt',
            ]); 
            
            // Check is file exist        
            if (!$request->hasFile('pincode')) {
                return false;
            }

            $csv = $request->file('pincode');
            $file = fopen($csv, "r");
            while (($pincodeArray = fgetcsv($file, 10000, ",")) !==FALSE ) {
                //Checking Duplicate                
                if (!DB::table('pincodes')->select('id')->where('center_id',$data['center_id'])->where('name',$pincodeArray[0])->exists()) {
                    $pincodeArray['city_id'] = $data['city_id'];
                    $pincodeArray['center_id'] = $data['center_id'];               
                    $pincodeArray['name'] = $pincodeArray[0];
                    unset($pincodeArray[0]);
                    DB::table('pincodes')->insert($pincodeArray);
                }
            }

            fclose($file);  
            return redirect('/administrator/view-center/'.$data['center_id'])->with('message', 'Pincode uploaded successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $center = Center::findOrFail($id);
        $center->delete();
        return redirect('/administrator/centers');
    }
}
