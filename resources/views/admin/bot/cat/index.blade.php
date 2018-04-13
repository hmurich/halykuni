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
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="По наименованию " name="name" value="{{ $request->name }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="parent_id" value="{{ $parent_id }}"/>
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
            <h3 class="card-title">{{ $title }} Категория - <b>{{ isset($ar_cat[$parent_id]) ? $ar_cat[$parent_id] : 'Базовая/Первичная'  }}</b></h3>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap">
                <thead>
                    <tr>
                        <th class="w-1">id</th>
                        <th>Наименование</th>
                        <th>Описание</th>
                        <th>Решение</th>
                        <th>Подсказка</th>
                        <th>Создан</th>
                        <th class="text-right">
                            <a href="javascript:void(0)"
                                class="btn btn-secondary btn-sm call_dialog_edit"
                                data-val-parent_id='{{ $parent_id }}'>Новый</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $i)
                        <tr>
                            <td><span class="text-muted">{{ $i->id }}</span></td>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->short_note }}</td>
                            <td>{{ $i->relDecision ? 'Есть' : 'Нет' }}</td>
                            <td>{{ $i->relAlert ? 'Есть' : 'Нет' }}</td>
                            <td>{{ $i->created_at }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                        Действие
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="?parent_id={{ $i->id }}"
                                            class="dropdown-item">Потомки</a>
                                        <a href="javascript:void(0)"
                                            class=" call_dialog_edit dropdown-item"
                                            data-modal='dialog_decision'
                                            @if ($i->relDecision)
                                                data-val-note='{{ $i->relDecision->note }}'
                                                data-val-short_note='{{ $i->relDecision->short_note }}'
                                                data-val-id='{{ $i->relDecision->id }}'
                                            @endif
                                            data-val-cat_id='{{ $i->id }}'>Решение</a>
                                        <a href="javascript:void(0)"
                                            class="call_dialog_edit dropdown-item"
                                            data-modal='dialog_alert'
                                            @if ($i->relAlert)
                                                data-val-note='{{ $i->relAlert->note }}'
                                                data-val-short_note='{{ $i->relAlert->short_note }}'
                                                data-val-id='{{ $i->relAlert->id }}'
                                            @endif
                                            data-val-cat_id='{{ $i->id }}'>Подсказка</a>
                                        <a href="javascript:void(0)"
                                            class=" call_dialog_edit dropdown-item"
                                            data-val-name='{{ $i->name }}'
                                            data-val-short_note='{{ $i->short_note }}'
                                            data-val-parent_id='{{ $i->parent_id }}'
                                            data-val-id='{{ $i->id }}'>Изменить</a>
                                        <a href="{{ action('Admin\Bot\BotCatController@getDelete', $i->id) }}"
                                            class=" dropdown-item">Удалить</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{ $items->links() }}
</div>


@include('admin.bot.cat.__include.dialog_edit')
@include('admin.bot.cat.__include.dialog_decision')
@include('admin.bot.cat.__include.dialog_alert')
@endsection


@section('js_block')
    @parent
    <script src="/admin/js/block/dialog_edit.js"></script>
@endsection
