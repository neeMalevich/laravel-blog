@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-6 w-100 col-6">
            <form action="{{route('admin.category.update', $category->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Название категории</label>
                    <input name="title" type="text" class="form-control" value="{{$category->title}}">
                    @error('title')
                    <div class="text-danger">Это поле нужно заполнить</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Обновить"></input>
            </form>
        </div>
    </div>


@endsection
