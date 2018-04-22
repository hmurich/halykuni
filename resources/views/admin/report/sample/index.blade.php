@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="col-12">
    <h4>Выберите тип отчета</h4>
    <select>
        <option>О работе местного исполнительного органа по внутреннему контролю за качеством оказания государственных услуг</option>
        <option>Сводный отчет о проделанной работе</option>
    </select>

    <h4>Выберите период</h4>
    <select>
        <option>2017-2018</option>
        <option>2016-2017</option>
        <option>2015-2016</option>
    </select>

<h4>Выберите сферу отношений</h4>
    <select>
        <option>Образование</option>
        <option>Медицина</option>
    </select>

<br><br>
    <button class="btn btn-success">Отобразить</button>

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
   <button class="btn btn-success">Посмотреть на карте</button>

    <h4> В организации "Поликлинника № 1 города Астаны" <font color="red"><b>имеется недопустимое количество</b></font> необоснованных отказов за период с февраля 2018 по март 2018 года <font color="blue">в сфере оказания медицинских услуг</font></h4> <button class="btn btn-success">Посмотреть на карте</button>


     <h4> Количество поданных жалоб в "Средняя школа № 5 города Астаны" <font color="red"><b>превысило допустимый коэффициент</b></font> за период с января 2018 по март 2018 года <font color="blue"></font></h4> <button class="btn btn-success">Посмотреть на карте</button>

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
