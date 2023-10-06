@extends('admin.layouts.main')

@section('content')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Главная</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- Пользователи -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$dataMassiv['userCount']}}</h3>

                            <p>Пользователи</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-users"></i>
                        </div>
                        <a href="{{route('admin.user.index')}}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Посты -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$dataMassiv['postCount']}}</h3>

                            <p>Посты</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-regular fa-bookmark"></i>
                        </div>
                        <a href="{{route('admin.post.index')}}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Категории -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$dataMassiv['categoryCount']}}</h3>

                            <p>Категории</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-th-list"></i>
                        </div>
                        <a href="{{route('admin.category.index')}}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Теги -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$dataMassiv['tagCount']}}</h3>

                            <p>Теги</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-tags"></i>
                        </div>
                        <a href="{{route('admin.tag.index')}}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
