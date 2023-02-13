function CadastrarTipoEquipamento(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_tipo = $("#nome_tipo").val();

        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_tipo_equipamento-dataview"),
            data: {
                nome_tipo: nome_tipo,
                btn_cadastrar: 'ajx'
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarTipoEquipamento();
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarTipoEquipamento() {
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_tipo_equipamento-dataview"),
        data: {
            consultar_ajx: 'ajx',
            nome_pesquisa: $("#nome_pesquisa").val()
        },
        success: function (dados_result) {
            $('#tableResult').html(dados_result);
        }
    })
}

function AlterarTipoEquipamento(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_tipo = $("#nome_tipo_alt").val();
        let id_tipo = $("#id_alt").val();

        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_tipo_equipamento-dataview"),
            data: {
                nome_tipo_alt: nome_tipo,
                id_alt: id_tipo,
                btn_alterar: 'ajx'
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    ConsultarTipoEquipamento();
                    LimparCampos(id_form);
                    FecharModal("modal-alterar-tipo");
                } else if (retorno == 1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function Excluir() {
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_tipo_equipamento-dataview"),
        data: {
            btn_excluir: 'ajx',
            id_exc: $("#id_exc").val()
        },
        success: function (retorno) {
            if (retorno == 1) {
                MensagemSucesso();
                ConsultarTipoEquipamento();
                FecharModal("modal-excluir");
            } else {
                MensagemErroExcluir();
            }
        }
    })
    return false;
}