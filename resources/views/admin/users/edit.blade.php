<x-admin-layout>
    <x-slot name="title">
        - ایجاد کاربر
    </x-slot>
    <div class="p-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="input1" class="form-label">نام و نام کاربری</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="input1" value="{{$user->name}}">
                                @error('name')
                                    <div class="text-danger mt-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="input2" class="form-label">ایمیل</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="input2" value="{{$user->email}}">
                                @error('email')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Select1" class="form-label">سطح کاربری</label>
                                <select id="Select1" class="form-select @error('role') is-invalid @enderror" name="role" value="{{$user->role}}">
                                    <option selected>انتخاب کنید ...</option>
                                    <option value="admin" @if($user->role === 'admin') selected @endif>مدیر سایت</option>
                                    <option value="author" @if($user->role === 'author') selected @endif>نویسنده</option>
                                    <option value="user" @if($user->role === 'user') selected @endif>کاربر عادی</option>
                                </select>
                                @error('role')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت کاربر جدید</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
