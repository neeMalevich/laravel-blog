@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-6">
            <form action="{{route('admin.post.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Название поста</label>
                    <input name="title" type="text" class="form-control">
                    @error('title')
                    <div class="text-danger">Это поле нужно заполнить</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Название описания поста</label>
                    <textarea id="summernote" class="form-control" name="content"></textarea>
                    @error('content')
                    <div class="text-danger">Это поле нужно заполнить</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Добавить превью</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Заменить</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Обновить</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Добавить пост</button>
            </form>
        </div>
    </div>


@endsection
