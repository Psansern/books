@extends('admin.mainAdmin')
@section('content')
<div class="container">
<h1>hello show major</h1>

<div class="card mt-3">
    <table class="table">

    <tr>
        <td><b> สาขาวิชา</b></td>
    </tr>
@foreach ($major as $item)
<tr>
    <td><a href="{{ route('course.create') }}"> {{$item->major_name }}</a></td>
    <td>{{ $item->id }}</td>
</tr>
@endforeach
</table>

@endsection
