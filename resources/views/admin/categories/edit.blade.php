<x-admin-layout>
    <div class="p-5">
        <div class="col-md-5 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان فارسی</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="Input1" name="name" value="{{$category->name}}">
                            @error('name')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Select1">دسته والد</label>
                            <select class="form-select" aria-label="Default select example" id="Select1" name="category_id">
                                <option selected disabled>انتخاب کنید ...</option>
                                @foreach($categoriese as $category)
                                    <option value="{{$category->id}}" @if($category->id === $category->category_id) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">ویرایش دسته</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
