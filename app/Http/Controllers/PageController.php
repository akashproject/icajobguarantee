<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index($slug)
    {
        $contentMain = Page::where('slug', $slug)->where('status', 1);
        $contentMain = $contentMain->firstOrFail();
        return view("page.".$contentMain->template,compact('contentMain'));
    }

}
