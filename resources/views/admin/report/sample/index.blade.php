@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="#filter" method="get" class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Выберите период</label>
                            <select class="form-control">
                                <option>За все года</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Выберите квартал</label>
                            <select class="form-control">
                                <option>За все кварталы</option>
                                <option>1 квартал</option>
                                <option>2 квартал</option>
                                <option>3 квартал</option>
                                <option>4 квартал</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Месяц</label>
                            <select class="form-control">
                                <option>Все месяцы(в зависимости от квартала)</option>
                                <option>Январь</option>
                                <option>Ферваль</option>
                                <option>Март</option>
                                <option>Апрель</option>
                                <option>Май</option>
                                <option>Июнь</option>
                                <option>Июль</option>
                                <option>Август</option>
                                <option>Сентябрь</option>
                                <option>Октябрь</option>
                                <option>Ноябрь</option>
                                <option>Декабрь</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Выберите Департамент</label>
                            <select class="form-control">
                                <option>Сводный</option>
                                <option>Образования</option>
                                <option>Образования</option>
                                <option>Здравоохранения</option>
                                <option>Внутренних дел</option>
                                <option>Жилья</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Выберите Организацию</label>
                            <select class="form-control">
                                <option>Все (в зависимости от департамента)</option>
                                <option>Школа №22</option>
                                <option>Школа №31</option>
                                <option>ЕНУ</option>
                                <option>Поликлинника №7</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Тип</label>
                            <select class="form-control">
                                <option>Общий</option>
                                <option>Информация о результатах контрольных мероприятий</option>
                                <option>Информация о результатах мониторинга качества оказания государственных услуг</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Пункт</label>
                            <select class="form-control">
                                <option>Общий (в зависимости от Типа)</option>
                                <option>Количество проведенных контрольных мероприятий, всего из них:</option>
                                <option>Количество объектов контрольных мероприятий, всего из них:</option>
                                <option>Количество выявленных нарушений, всего, из них:</option>
                                <option>Количество нарушений, по итогам которых приняты меры по восстановлению нарушенных прав услугополучателей:</option>
                                <option>Количество лиц, восстановивших нарушенные права при получении государственных услуг:</option>
                                <option>Количество выявленных в ходе контрольных мероприятий нарушений сроков рассмотрения жалоб:</option>
                                <option>Количество наложенных дисциплинарных взысканий по итогам контрольных мероприятий, всегоиз них:</option>
                                <option>Количество лиц, привлеченных к дисциплинарной ответственности, всего из них:</option>
                                <option>Количество выработанных рекомендаций по итогам контрольных мероприятий, всего из них:</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer text-right">
                <div class="row">
                    <div class="col-md-4">
                        <a href="?type=diagram"  class="btn btn-primary btn-block">Отобразить в виде диаграммы</a>
                    </div>
                    <div class="col-md-4">
                        <a href="?type=table"  class="btn btn-primary btn-block">Отобразить в виде таблицы</a>
                    </div>
                    <div class="col-md-4">
                        <a href="?type=map"  class="btn btn-primary btn-block">Отобразить в виде карты</a>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </form>
    </div>
</div>
@if ($request->has('type') && $request->get('type') == 'diagram')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Отчетный период за 1 квартал 2017 года.</h3>
                </div>
                <div class="card-body">
                    <div id="container" style="width: 100%; height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
@elseif ($request->has('type') && $request->get('type') == 'map')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Отчетный период за 1 квартал 2017 года.</h3>
                </div>
                <div class="card-body">
                    <div id='map' style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
@elseif ($request->has('type') && $request->get('type') == 'table')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Отчетный период за 1 квартал 2017 года.</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @include('admin.report.sample.__include.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!--
    <h4></h4>
    <button class="btn btn-success"></button>

    <div class="page-header">
        <h1 class="page-title">
            {{ $title }}
        </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="container" style="width: 100%; height: 400px;"></div>
        </div>
    </div>



</div>
<br>
 <h3>Проблемы, выявленные системой</h3>
 <div class="col-md-12">
                    <div class="row">

   <h4> Количество жалоб на качество оказанных государственных услуг <font color="red"><b>превышает допустимый коэффициент</b></font> за период с января 2018 по март 2018 года <font color="blue">в сфере оказания медицинских услуг</font></h4>
   <button class="btn btn-success js_show_on_map_spec">Посмотреть на карте</button>

    <h4> В организации "Поликлинника № 1 города Астаны" <font color="red"><b>имеется недопустимое количество</b></font> необоснованных отказов за период с февраля 2018 по март 2018 года <font color="blue">в сфере оказания медицинских услуг</font></h4> <button class="btn btn-success js_show_on_map_spec">Посмотреть на карте</button>


     <h4> Количество поданных жалоб в "Средняя школа № 5 города Астаны" <font color="red"><b>превысило допустимый коэффициент</b></font> за период с января 2018 по март 2018 года <font color="blue"></font></h4> <button class="btn btn-success js_show_on_map_spec">Посмотреть на карте</button>

    </div>
</div>

<div id='map' style="width: 100%; height: 300px;"></div>

-->
@endsection


@section('js_block')
    @parent
    <script type="text/javascript" src="//api-maps.yandex.ru/2.0/?load=package.standard&amp;lang=ru-RU" ></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="/admin/js/block/dialog_edit.js"></script>
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
               text: 'Отчет о работе местного исполнительного органа по внутреннему контролю за качеством оказания государственных услуг'
            },
            xAxis: {
                categories: ['Январь', 'Февраль', 'Март']
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
