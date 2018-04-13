@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="col-12">
    <div class="page-header">
        <h1 class="page-title">
            {{ $title }}
        </h1>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="h1 m-0">20</div>
                    <div class="text-muted mb-4">Создано заявок (за сегодня)</div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="h1 m-0">15</div>
                    <div class="text-muted mb-4">Закрыто заявок (за сегодня)</div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="h1 m-0">5</div>
                    <div class="text-muted mb-4">На исполнении заявок (за сегодня)</div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="h1 m-0">65</div>
                    <div class="text-muted mb-4">Кол-во пользователей</div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="h1 m-0">25000</div>
                    <div class="text-muted mb-4">Сумма  (на сегодня)</div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="h1 m-0">5</div>
                    <div class="text-muted mb-4">Новых </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
