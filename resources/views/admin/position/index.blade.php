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
    <a class="btn btn-primary" href="{{ route('position.create') }}">เพิ่มข้อมูล</a>
  </div>
</div>
<div class="card mt-6">
<table class="table">
    <thead class="table table-success table-striped">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">ชื่อตำแหน่ง</th>
        <th scope="col">ชื่อย่อ</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($Acposition as $Acpos)
      <tr>
        <th scope="row">{{ $Acpos->id }}</th>
        <td>{{ $Acpos->aca_position_th }}</td>
        <td>{{ $Acpos->aca_position_short_th }}</td>
        <td>
            <form action="{{ route('position.destroy',$Acpos->id) }}" method="POST">

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
{!! $Acposition->render() !!}
@endsection
