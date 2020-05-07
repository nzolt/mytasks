@extends('index')

@section('content')
    <div  class="mt-4">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="col col-lg-2">Title</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->title }}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
        </table>
    </div>
    <div>{{ $tasks->links() }}</div>
@endsection
