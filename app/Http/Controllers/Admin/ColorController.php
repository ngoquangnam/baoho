<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Color;

class ColorController extends Controller
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
            'color' => 'required',
        ], [

            'color.required' => 'vui lòng nhập màu sắc'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $color = Color::create($request->all());
            $color->save();
            return redirect()->back();
        }
    }

   	public function update(Request $request , $id)
   	{
   		$color = Color::findOrFail($id);
   		$color->color = $request->text;
   		$color->save();
   		return redirect()->back();
   	}

    public function delete($id)
    {
      $color = Color::findOrFail($id);

      $color->delete();

      return redirect()->back();
    }
}
