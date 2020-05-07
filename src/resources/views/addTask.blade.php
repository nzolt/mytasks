@extends('index')

@section('content')
    @php
      //dd($input);
    @endphp
    <div class="mt-4">
        <p class="font-weight-bold">Add new task</p>
        <form action="/task/create" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-row">
                <div class="col mt-4">
                    <label for="title">Task title</label>
                    <input type="text" name="title" required class="form-control" placeholder="* Title" value="{{ old('title') }}">
                    <span class="validity"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-4">
                    <label for="description">Task description</label>
                    <textarea name="description" class="form-control" placeholder="* Description" >{{ old('desription') }}</textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 mt-4">
                    <label for="date">Task date</label>
                    <input type="date" name="date"  max="{{ $minDate }}"  pattern="\d{4}-\d{2}-\d{2}" class="form-control" id="date" placeholder="* Date of task" value="{{ old('date') }}">
                    <span class="validity"></span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add task</button>
        </form>
    </div>
@endsection
