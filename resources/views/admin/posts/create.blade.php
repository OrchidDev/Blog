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
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="input1" name="title">
                                @error('title')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="input2" class="form-label">نام انگلیسی نوشته</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="input2" name="slug">
                                @error('slug')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="input3" class="form-label">انتخاب دسته</label>
                                <select id="input3" class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                                    <option selected disabled>انتخاب کنید ... </option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="input4" class="form-label">آپلود عکس</label>
                                <input type="file" class="form-control @error('pic') is-invalid @enderror" id="input4" name="pic" accept="image/*">
                                @error('pic')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="Textarea1" class="form-label">متن نوشته</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="editor" rows="10" name="content"></textarea>
                                @error('content')
                                <div class="text-danger mt-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت نوشته</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    ckfinder: {
                        uploadUrl: '{{route('editor.upload').'?_token='.csrf_token()}}'
                    },
                    language: {
                        content: 'ar'
                    }
                })
                .then( editor => {
                    console.log( editor );
                })
                .catch( error => {
                    console.error( error );
                })
        </script>
    </x-slot>
</x-admin-layout>
