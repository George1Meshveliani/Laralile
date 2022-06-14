@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <div class="container">
        <div class="row">
            <div class="col-3 p-2 pt-5">
                <img src="https://www.etondigital.com/wp-content/uploads/2019/05/laravel-blog.png" class="rounded-3">
            </div>
            <div class="col-9 p-2 pt-5">
                <div class="pl-3"><h1><strong>{{ 'Hello ' . $current_user->name }}</strong> </h1></div>
            </div>
            <div>
                <h1>here are all users:</h1>
{{--                {{ foreach() }}--}}
                <tr>
                    <th>

                    </th>
                </tr>
            </div>
        </div>
    </div>
@endsection
