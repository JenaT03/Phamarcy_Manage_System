@extends('admin.layouts.app-page')
@section('title', 'Tài khoản')
@section('content')
<div class=" container">
        <h3 class="text-center my-5"> Tài khoản mới</h3>
        <form action="{{route('users.store')}}" method="POST">
            @csrf
            <input type="hidden" name="user_type" value="{{ request('user_type') }}">
            
            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" value="{{ request('phone')}}" readonly>
                
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Mật khẩu</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" value="{{ request('phone')}}" >
                    <span class="input-group-text">
                        <i class="fa-regular fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                    </span>
                </div>                
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Nhập lại mật khẩu</label>
                <div class="input-group">
                    <input type="password" id="confirmPassword" name="password_confirmation" class="form-control" value="{{request('phone') }}">
                    <span class="input-group-text">
                        <i class="fa-regular fa-eye" id="toggleConfirmPassword" style="cursor: pointer;"></i>
                    </span>
                </div>
            </div>

            @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
            @enderror

            

            <div class="form-item col-md-6 offset-md-3 pb-3 my-3">
                <label class="form-label">Vai trò</label>
                <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0 text-dark py-4">{{$groupName}}</h6>
                            @foreach ($roles as $item)
                                <div class="form-check text-start">
                                    <input type="checkbox" id="{{$item->id}}" class="form-check-input border-1" name="role_ids[]"
                                        value="{{$item->id}}">
                                    <label class="form-check-label" for="{{$item->id}}" >{{$item->display_name}}</label>
                                </div>
                            @endforeach 
                        </div>
                </div>
                @error('role_ids')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
            

            

            <div class="my-3 d-flex justify-content-end">
                <button type="submit" name="submit" class="btn btn-primary text-white text-center"
                    style="padding: 15px 45px; font-size: 1.25rem;">Thêm</button>
            </div>

        </form>
</div>
@endsection