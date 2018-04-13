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
                                <select class="form-control" name="region_key" required>
                                    @foreach ($ar_region as $k=>$v)
                                        <option value="{{ $k }}" {{ $request->region_key == $k ? 'selected' : '' }}>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="По заголовку " name="title" value="{{ $request->title }}" />
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
                        <th>Регион</th>
                        <th>Заголовок</th>
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
                            <td>{{ $ar_region[$i->region_key] }}</td>
                            <td>{{ $i->title }}</td>
                            <td>{{ $i->created_at }}</td>
                            <td>{{ $i->updated_at }}</td>
                            <td class="text-right">
                                <a href="javascript:void(0)"
                                    class="btn btn-secondary btn-sm call_dialog_edit"
                                    data-val-region_key='{{ $i->region_key }}'
                                    data-val-title='{{ $i->title }}'
                                    data-val-short_note='{{ $i->short_note }}'
                                    data-val-note='{{ $i->note }}'
                                    data-val-id='{{ $i->id }}'>Изменить</a>
                                <a href="{{ action('Admin\InvestigationController@getDelete', $i->id) }}"
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


@include('admin.investigation.__include.dialog_edit')
@endsection


@section('js_block')
    @parent
    <script src="/admin/js/block/dialog_edit.js"></script>
@endsection
