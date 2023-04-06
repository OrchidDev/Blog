<x-admin-layout>
    <x-slot name="title">
        - نمایه کاربر
    </x-slot>
    <div class="p-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-3 offset-md-4 mb-5">
                            <figure>
                                <img src="{{ auth()->user()->getProfileUrl() }}" alt="">
                            </figure>
                            <label for="input1" class="form-label">عکس نمایه</label>
                            <input type="file" class="form-control" id="input1" name="profile" accept="image/*">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="input1" class="form-label">نام و نام کاربری</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}" id="input1">
                                @error('name')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="input2" class="form-label">ایمیل</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" {{ auth()->user()->email }} id="input2">
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
                        </div>
                        <button type="submit" class="btn btn-primary">به روز رسانی نمایه</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
