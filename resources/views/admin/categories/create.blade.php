@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-6">
            <form action="{{route('admin.category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Название категории</label>
                    <input name="title" type="text" class="form-control">
                    @error('title')
                        <div class="text-danger">Это поле нужно заполнить</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Добавить категорию</button>
            </form>
        </div>
    </div>


@endsection
