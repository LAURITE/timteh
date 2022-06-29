<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Recipe; 
use Recipe_photo;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $recipes=Recipe::where('category_id','=',$id)->get();
return view('recipes',['category_id'=>$id,'recipes'=>$recipes]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)

    {
        $category = Category::findOrFail($id);
        return view('recipe_new', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $requestData=$request->all();
        $fileName=time().$request->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"]='/storage/'.$path;
        Recipe::create($requestData);

        // $recipe = new Recipe();
        // $recipe->file_path = $path;
//  $recipe->recipe_name = $request->recipe_name;
//  $recipe->category_id = $request->category_id;
//  $recipe->photo = $request->photo;
//  $recipe->category_id = $request->category_id;
//  $recipe->save();
 return redirect('recipe/category/' . $request->category_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function search(Request $request)
    // {
    //     if($request->isMethod('post')){
    //         $yesname=$request->get('yesname');
    //         $data=Recipe::where('recipe_name', 'LIKE', '%' .$yesname .'%');
    //     }
    //     return view('recipes', ['recipes'=>$data]);
    // }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('yesname');
        $nosearch = $request->input('noname');
    
        // Search in the title and body columns from the posts table
        $recipes = Recipe::query()
            ->where('product', 'LIKE', "%{$search}%")
            ->where('product', 'NOT LIKE', "%{$nosearch}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('recipes', compact('recipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_id = Recipe::findOrFail($id)->category_id;
 Recipe::findOrFail($id)->delete();
 return redirect('recipe/category/' . $category_id);
    }

public function updateRecipe($id)
{
    $recipe=Recipe::find($id);
    return view('recipeedit',['recipe'=>$recipe]);
}
public function finishUpdate(request $request){
    $recipe=Recipe::find($request->id);

    $recipe->recipe_name=$request->recipe_name;
    $recipe->product=$request->product;
    $recipe->recipe_steps=$request->recipe_steps;
    $recipe->save();
    return redirect('recipe/category/'. $recipe->category_id);

}
}