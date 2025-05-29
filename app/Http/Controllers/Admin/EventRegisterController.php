<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEventRegisterRequest;
use App\Http\Requests\Admin\UpdateEventRegisterRequest;
use App\Models\EventRegister;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class EventRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventsregister = EventRegister::latest()->paginate(10);
        return view('admin.eventregister.index', compact('eventsregister'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eventregister.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRegisterRequest $request)
    {
        $input = $request->all();
        $input['image'] = $this->fileUpload($request, 'image');
        $eventregister =  EventRegister::create($input);
        $eventregister->update(['slug' => Str::slug($request->name)]);
        return redirect()->route('admin.eventsregister.index')->with('message', 'Created Successfully');
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
    public function edit(EventRegister $eventregister)
    {
        return view('admin.eventregister.edit', compact('eventregister'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRegisterRequest $request, EventRegister $eventregister)
    {
        $old_image = $eventregister->image;
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');

        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $input['slug'] = Str::slug($request->name);
        $eventregister->update($input);
        return redirect()->route('admin.eventsregister.index')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventRegister $eventregister)
    {
        $this->removeFile($eventregister->image);
        $eventregister->delete();
        return redirect()->route('admin.eventsregister.index')->with('message', 'Delete Successfully');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/images/';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/images/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
