<?php

namespace App\Http\Controllers\Admin;

use App\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class SizeController extends Controller
{
    public function index()
    {

    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'size' => 'required',
        ]);

        if ($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $size = Size::create($request->all());
            $size->save();
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $size = Size::findOrFail($id);

        $size->delete();

        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $size = Size::findOrFail($id);
        
    }
}
