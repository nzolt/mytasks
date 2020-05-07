@extends('index')

@section('content')
    <div  class="mt-4">
        <div class="form-row">
            <div class="col mt-4">
                <p>{{ $task->title }}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="col mt-4">
                <p>{{ $task->description }}</p>
            </div>
        </div>
        <div class="form-row">
            <form action="/task/complete" method="post">
                @csrf
                <input type="hidden" name="ida" value="{{ $task->id }}">
                <button type="submit" class="btn btn-primary btn-sm ml-5">Complete</button>
            </form>
            <form action="/task/reject" method="post">
                @csrf
                <input type="hidden" name="idr" value="{{ $task->id }}">
                <button type="submit" class="btn btn-secondary btn-sm ml-5">Reject</button>
            </form>
        </div>
    </div>
@endsection
