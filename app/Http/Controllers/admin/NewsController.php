<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function gallery() {
        $newsItems = News::all();
        return view('frontend.index', compact('newsItems'));
    }

    public function index()
    {
        $news = News::all();
        return view('backend/news/index', compact('news'));
    }

    public function add()
    {
        $news = News::all();
        return view('backend/news/add', compact('news'));
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('backend/news/edit', compact('news'));
    }

    public function insert(Request $request)
    {
        $news = new News();
        $news->name = $request->name;
        $news->detail = $request->detail;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/backend/product/', $filename);
            $news->image = $filename;
        } else {
            $news->image = 'null';
        }
        $news->save();
        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return redirect('admin/news/index');
    }

    public function update(Request $request, $id)
    {
        // Find the existing news record or fail
        $news = News::findOrFail($id);

        // Update fields
        $news->name = $request->input('name');
        $news->detail = $request->input('detail');

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Generate a new filename
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();

            // Move the file to the 'public/backend/product/' directory
            $request->file('image')->move(public_path() . '/backend/product/', $filename);

            // Update the image path in the database
            $news->image = $filename;
        }
        // If no new image is provided, the old image remains unchanged

        // Save the updated record
        $news->save();

        // Provide feedback and redirect
        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return redirect()->route('admin.news.index');
    }

    public function delete($id)
    {
        $news = News::find($id);
        File::delete(public_path() . '/backend/product/' . $news->image);
        $news->delete();
        alert()->success('Successfully Deleted', 'ลบข้อมูลสำเร็จ');
        return redirect('admin/product/index');
    }
}
