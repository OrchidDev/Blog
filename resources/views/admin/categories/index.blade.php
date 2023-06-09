<x-admin-layout>
    <x-slot name="title">
        - مدیریت دسته بندی
    </x-slot>
<div class="p-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">شناسه</th>
                                <th scope="col">عنوان فارسی</th>
                                <th scope="col">عنوان انگلیسی</th>
                                <th scope="col">دسته والد</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $row)
                                <tr>
                                    <th scope="row">{{$row->id}}</th>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->slug}}</td>
                                    <td>{{$row->getParentName()}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('categories.edit', $row->id) }}" class="me-3 text-dark"><i class="fa-light fa-edit"></i></a>
                                        <a href="" class="text-dark" onclick="event.preventDefault(); document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-light fa-trash"></i></a>
                                        <form id="trash-{{$row->id}}" action="{{ route('categories.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان فارسی</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="Input1" name="name">
                            @error('name')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">عنوان انگلیسی</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="Input2" name="slug">
                            @error('slug')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Select1">دسته والد</label>
                            <select class="form-select" aria-label="Default select example" id="Select1" name="category_id">
                                <option selected disabled>انتخاب کنید ...</option>
                                @foreach($categoriesp as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت دسته</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-admin-layout>
