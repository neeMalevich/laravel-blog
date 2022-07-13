@extends('admin.layouts.main')

@section('content')


    <div class="row">
        <div class="col-lg-6 col-6">
            <form action="{{route('admin.tag.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Название тега:</label>
                    <input type="text" name="title" class="form-control" placeholder="Введите название тега">
                </div>
                <button type="submit" class="btn btn-primary">Добавить тег</button>
            </form>
        </div>


    </div>

@endsection
