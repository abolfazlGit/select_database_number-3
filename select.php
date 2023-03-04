<?php

namespace App\Http\Controllers;

use App\Models\posts;

use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //پیدا کردن بر اساس id حالت اول
    public function index(posts $posts)
    {
        dd($posts);

    }

    //پیدا کردن بر اساس id حالت دوم
    public function index1()
    {
     posts::find(number_id);

    }

    //select all
    public function index2()
    {
        posts::all();

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


}
