<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $params = array(
            'id' => 1,
            'title' => 'Новая задача',
            'description' => 'Описание задачи…',
            'created_at' => '2021-01-17 19:19:47',
            'updated_at' => '2021-01-17 19:19:47',
        );
        return view( 'todo.todo', $params);
        //$todos = ToDo::paginate();
        //$todos = DB::table('database\database.sqlite')->paginate(1);

       /* return view(
            'todos',
            [
                'todos' => $todos
            ]
        );*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Todo::create([
            'title' => 'Новая задача',
            'description' => 'Описание задачи ...',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
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
        $params = array(
                 'title' => 'Стишок',
                 'var1' => 'Мы едем, едем, едем.',
                 'var2' => 'В далекие края...',
              );
        //$param = request->all();
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
}
