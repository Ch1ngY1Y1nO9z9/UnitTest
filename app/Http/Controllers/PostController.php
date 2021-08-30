<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::get();
        return $posts;
    }

    public function show(Request $request, $id)
    {
        $post = Posts::findOrFail($id);
        return $post;
    }

    public function store(Request $request)
    {
        Posts::create($request->all());

        return response()->noContent(Response::HTTP_CREATED);
    }
}
