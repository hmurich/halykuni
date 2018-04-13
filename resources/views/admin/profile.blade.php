@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="row">
    <div class="col-6">
        <form action="{{ action('Admin\ProfileController@postIndex') }}" method="post" class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">ФИО</label>
                    <input type="text" class="form-control" name='name'  required value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Контакты</label>
                    <input type="text" class="form-control" name='contact'  required value="{{ $user->contact }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Адрес</label>
                    <input type="text" class="form-control" name='address'  value="{{ $user->address }}">
                </div>
            </div>
            <div class="card-footer text-right">
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary ml-auto">Отправить</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </form>
    </div>
    <div class="col-6">
        <form action="{{ action('Admin\ProfileController@postChangePass') }}" method="post" class="card">
            <div class="card-header">
                <h3 class="card-title">Смена пароля</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">Логин</label>
                    <input type="text" class="form-control" name="login" required value="{{ $user->login }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Пароль</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
            </div>
            <div class="card-footer text-right">
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary ml-auto">Отправить</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </form>

    </div>
</div>


@endsection
