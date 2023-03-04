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
$posts->delete();

    }
//مستقیم id  حذف کردن بر اساس 
    public function update1()
    {
        Posts::destroy(3);
    }

    //select all
    public function update2()
    {
        $posts = Posts::where('title' , 'show')->delete();


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


}
