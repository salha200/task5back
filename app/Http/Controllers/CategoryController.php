<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        

                    $request->validate([
                        'name'=>['required','string'],
                                ]);
                                Category::create([
                                'name'=>$request->name,
                                ]);
                                return response()->json([
                                    'status'=>true
                                ]);
                }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category, string $id)
    {
        $request->validate([
            'name'=>['required','string'],
                    ]);
                    
    $category = Category::find($id);

    if (!$category) {
        return response()->json(['error' => 'category not found'], 404);
    }

    $category->update([
        'name'=>$request->name,
        ]);

    return response()->json($category);

                
           
                }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (!$category) {
            return response()->json(['error' => 'category not found'], 404);
        }
    
        $category->delete();
    
        return response()->json('category deleted');
    }
}
