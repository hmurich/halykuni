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
    <div class="row">
        <div class="col-md-12">
            <div id="container" style="width: 100%; height: 400px;"></div>
        </div>
    </div>
</div>

@endsection

@section('js_block')
    @parent
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>

    <script>
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
           text: 'Отчет о работе местного исполнительного органа по внутреннему контролю за качеством оказания государственных услуг'
        },
        xAxis: {
            categories: ['1 квартал', '2 квартал', '3 квартал', '4 квартал']
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Количество проведенных контрольных мероприятий, всего из них:',
            data: [205, 312, 250, 100]
        }, {
            name: 'Количество объектов контрольных мероприятий, всего из них:',
            data: [150, 220, 270, 300]
        }, {
            name: 'Количество выявленных нарушений, всего, из них:',
            data: [320, 152, 230, 120]
        }]
        });

    </script>
@endsection
