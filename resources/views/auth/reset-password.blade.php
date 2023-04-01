<x-app-layout>
    <div class="container">
        <div class="col-md-6 offset-3" style="margin-top: 250px">
            <div class="card">
                <div class="card-header">
                    بازیابی رمز عبور
                </div>
                <div class="card-body">
                    <form action="{{ route('password.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="mb-3">
                            <label for="Email1" class="form-label">ایمیل</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="Email1" value="{{ old('email') }}" placeholder="ایمیل خود را وارد کنید">
                            @error('email')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Password1" class="form-label">رمز عبور</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="Password1" value="{{ old('password') }}" placeholder="رمز عبور قوی وارد کنید" autocomplete="new-password">
                            @error('password')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Password1" class="form-label">رمز عبور</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="Password1" value="{{ old('password_confirmation') }}" placeholder="تکرار رمز عبور" autocomplete="new-password">
                            @error('password_confirmation')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">تغییر رمز عبور</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
