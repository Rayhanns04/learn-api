<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\breakfast;

class pagiControllerAdmin extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $breakfasts = breakfast::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        } else {
            $breakfasts = breakfast::all();
        }
        return view('crud.index', ['breakfasts'=>$breakfasts]);
    }

    public function create(Request $request)
    {
        $breakfasts = breakfast::create([
            "url" => $request->url,
            "nama" => $request->nama,
            "desc" => $request->desc,
            "harga" => $request->harga,
        ]);

        return redirect('/breakfastMenu')->with('success', 'Your Data Has Been Inputed');
    }

    public function edit($id)
    {
        $breakfasts = breakfast::find($id);
        return view('crud/edit', ['breakfasts'=>$breakfasts]);
    }

    public function update(Request $request, $id)
    {
        $breakfasts = breakfast::where('id',$id)->update([
            "url" => $request->url,
            "nama" => $request->nama,
            "desc" => $request->desc,
            "harga" => $request->harga,
        ]);

        return redirect('/breakfastMenu')->with('success', 'Your Data Has Been Updated');
    }

    public function delete($id)
    {
        $breakfasts = breakfast::find($id);
        $breakfasts->delete();

        return redirect('/breakfastMenu')->with('success', 'Your Data Has Been Deleted');
    }
}
