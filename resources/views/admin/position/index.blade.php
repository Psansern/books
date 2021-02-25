@extends('admin.mainAdmin')

<!-- ส่วนของการเพิ่มข้อมูลตำแหน่งทางวิชาการ -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('เพิ่มข้อมูลตำแหน่งวิชาการ ') }}</div>

                <div class="card-body">
<form action="" method="POST">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="position_name" class="col-md-3 col-form-label text-md-left">{{ __('ชื่อตำแหน่งวิชาการ') }}</label>

        <div class="col-md-6">
            <input id="position_name" type="text" class="form-control"  name="position_name" >

        </div>

    </div>
    <div class="form-group row">
        <label for="position_name" class="col-md-3 col-form-label text-md-left">{{ __('ชื่อย่อตำแหน่ง') }}</label>

        <div class="col-md-6">
            <input id="position_short_name" type="text" class="form-control"  name="position_short_name" >

        </div>

    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-success">
                        เพิ่มข้อมูล
            </button>
            <button type="reset" class="btn btn-danger">
                ยกเลิก
    </button>
        </div>
    </div>
</form>
            </div>
        </div>
 </div>
</div>

@endsection
