<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMediaCoverageRequest;
use App\Http\Requests\Admin\UpdateMediaCoverageRequest;
use App\Models\MediaCoverage;
use Illuminate\Http\Request;

class MediaCoverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediacoverages = MediaCoverage::latest()->paginate(10);
        return view('admin.mediacoverage.index', compact('mediacoverages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mediacoverage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaCoverageRequest $request)
    {
        $input = $request->all();
        MediaCoverage::create($input);
        return redirect()->route('admin.mediacoverages.index')->with('message', 'Created Successfully');
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
    public function edit(MediaCoverage $mediacoverage)
    {
        return view('admin.mediacoverage.edit', compact('mediacoverage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaCoverageRequest $request, MediaCoverage $mediacoverage)
    {
        $input = $request->all();
        $mediacoverage->update($input);
        return redirect()->route('admin.mediacoverages.index')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaCoverage $mediacoverage)
    {
        $mediacoverage->delete();
        return redirect()->route('admin.mediacoverages.index')->with('message', 'Delete Successfully');
    }
}
