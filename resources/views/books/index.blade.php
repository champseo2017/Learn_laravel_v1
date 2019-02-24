@extends('layouts.app')
@section('content')

<div class="card-body">
    <table class="table table-striped">
    <tr>
    <th>ลำดับ</th>
    <th>รหัส</th>
    <th>ชือหนังสือ</th>
    <th>ราคา</th>
    <th>หมวดหนังสือ</th>
    </tr>
   @foreach ($books as $book)
   <tr>
    <td>{{ $rank++ }}</td>
    <td>{{ $book->id }}</td>
    <td>{{ $book->title }}</td>
    <td>{{ number_format($book->price,2)}}</td>
    <td>{{ $book->typebooks->name }}</td>
    </tr>
   @endforeach
    </table>
   <br>
   {!! $books->render() !!}
    </div>

@endsection