<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return Blogs::all();
    }

    public function show($id)
    {
        return Blogs::find($id);
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
//        dd($request->all());
        $blog = Blogs::create($request->all());

        return response()->json($blog, 201);
    }

    public function update(Request $request, $id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->update($request->all());

        return response()->json($blog, 200);
    }

    public function delete($id): \Illuminate\Http\JsonResponse
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();
        return response()->json(null, 204);
    }
}
