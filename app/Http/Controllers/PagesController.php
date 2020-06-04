<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Slide;

class PagesController extends Controller
{
    /**
     * Display the index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slides = Slide::select('cover_pic', 'title', 'created_at')->get();

        return view('index', compact('slides'));
    }
}
