<?php

namespace App\Http\Controllers;

use App\Pregnantweek;
use Illuminate\Http\Request;
use App\Post;
class SswController extends Controller
{
    /**
     * Show the application splash screen.
     *
     * @return Response
     */
    public function show()
    {
        return view('SSW/schwangerschaftswochen-uebersicht');
    }

    public function show_ssw($slug){

        $pregnantweek = Pregnantweek::findOrFail($slug);
        $posts = Post::all();

        return view('SSW/schwangerschaftswoche', compact('pregnantweek', 'posts'));
    }
}
