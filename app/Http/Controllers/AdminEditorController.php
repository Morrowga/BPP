<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Editor;
use Yajra\Datatables\Datatables;
class AdminEditorController extends Controller
{
    // public function __construct() {
    //     $this->middleware("auth:web,admin");
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("editor.index");
    }
    public function anyData()
    {
       return Datatables::of(Editor::query())->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("editor.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
             'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins', "unique:users"],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $editor = new Editor();
        $editor->name = $request->get("name");
        $editor->email = $request->get("email");
        $editor->password = \Hash::make($request->get("password"));
        $editor->save();
        return redirect()->route("editor.index");
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
    public function edit($id)
    {
        //
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
        //
    }
}
