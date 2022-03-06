@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
    @endif
    <table>
        <form action="/hello" method="POST">
            {{ csrf_field() }}
            @if ($errors->has('name'))
            <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>name: </th><td><input type="text" name="name" autocomplete="off" value="{{ old('name') }}"></td></tr>
            @if ($errors->has('mail'))
            <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
            @endif
            <tr><th>mail: </th><td><input type="text" name="mail" autocomplete="off" value="{{ old('mail') }}"></td></tr>
            @if ($errors->has('age'))
            <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
            @endif
            <tr><th>age: </th><td><input type="text" name="age" autocomplete="off" value="{{ old('age') }}"></td></tr>
            <tr><th><td><input type="submit" value="send"></td></th></tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2017 tuyano
@endsection