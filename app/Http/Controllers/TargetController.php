<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target;

class TargetController extends Controller
{
    public function index()
    {
        $target =Target::all();
        dd( 
            $target
        );
        return view('target.index', compact("target"));
    }
    public function store(Request $request)
    {
        
        $newdata= Target::create($request->all());
        dd( 
            $newdata
        );
        return $newdata;
        
    }
    public function destroy(Target $target)
    {   
     
        $target->delete();
        return "xoa ok";
    }
    public function update(Request $request, Target $target)
    {
        $target->update($request->all()); 
        return "update thanh cong"; 
    }
    public function show(Target $target)
    {
        return response()->json(['data' => $target]); 
    }

}
