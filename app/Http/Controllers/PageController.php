<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{

    public function getPage($slug = null)
    {
        $page = Page::where('slug', $slug)->where('status', 1);

        $page = $page->firstOrFail();

        return view($page->template)->with('page', $page);
    }

    public function aboutUs()
    {
        return view('page.about');
    }

    public function contactUs()
    {
        return view('page.contact');
    }

    

}
