@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{ action('Admin\Report\UploadController@postIndex') }}" method="post" class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">Период</label>
                    <select name="period" class="form-control">
                        <option value="0">За год</option>
                        <option value="0">За 1 квартал</option>
                        <option value="0">За 2 квартал</option>
                        <option value="0">За 3 квартал</option>
                        <option value="0">За 4 квартал</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Форма отчета</label>
                    <select name="report_type_id" class="form-control">
                        <option value="0">Сведения о результатах проведенных проверок</option>
                        <option value="0">Сводный отчет о проделанной работе ТД</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Отчет</label>
                    <input type="file" class="form-control" name="report_file">
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
