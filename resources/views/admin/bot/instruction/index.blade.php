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
                                <select class="form-control" name="cat_id" required>
                                    @foreach ($ar_cat as $k=>$v)
                                        <option value="{{ $k }}" {{ $request->cat_id == $k ? 'selected' : '' }}>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="По тэгу " name="tag" value="{{ $request->tag }}" />
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
                        <th>Категория</th>
                        <th>Наименование</th>
                        <th>Тэги</th>
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
                            <td>{{ isset($ar_cat[$i->cat_id]) ? $ar_cat[$i->cat_id] : 'Не указано' }}</td>
                            <td>{{ $i->name }}</td>
                            <td>{{ implode(",", $i->relTags()->pluck('tag')->toArray()) }}</td>
                            <td>{{ $i->created_at }}</td>
                            <td>{{ $i->updated_at }}</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-secondary btn-sm call_dialog_edit"
                                    data-val-cat_id='{{ $i->cat_id }}'
                                    data-val-ar_tag='{{ implode(",", $i->relTags()->pluck('tag')->toArray()) }}'
                                    data-val-name='{{ $i->name }}'
                                    data-val-id='{{ $i->id }}'>Изменить</a>
                                <a href="{{ action('Admin\Bot\BotInstructionController@getDelete', $i->id) }}"
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


@include('admin.bot.instruction.__include.dialog_edit')
@endsection


@section('js_block')
    @parent
    <script src="/admin/js/block/dialog_edit.js"></script>
@endsection
