<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('backend/event/index', compact('event'));
    }

    public function add()
    {
        return view('backend/event/add');
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('backend/event/edit', compact('event'));
    }

    public function insert(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ]);

        // Create and save the event
        $event = new Event();
        $event->name = $request->name;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/backend/product/', $filename);
            $event->image = $filename;
        } else {
            $event->image = 'null';
        }
        $event->save();

        // Success message and redirect
        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return redirect('admin/event/index');
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image, optional for update
        ]);

        // Find the existing event record or fail
        $event = Event::findOrFail($id);

        // Update fields
        $event->name = $request->input('name');

        // Handle the file upload if a new image is provided
        if ($request->hasFile('image')) {
            // Generate a new filename
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();

            // Move the file to the 'public/backend/product/' directory
            $request->file('image')->move(public_path() . '/backend/product/', $filename);

            // Update the image path in the database
            $event->image = $filename;
        } else {
            // If no new image is provided, keep the old image
            // Optionally, you might want to handle a case where the old image should be deleted or preserved
        }

        // Save the updated record
        $event->save();

        // Provide feedback and redirect
        alert()->success('Successfully Updated', 'อัปเดทข้อมูลสำเร็จ');
        return redirect('admin/event/index');
    }

    public function delete($id)
    {
        $event = Event::find($id);
        $event->delete();
        alert()->success('Successfully Deleted', 'ลบข้อมูลสำเร็จ');
        return redirect('admin/event/index');
    }

}
