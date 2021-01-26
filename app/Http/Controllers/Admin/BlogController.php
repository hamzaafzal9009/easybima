<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Blog;
use App\Category;
use Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function getCategories(){
        $categories = Category::orderBy('id','desc')->get();
        if($categories){
            return response()->json(['categories', $categories],200);
        }else{
            return response()->json(['status', 'Categories Not Found'],403);
        }
    }
 
    public function getBlogs(){
        $blogs = Blog::with('categories','user')->orderBy('id', 'desc')->get();
        if ($blogs) {    
            return response()->json(['blogs', $blogs],200);
        }else{
            return response()->json(['status', 'Blogs Not Found'],403);
        }
        
    }

    public function storeCategory(Request $requese){
        $name = $requese->name;
        $cat = Category::create([
            'c_title' => $name
        ]);

        return response()->json(['category'=> $cat], 200);
    }

    public function updateCategory(Request $request)           {
        $title = $request->name;
        $id = $request->id;
        $cat  = Category::where('id', $id)->first();
        $cat->c_title = $title;
        $cat->save();


        return response()->json(['category'=> $cat], 200);
    }

    public function deleteCategory(Request $request){
        $id = $request->id;
        $cat = Category::where('id', $id)->first();

        $cat->delete();
        return response()->json(['category'=> $cat], 200);
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Blog::select('b_slug')->where('b_slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }

    public function createSlug($title, $id = 0)
    {
        $slug = Str::slug($title);
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }

    public function createBlog(Request $request){

        $exploded = explode(',', $request->image);
        $decoded = base64_decode($exploded[1]);

        if (str_contains($exploded[0], 'jpeg')) 
            $extension = 'jpg';
        else
            $extension = 'png';

        $fileName = str_random().'.'.$extension;
        $path = public_path().'/upload/'.$fileName;
        file_put_contents($path, $decoded); 
        // $imagePath = 'http://localhost:8000/upload/' + $fileName;
        // return $fileName;

        $blog = new Blog();
        $blog->b_title = $request->title;
        $blog->b_content = $request->content;
        $blog->b_slug = $this->createSlug($request->title);
        $blog->b_thumbnail = $fileName;
        $blog->user_id = Auth::id();
        $blog->b_img = $imagePath;      

        $save = $blog->save();


        if ($save) {
            $blog->categories()->attach($request->categories);
            return response()->json(['status', 'Blog Created Successful'],200);
        }else{
            return response()->json(['status', 'Unable to Create Blog'],401);
        }
    }

    public function updateBlog(Request $request){
        
            $blog = Blog::where('id', $request->blog_id)->first();

            if ($request->image != null) {

                $exploded = explode(',', $request->image);
                $decoded = base64_decode($exploded[1]);

                if (str_contains($exploded[0], 'jpeg')) 
                    $extension = 'jpg';
                else
                    $extension = 'png';

                $fileName = str_random().'.'.$extension;
                $path = public_path().'/upload/'.$fileName;
                file_put_contents($path, $decoded); 
                $imagePath = 'http://localhost:8000/upload/' + $fileName;
                $blog->b_thumbnail = $imagePath;
                $blog->b_img = $imagePath;   
            }

        $blog->b_title = $request->title;
        $blog->b_content = $request->content;
        $blog->b_slug = $this->createSlug($request->title);
        $blog->user_id = Auth::id();
        $save = $blog->save();

        if ($save) {
            if ($request->categories != null) {
                $blog->categories()->sync($request->categories);
            }
            return response()->json(['status', 'Blog Created Successful'],200);
        }else{
            return response()->json(['status', 'Unable to Create Blog'],401);
        }
    }

    public function deleteBlog(Request $request){
        $blog = Blog::where('id', $request->blog_id)->first();
        if($blog->delete()){
            return response()->json(['status', 'Blog Deleted Successful'], 200);
        }else{
            return response()->json(['status', 'Cannot be deleted at this moment.'], 200);
        }
    }
}
