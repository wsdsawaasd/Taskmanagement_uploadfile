<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TaskController extends Controller
{
    public function index()
    {
        //Lấy ra toàn bộ các task từ database thông qua truy vấn bằng Eloquent
        $tasks = Task::all();

        // Trả về view index và truyền biến tasks chứa danh sách các task
        return view('index', compact('tasks'));
    }
    public function create(){
        return view('add');
    }
    public function store(Request $request){
        $task = new Task();
        $task->title = $request->inputTitle;
        $task->content = $request->inputContent;
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $task->image = $file;
        } else {
            $fileName = $request->inputFileName;
            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = "$fileName.$fileExtension";
            $task->image = $newFileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);

        }
        $task->save();
        Session::flash('success', 'create success');
        return redirect()->route('tasks.index');

    }
}
