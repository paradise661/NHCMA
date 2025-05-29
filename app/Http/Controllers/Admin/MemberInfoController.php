<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMemberInfoRequest;
use App\Http\Requests\Admin\UpdateMemberInfoRequest;
use App\Models\MemberInfo;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class MemberInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberinfos = MemberInfo::oldest('order')->paginate(10);
        return view('admin.memberinfo.index', compact('memberinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.memberinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberInfoRequest $request)
    {
        $input = $request->all();
        $input['image'] = $this->fileUpload($request, 'image');
        $memberinfo =  MemberInfo::create($input);
        $memberinfo->update(['slug' => Str::slug($request->title)]);
        return redirect()->route('admin.memberinfos.index')->with('message', 'Created Successfully');
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
    public function edit(MemberInfo $memberinfo)
    {
        return view('admin.memberinfo.edit', compact('memberinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberInfoRequest $request, MemberInfo $memberinfo)
    {
        $old_image = $memberinfo->image;
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');

        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $input['slug'] = Str::slug($request->title);
        $memberinfo->update($input);
        return redirect()->route('admin.memberinfos.index')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberInfo $memberinfo)
    {
        $this->removeFile($memberinfo->image);
        $memberinfo->delete();
        return redirect()->route('admin.memberinfos.index')->with('message', 'Delete Successfully');
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
