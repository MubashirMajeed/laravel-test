@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Update Task') }}
                </div>

                <div class="card-body">
                    <form method="post" action="{{ route('tasks.update', $task->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">Title</label>
                            <input type="text" class="form-control" id="inputEmail4" name="title" value="{{ $task->title }}" placeholder="Title">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputPassword4">Description</label>
                            <input type="text" class="form-control" id="inputPassword4" name="description" value="{{ $task->description }}" placeholder="Description">
                          </div>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="inputState">Status</label>
                        <select id="inputState" name="status" class="form-control">
                            <option selected>Choose...</option>
                            <option value='pending' @if($task->status == 'pending') selected @endif>Pending</option>
                            <option value='in_progress' @if($task->status == 'in_progress') selected @endif>In Progress</option>
                            <option value='completed' @if($task->status == 'completed') selected @endif>Completed</option>
                        </select>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary mt-2">Create</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
