<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Nette\Utils\Image;

class AliController extends Controller
{
    public  function creatMyinfo(){
        $gets=Type::all();
        return view('auth.alogin', compact('gets'));


    }


        public function getAllInfo()
        {
            $getall = Test::with('type')
                ->where('user_id', auth()->id())
                ->get();
            return view('get-all-info', compact('getall'));
        }


    public function storemyinfo(Request $request)
    {
        $validatedData=$request->validate(
         [  'name'=>'required',
             'type_id'=>'required',
             'time'=>'required'
]);
        $validatedData['user_id']=auth()->id();
          $type=Type::find($validatedData['type_id']);
         $type->tasks()->create(['name'=>$validatedData['name']
             ,'user_id'=>$validatedData['user_id']
             ,'time'=>$validatedData['time']]);
         return redirect()->route('all');
    }
 public function NewTasks(){
     $news = Test::with('type')
         ->where('time','>',Carbon::now())
         ->where('user_id', auth()->id())
         ->get();
     return view('tasks-new',compact('news'));
 }
 public function createTaskend(){
     $news = Test::with('type')
         ->where('time','<=',Carbon::now())
         ->where('user_id', auth()->id())
         ->get();
     return view('end-tasks',compact('news'));

 }
    public function ifComplete($id){
        $geet=Test::find($id);
        $geet->update(
            [
                'is_completed'=>true
            ]       );
        return redirect()->back();
    }
    public function deleteInfo($id){
        $deet=Test::find($id);
        $deet->delete();
        return redirect()->back();
    }
    public function show(){
        return view('show');
    }
    public function gettype(){
        $gets=Type::all();
        return view('auth.login',compact('gets'));
    }
}
