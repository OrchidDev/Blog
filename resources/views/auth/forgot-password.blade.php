<x-app-layout>
    <div class="container">
        <div class="col-md-6 offset-3" style="margin-top: 250px">
            <div class="card">
                <div class="card-header">
                    بازیابی رمز عبور
                </div>
                <div class="card-body">
                    @if(Session::has('status'))
                        <div class="alert alert-success mb-3" role="alert">
                            {{Session::get('status')}}
                        </div>
                    @endif
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="Email1" class="form-label">ایمیل</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="Email1" value="{{ old('email') }}" placeholder="ایمیل خود را وارد کنید">
                            @error('email')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">بازیابی رمز عبور</button>
                    </form>
                </div>
            </div>
            <div class="text-center mt-3">
                حساب کاربری ندارید؟ <a href="{{ route('register') }}" class="fw-bolder text-dark text-decoration-none">عضو شوید</a>
            </div>
        </div>
    </div>
</x-app-layout>
