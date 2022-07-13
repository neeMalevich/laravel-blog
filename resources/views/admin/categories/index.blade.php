@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-6 w-100 col-6">
            <a href="{{route('admin.category.create')}}" class="btn btn-primary">Добавить</a>
        </div>
        <div class="col-12 pt-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Категории:</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                   placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Действие</th>
                            <th>Изменить</th>
                            <th>Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td>
                                    <a href="{{route('admin.category.show', $category->id)}}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.category.edit', $category->id)}}">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                                </td>
                                <td>
                                    <form action="{{route('admin.category.destroy', $category->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="fas fa-trash" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection
