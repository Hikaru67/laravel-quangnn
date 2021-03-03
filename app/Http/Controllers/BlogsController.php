<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // Return all list blog in database
    public function index()
    {
        return Blog::all();
    }

    // Return result of find blog by id
    public function show($id)
    {
        return Blog::find($id);
    }

    // Return result of action create a blog
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $blog = Blog::create($request->all());

        return response()->json($blog, 201);
    }

    // Return result of action update a blog
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return response()->json($blog, 200);
    }

    // Return result of action delete a blog
    public function delete($id): \Illuminate\Http\JsonResponse
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return response()->json(null, 204);
    }
}
