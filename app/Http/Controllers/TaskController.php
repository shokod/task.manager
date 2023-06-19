<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class TaskController extends Controller
{
 
  public function index( Request $request)
  {
    $tasks = QueryBuilder::for(Task::class)
    ->allowedFilters('is_done')
    ->paginate();

    return new TaskCollection($tasks);
  }
  // return single task resource
  public function show(Request $request, Task $task)

  {
    return new TaskResource($task);
  }

  public function store(StoreTaskRequest $request)
  {
     $validated = $request->validated();
     $task = Task::create($validated);
     
     return new TaskResource($task);
     
  }

  public function update(UpdateTaskRequest $request, Task $task)

  {
      $validated = $request->validated();
      
      $task->update($validated);
      
      return new TaskResource($task);
  }

  public function destroy(Request $request, Task $task)
  {
    $task->delete();

    return response('Record deleted successfully!'); 
  }
}
