@extends('admin.mainAdmin')


@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="row">
  <div class="col-lg-6 col-lg-offset-1">
    <a class="btn btn-primary" href="{{ route('prefix.create') }}">เพิ่มข้อมูล</a>
  </div>
</div>
<div class="card mt-6">
<table class="table">
    <thead class="table table-success table-striped">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">คำนำหน้า</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($pfix as $prefix)


      <tr>
        <th scope="row">{{ $prefix->id }}</th>
        <td>{{ $prefix->prefix }}</td>
        <td>
            <form action="{{ route('prefix.destroy',$prefix->id) }}" method="POST">

            <a class="btn btn-success" href="#" role="button">แก้ไข</a>
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-danger">ลบ</button>
            </form>
        </td>


      </tr>
      @endforeach
    </tbody>

  </table>

</div>
{!! $pfix->render() !!}
@endsection
