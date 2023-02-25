@extends('layouts.master')

@section('content')
    <form action="/create" method="POST">
        @csrf
        {{-- $table->text('name');
        $table->tinyInteger('age');
        $table->text('sex');
        $table->text('breed');
        $table->text('colour');
        $table->text('size'); --}}
        Name:
        <input name="name" type="text"><br>
        Age:
        <input name="age" type="text"><br>
        Sex:
        <input name="sex" type="text"><br>
        Breed:
        <input name="breed" type="text"><br>
        Colour:
        <input name="colour" type="text"><br>
        Size:
        <input name="size" type="text"><br>

        <button>send</button>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection