<?php

namespace App\Http\Controllers;

use App\Blog;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Get all blogs in the db
     * @return Blog[]
     */
    public function index()
    {
        return Blog::all();
    }

    /**
     * Get blog by id
     * @param string $id
     * @return Blog|null
     */
    public function show(string $id): ?Blog
    {
        return Blog::find($id);
    }

    // Return result of action create a blog

    /**
     * Add a blog to db
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $blog = Blog::create($request->all());

        return response()->json($blog, 201);
    }

    /**
     * Update blog by id
     * @param Request $request
     * @param string $id
     * @return JsonResponse
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return response()->json($blog, 200);
    }

    /**
     * Delete blog by id
     * @param string $id
     * @return JsonResponse
     */
    public function delete(string $id): JsonResponse
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return response()->json(null, 204);
    }
}
