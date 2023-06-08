<?php

namespace App\Http\Controllers\Api;

//import Model "Post"
use App\Models\Post;

//import Resourse "PostResource"
use App\Http\Resources\PostResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        //get all posts
        $posts = Post::latest()->paginate(5);

        //return collection of posts as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }
}
