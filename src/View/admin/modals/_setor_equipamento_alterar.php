<div class="modal fade" id="modal-alterar-setor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Setor do Equipamento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_alt" id="id_alt">
                <div class="form-group">
                    <label>Nome do setor</label>
                    <input type="text" class="form-control obg" placeholder="Digite aqui..." name="nome_setor_alt" id="nome_setor_alt">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button name="btn_alterar" class="btn btn-primary" onclick="return AlterarSetor('form_alt')">Alterar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>