<form action="{{ action('Admin\Bot\BotCatController@postDecision') }}" method="post" >
    <div class="modal fade" id="dialog_decision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Форма</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Краткий текст</label>
                            <textarea class="form-control" name='short_note'></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Полный текст</label>
                            <textarea class="form-control" name='note'></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control" name="id" />
                    <input type="hidden" class="form-control" name="cat_id" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
    </div>
</form>
