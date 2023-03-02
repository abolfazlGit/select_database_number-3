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
    public function store(posts $posts)
    {

        //حالت اول
        $post = new Posts;
        $post->title = 'satart show';
        $post->user_id = 10;
        $post->save();

        //حالت دوم
        $user = new Posts([
            'title' => 'shwow',
            'user_id' => 12
        ]);
        $user->save();


        //حالت سوم
        $user = Posts::make([
            'title' => 'shwow',
            'user_id' => 12
        ]);
        $user->save();


        //حالت چهارم
        $user = Posts::create([
            'title' => 'shwow',
            'user_id' => 12
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


}
