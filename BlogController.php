<?php
namespace App\Http\Controllers\Admin;


class BlogController extends Controller
{

    public function index()
    {
        return view('blog.index');
    }
    public function view()
    {
        return view('blog.view');
    }
}