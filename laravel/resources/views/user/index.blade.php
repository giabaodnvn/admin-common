@extends('user.layoutsUser.defaultUser')
@section('title', 'Người dùng ')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thông tin người dùng</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    @include('_includes.preloader')
@endsection