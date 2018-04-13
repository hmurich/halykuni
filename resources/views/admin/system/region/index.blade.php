@extends('admin.layout')

@section('title', $title)

@section('content')


<div class="col-12">
    <form action="#filter" method="get">
        <fieldset class="form-fieldset ">
            <legend>Фильтр</legend>
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="По коду региона" name="sys_key" value="{{ $request->sys_key }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="По наименованию региона" name="name" value="{{ $request->name }}" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Отфильтровать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap">
                <thead>
                    <tr>
                        <th class="w-1">id</th>
                        <th>Код</th>
                        <th>Наименование</th>
                        <th>Тип</th>
                        <th>Активен</th>
                        <th>Изменен</th>
                        <th>Создан</th>
                        <th class="text-right">
                            <a href="javascript:void(0)"
                                class="btn btn-secondary btn-sm call_dialog_edit">Новый</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $i)
                        <tr>
                            <td><span class="text-muted">{{ $i->id }}</span></td>
                            <td>{{ $i->sys_key }}</td>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->is_settl ? 'Населенный пункт' : 'Область/Регион' }}</td>
                            <td>{{ $i->is_active ? 'Да' : 'Нет' }}</td>
                            <td>{{ $i->created_at }}</td>
                            <td>{{ $i->updated_at }}</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-secondary btn-sm call_dialog_edit"
                                    data-val-sys_key='{{ $i->sys_key }}'
                                    data-val-name='{{ $i->name }}'
                                    data-val-is_settl='{{ $i->is_settl }}'
                                    data-val-id='{{ $i->id }}'>Изменить</a>
                                <a href="{{ action('Admin\System\SysRegionController@getChangeActive', $i->id) }}"
                                    class="btn btn-secondary btn-sm">Сменить активность</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{ $items->links() }}
</div>


@include('admin.system.region.__include.dialog_edit')
@endsection


@section('js_block')
    @parent
    <script src="/admin/js/block/dialog_edit.js"></script>
@endsection
