<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
//use App\Http\Controllers\DB;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = ToDo::paginate(); // или : $todo =  DB::table('to_dos')->paginate();
        return view('todo.todo', compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ToDo::create([
            'title' => 'Новая задача',
            'description' => 'Описание задачи ...',
        ]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    //public function show(ToDo $toDo)
    public function show()
    {
        $params = [
                 'title' => 'Стишок',
                 'var1' => 'Мы едем, едем, едем.',
                 'var2' => 'В далекие края...',
          ];
        return view('example.example', $params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function edit(ToDo $toDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToDo $toDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToDo $toDo)
    {
        //
    }

    public function find($id)
    {
        $todo = ToDo::find($id);
        return view(
            'todo.todoElement',
            [
                'todo' => $todo
            ]
        );
    }
}
