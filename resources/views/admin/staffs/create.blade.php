@extends('admin.layouts.app-page')
@section('title', 'nhân viên')
@section('content')
<div class=" container">
        <h3 class="text-center my-5"> Tạo nhân viên mới</h3>
        <form action="{{route('staffs.store')}}" method="POST">
            @csrf

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Mã số</label>
                <input type="text" class="form-control" name="staff_number" value="{{$staffNumber}}" readonly>
                
             
            </div>

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Số điện thoại nhân viên</label>
                <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Tên nhân viên</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" >

                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Năm sinh</label>
                <input type="text" class="form-control" name="birth" value="{{old('birth')}}">
                @error('birth')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <p class="">Giới tính</p>
                <div class="d-flex">
                    <input type="radio" class="me-2 form-check-input" value="Nam" name="gender" {{ old('gender') == 'Nam' ? 'checked' : '' }}>
                    <label class="form-label me-4">Nam</label>
                    <input type="radio" class="me-2 form-check-input" value="Nữ" name="gender" {{ old('gender') == 'Nữ' ? 'checked' : '' }}>
                    <label class="form-label me-4">Nữ</label>
                </div>
                 @error('gender')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Địa chỉ</label>
                <textarea name="address" class="form-control" cols="30" rows="6" spellcheck="false">{{ old('address') }}</textarea>

                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="my-3 mt-5 d-flex justify-content-between">
                
                <a href="{{route('staffs.index')}}" class="btn btn-primary text-white text-center"
                style="padding: 15px 30px; font-size: 1.25rem;">Quay lại</a>

                <button type="submit" name="submit" class="btn btn-primary text-white text-center"
                style="padding: 15px 45px; font-size: 1.25rem;">Tiếp</button>

            </div>

        </form>
    </div>
@endsection