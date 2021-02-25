@extends('admin.mainAdmin')

<!-- ส่วนของการเพิ่มข้อมูลสาขา -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('เพิ่มข้อมูลคำนำหน้าชื่อ') }}</div>

                <div class="card-body">
                    <!-- ส่งข้อมูลจากการเพิ่สาขาไปยัง controller major edit-->
                    <form method="POST" action="{{ route('prefix.store') }}">
                        @csrf



                        <div class="form-group row">
                            <label for="major_name" class="col-md-4 col-form-label text-md-right">{{ __('คำนำหน้าชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="prefix" type="text" class="form-control"  name="prefix" >
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                            เพิ่ม
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
</div>
@endsection
