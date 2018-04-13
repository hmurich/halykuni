<form action="{{ action('Admin\Organ\OrganController@postItem') }}" method="post" >
    <div class="modal fade" id="dialog_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Форма</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Регион</label>
                            <select class="form-control" name="region_key" required>
                                @foreach ($ar_region as $k=>$v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Категория</label>
                            <select class="form-control" name="cat_id" required>
                                @foreach ($ar_cat as $k=>$v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Директор</label>
                            <select class="form-control" name="manager_id" required>
                                @foreach ($ar_manager as $k=>$v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Наименование</label>
                            <input type="text" class="form-control" placeholder="Заголовок" name="name"  required />
                        </div>
                        <div class="form-group">
                            <div class="form-group" style="height: 0; overflow: hidden;">
                                <label for="lng" >Широта:</label>
                                <input type="text" class="form-control continue_class" name='geo_coord[lng]' id='lng' placeholder="Для выбора значения нужно выбрать точку на карте"  required="" readonly >
                            </div>
                            <div class="form-group" style="height: 0; overflow: hidden;">
                                <label for="lat" >Долгота:</label>
                                <input type="text" class="form-control continue_class" name='geo_coord[lat]' id='lat' placeholder="Для выбора значения нужно выбрать точку на карте"  required="" readonly >
                            </div>
                            <div class="form-group">
                                <div id='map' style="width: 100%; height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control" name="id" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
    </div>
</form>
