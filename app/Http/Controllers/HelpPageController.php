<?php

namespace App\Http\Controllers;

use App\HelpPage;
use Illuminate\Http\Request;

class HelpPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $pages = HelpPage::all();
        return view('backend.home', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if(isset($input['is_live'])) {
            $input['is_live'] = 1;
        } else {
            $input['is_live'] = 0;
        }
        HelpPage::create($input);
        return  redirect()->route('home')->with(["alert-type"=>"success","message"=>"Page created successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HelpPage  $helpPage
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $page = HelpPage::findOrFail($id);
        return view('backend.page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HelpPage  $helpPage
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $page = HelpPage::findOrFail($id);
        return view('backend.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HelpPage  $helpPage
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $pageId = $request->page_id;
        $input = $request->all();
        if(isset($input['is_live'])) {
            $input['is_live'] = 1;
        } else {
            $input['is_live'] = 0;
        }
        HelpPage::findOrFail($pageId)->update($input);
        return  redirect()->route('home')->with(["alert-type"=>"success","message"=>"Page updated successfully"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HelpPage  $helpPage
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        HelpPage::findOrFail($id)->delete();
        return  redirect()->route('home')->with(["alert-type"=>"success","message"=>"Deleted successfully"]);

    }

    public function uploadpicture(Request $request){
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
