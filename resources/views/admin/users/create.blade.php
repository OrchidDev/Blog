<x-admin-layout>
    <x-slot name="title">
        - ایجاد کاربر
    </x-slot>
    <div class="p-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="input1" class="form-label">نام و نام کاربری</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="input1">
                                @error('name')
                                    <div class="text-danger mt-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="input2" class="form-label">ایمیل</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="input2">
                                @error('email')
                                    <div class="text-danger mt-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="input3" class="form-label">رمز عبور</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="input3">
                                @error('password')
                                    <div class="text-danger mt-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Select1" class="form-label">سطح کاربری</label>
                                <select id="Select1" class="form-select @error('role') is-invalid @enderror" name="role">
                                    <option selected disabled>انتخاب کنید ...</option>
                                    <option value="admin">مدیر سایت</option>
                                    <option value="author">نویسنده</option>
                                    <option value="user">کاربر عادی</option>
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
