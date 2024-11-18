<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FaqCategory;
use App\Models\Faq;

class FaqCategoryController extends Controller
{
    //
    public function index()
    {
        try {

            $faqCategory = FaqCategory::all();
            $faqs = Faq::all();
            return view('administrator.faq-categories.index',compact('faqCategory','faqs'));

        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }

    public function add() {
        $faqs = Faq::all();
        return view('administrator.faq-categories.add',compact('faqs'));
    }

    public function show($id)
    {
        try {
            $faqCategory = FaqCategory::find($id);
            $listCategory = FaqCategory::all();
            $faqs = Faq::all();
            return view('administrator.faq-categories.show',compact('faqCategory','listCategory','faqs'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'status' => 'required',
                'utm_campaign' => 'required',
                'utm_source' => 'required',
            ]);

            if($data['faq_category_id'] <= 0){
                $category = FaqCategory::create($data);
            } else {
                
                $category = FaqCategory::findOrFail($data['faq_category_id']);
                $category->update($data);
            }

            if(isset($data['faq']) && !empty($data['faq'])){
                $faqs = Faq::select("id","category_id")->whereIn('id',$data['faq'])->get();
                dd($faqs);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
 
    public function delete($id) {
        $course = FaqCategory::findOrFail($id);
        $course->delete();
        return redirect('/administrator/faq-categories');
    }
}
