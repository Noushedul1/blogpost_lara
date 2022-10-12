<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    function blog()
    {
        return view('blog');
    }
    // start for addblog 
    function addblog(Request $request)
    {
        $this->blog = new Blog();
        $this->blog->name = $request->name;
        $this->blog->email = $request->email;
        $this->blog->description = $request->description;
        $this->blog->save();
        return redirect()->back()->with('blogmsg', 'Blog successfully inserted');
    }
    // end for addblog 
}
