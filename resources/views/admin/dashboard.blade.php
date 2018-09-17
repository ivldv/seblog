@extends ('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="jumbotron">
                <p class="lead">Jumbo helper text</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p class="lead">Jumbo helper text</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p class="lead">Jumbo helper text</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p class="lead">Jumbo helper text</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a href="#"class="btn btn-light btn-block">Создать категорю</a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Категория </h4>
                <p class="plist-group-item-text">
                    Количество материалов
                </p>
            </a>
        </div>
        <div class="col-sm-6">
            <a class="btn btn-light btn-block" href="#" role="button">Создать материал</a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Материал </h4>
                <p class="plist-group-item-text">
                    Категория
                </p>
            </a>
        </div>

    </div>
</div>

@endsection