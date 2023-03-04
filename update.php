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
    public function update()
    {
  $posts = Posts::find(2);
  $posts->title = 'started titel';
  $posts->userid = 2;
$posts->save();

    }

    //پیدا کردن بر اساس id حالت دوم
    public function update1()
    {
        Posts::where('title' , 'lavason')->update([
            'title'=> 'tutle2',
            'user_id'=>2
        ]);
    }

    public function update2()
    {
        $posts = Posts::find(3);
        $posts->update([
            'title'=> 'tutle3',
            'user_id'=>2
        ]);
        

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


}
