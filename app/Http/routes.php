<?php
use App\Task;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});*/

//Route::get('/','mainController@get_index');
//Route::get('about','mainController@get_about');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    /*
     * Show tasks
     */
    Route::get('/', function () {
        $tasks = Task::OrderBy('created_at','asc')->get();
        
        return view('tasks', ['tasks'=> $tasks]);
    });

    /*
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
        $task = new Task;
        $task->name = $request->name;
        $task->comment = $request->comment;
        $task->save();
        
        return redirect('/');
    });

    /*
     * Delete Task
     */
    Route::delete('/task/{task}', function (Task $task) {
        
    });
});
