<x-admin-layout>
    <x-slot name="title">
        - ویرایش نوشته
    </x-slot>

    <div class="p-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="input1" class="form-label">عنوان نوشته</label>
                                <input type="text" class="form-control" id="input1">
                            </div>
                            <div class="col-md-6">
                                <label for="input2" class="form-label">نام انگلیسی نوشته</label>
                                <input type="text" class="form-control" id="input2">
                            </div>
                            <div class="col-md-6">
                                <label for="input3" class="form-label">انتخاب دسته</label>
                                <select id="input3" class="form-select">
                                    <option selected>انتخاب کنید ... </option>
                                    <option>...</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="input4" class="form-label">آپلود عکس</label>
                                <input type="file" class="form-control" id="input4">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">متن نوشته</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت نوشته</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
