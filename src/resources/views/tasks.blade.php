@extends('index')

@section('content')
    <div  class="mt-4">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="col col-lg-2">Title</th>
                <th scope="col" class="col-md-auto">View</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->title }}</th>
                    <td>
                        <a href="/task/{{ $task->id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>{{ $tasks->links() }}</div>
@endsection
