@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-6 w-100 col-6">
            <a href="{{route('admin.tag.create')}}" class="btn btn-primary">Добавить</a>
        </div>
        <div class="col-12 pt-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Теги:</h3>
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
                            <th>{{$tag->id}}</th>
                        </tr>
                        <tr>
                            <th>Название</th>
                            <th>{{$tag->title}}</th>
                        </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection
