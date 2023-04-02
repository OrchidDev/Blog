<x-admin-layout>
    <x-slot name="title">
        - ایجاد کاربر
    </x-slot>
    <div class="p-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="input1" class="form-label">نام و نام کاربری</label>
                                <input type="text" class="form-control" id="input1">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="input2" class="form-label">ایمیل</label>
                                <input type="email" class="form-control" id="input2">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Select1" class="form-label">سطح کاربری</label>
                                <select id="Select1" class="form-select">
                                    <option selected>انتخاب کنید ...</option>
                                    <option value="admin">مدیر سایت</option>
                                    <option value="author">نویسنده</option>
                                    <option value="user">کاربر عادی</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت کاربر جدید</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
