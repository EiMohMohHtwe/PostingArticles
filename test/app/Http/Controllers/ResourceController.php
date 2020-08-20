<?php

namespace App\Http\Controllers;
use App\Resource;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filedata = Resource::all()->toArray();

        return view('files.index', compact('filedata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("files.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $fileurl = $request->file->store('public/images');
            $filepath = $request->file->getRealPath();
            $filetype = $request->file->getClientOriginalExtension();

            $resource = new Resource();
            $resource->name = $filename;
            $resource->url = $fileurl;
            $resource->path = $filepath;
            $resource->type = $filetype;
            $resource->save();

            return redirect()->route('filelist.index');
        }
    }

    public function show($id)
    {
        $resources = Resource::find($id);

        return view('files.show', compact('resources'));
    }
}
