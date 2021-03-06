@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<table>
        <tr><th>Person</th><th>Board</th></tr>
        @foreach($items as $item)
        <td>{{$item->getData()}}</td>
        <tr>
            <td>@if ($item->board != null)
            {{$item->board->getData()}}
            @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection