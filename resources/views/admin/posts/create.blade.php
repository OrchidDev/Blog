<x-admin-layout>
    <x-slot name="title">
        - ایجاد نوشته
    </x-slot>

    <div class="p-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="input1" class="form-label">عنوان نوشته</label>
                                <input type="text" class="form-control" id="input1" name="title">
                            </div>
                            <div class="col-md-6">
                                <label for="input2" class="form-label">نام انگلیسی نوشته</label>
                                <input type="text" class="form-control" id="input2" name="slug">
                            </div>
                            <div class="col-md-6">
                                <label for="input3" class="form-label">انتخاب دسته</label>
                                <select id="input3" class="form-select" name="category_id">
                                    <option selected disabled>انتخاب کنید ... </option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="input4" class="form-label">آپلود عکس</label>
                                <input type="file" class="form-control" id="input4" name="pic">
                            </div>

                            <div class="mb-3">
                                <label for="Textarea1" class="form-label">متن نوشته</label>
                                <textarea class="form-control" id="editor" rows="6" name="content"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت نوشته</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
