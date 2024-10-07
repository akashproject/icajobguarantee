<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\FaqCategory;

class FaqController extends Controller
{
    public function index()
    {
        try {
            $faqs = Faq::all();
            return view('administrator.faq.index',compact('faqs'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {   
        $faqCategory = FaqCategory::all();
        return view('administrator.faq.add',compact('faqCategory'));
    }

    public function show($id)
    {
        try {
            $faq = Faq::findOrFail($id);
            $faq->category_id = json_decode($faq->category_id);
            //dd($faq);
            $faqCategories = FaqCategory::all();
            return view('administrator.faq.show',compact('faq','faqCategories'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'question' => 'required',
                'answer' => 'required',
                'status' => 'required',
            ]);
            $data['category_id'] = (isset($data['category_id']))?json_encode($data['category_id']):array();
            if($data['faq_id'] <= 0){
                Faq::create($data);
            } else {
                $faq = Faq::findOrFail($data['faq_id']);
                $faq->update($data);
            }
            return redirect()->back()->with('message', 'FAQ updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect('/administrator/faqs');
    }
}

