@extends('admin.layouts.main')

@section('content')


    <div class="row">
        <div class="col-lg-6 col-6">
            <form action="{{route('admin.tag.update', $tag->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Название тега:</label>
                    <input type="text" value="{{$tag->title}}" name="title" class="form-control" placeholder="Введите название тега">
                    @error('title')
                        <div class="text-danger">Это поле нужно заполнить</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Обновить тег</button>
            </form>
        </div>


    </div>

@endsection
