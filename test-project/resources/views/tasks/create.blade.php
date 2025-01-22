@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Create Task') }}
                </div>

                <div class="card-body">
                    <form method="post" action="{{ route('tasks.store') }}">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">Title</label>
                            <input type="text" class="form-control" id="inputEmail4" name="title" placeholder="Title">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputPassword4">Description</label>
                            <input type="text" class="form-control" id="inputPassword4" name="description" placeholder="Description">
                          </div>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="inputState">Status</label>
                        <select id="inputState" name="status" class="form-control">
                            <option selected>Choose...</option>
                            <option value='pending'>Pending</option>
                            <option value='in_progress'>In Progress</option>
                            <option value='completed'>Completed</option>
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
