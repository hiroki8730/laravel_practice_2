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
            @if ($errors->has('msg'))
            <tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>
            @endif
            <tr><th>Message: </th><td><input type="text" name="msg" autocomplete="off" value="{{ old('msg') }}"></td></tr>
            <tr><th><td><input type="submit" value="send"></td></th></tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2017 tuyano
@endsection