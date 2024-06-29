<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Hash;    
class TodoController extends Controller 
{
    public function index(Request $req){
        $todo = new todo();
        $todo->name=$req->name;
        $todo->email=$req->email;
        $imagePath = null;
        if ($req->hasFile('image')) {
            $imagePath = $req->file('image')->store('images', 'public');
            $imagePath = basename($imagePath); // Save only the filename
        }
        $todo->image = $imagePath;
        $todo->password=Hash::make($req->password);
        $todo->save();
        return redirect('todo');
    }
    public function showalldata(){
        $todo=todo::all();
        return view('index',compact('todo'));
    }
    public function deletetodo($id){
        $todo = todo::find($id);
        $todo->delete();
        return redirect()->route('index');
    }
    public function updateget(string $id){
        $todo=todo::find($id);
        return view('update',compact('todo'));

    }

    public function updatepost($id,Request $req){
        $todo =todo::find($id);
        $todo->name=$req->name;
        $todo->email=$req->email;
        $todo->password=Hash::make($req->password);
        $todo->save();
        return redirect('todo');
    }
}
