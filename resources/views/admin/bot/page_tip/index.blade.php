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
                                <select class="form-control" name="page_key" required>
                                    @foreach ($ar_page as $k=>$v)
                                        <option value="{{ $k }}" {{ $request->page_key == $k ? 'selected' : '' }}>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        <th>Подсказка</th>
                        <th>Категория</th>
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
                            <td>{{ $i->note }}</td>
                            <td>{{ isset($ar_page[$i->page_key]) ? $ar_page[$i->page_key] : 'Нет' }}</td>
                            <td>{{ $i->created_at }}</td>
                            <td>{{ $i->updated_at }}</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-secondary btn-sm call_dialog_edit"
                                    data-val-page_key='{{ $i->page_key }}'
                                    data-val-note='{{ $i->note }}'
                                    data-val-id='{{ $i->id }}'>Изменить</a>
                                <a href="{{ action('Admin\Bot\BotPageTipController@getDelete', $i->id) }}"
                                    class="btn btn-secondary btn-sm">Удалить</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{ $items->links() }}
</div>


@include('admin.bot.page_tip.__include.dialog_edit')
@endsection


@section('js_block')
    @parent
    <script src="/admin/js/block/dialog_edit.js"></script>
@endsection
