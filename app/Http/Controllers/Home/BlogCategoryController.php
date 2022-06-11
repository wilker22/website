<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function allBlogCategory()
    {
        $blogcategory =  BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all', compact('blogcategory'));
    }

    public function addBlogCategory()
    {
        return view('admin.blog_category.blog_category_add');
    }

    public function storeBlogCategory(Request $request)
    {
        $request->validate([
            'blog_category' => 'required'
        ],
        [
            'blog_category.required' => 'Blog Category name is Required!'
        ]);

        BlogCategory::insert([
            'blog_category' => $request->blog_category
        ]);

        $notification = [
            'message' => 'Blog category inserted successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function editBlogCategory($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit', compact('blogcategory'));
    }

    public function updateBlogCategory(Request $request)
    {
        $blogCategory = BlogCategory::findOrFail($request->id);
        $blogCategory->update([
            'blog_category' => $request->blog_category
        ]);

        $notification = [
            'message' => 'Blog category updated successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function deleteBlogCategory($id)
    {
        BlogCategory::findOrFail($id)->delete();

        $notification = [
            'message' => 'Blog category removed successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.blog.category')->with($notification);

    }
}
