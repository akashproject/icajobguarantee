<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Image;

class MediaController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;
    private $counter = 1;

    public function index()
    {
        try {
            $mediaPath = config('constant.mediaPath');
            $media = Media::all();
            return view('administrator.media.index',compact('mediaPath','media'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function save(Request $request) {
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

}
