<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use App\Models\User;

class FrontendController extends Controller
{
    public function index()
    {
        $event = Event::paginate(6); // Fetch all news items
        $newwy = News::paginate(4);
        return view('frontend.index', compact('event', 'newwy')); // Pass news items to index view
    }

    public function gallery()
    {
        $event = Event::paginate(12);
        return view('frontend.gallery', compact('event'));
    }

    public function news()
    {
        $bignew = News::all();
        return view('frontend.news', compact('bignew'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id); // Fetch the news item or throw a 404 error if not found
        return view('frontend.show', compact('event'));
    }

}
