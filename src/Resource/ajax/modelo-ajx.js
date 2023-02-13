function CadastrarModelo(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_modelo = $("#nome_modelo").val();

        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_modelo_equipamento-dataview"),
            data: {
                nome_modelo: nome_modelo,
                btn_cadastrar: 'ajx'
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarModelo();
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarModelo() {
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_modelo_equipamento-dataview"),
        data: {
            consultar_ajx: 'ajx',
            nome_pesquisa: $("#nome_pesquisa").val()
        },
        success: function (dados_result) {
            $('#tableResult').html(dados_result);
        }
    })
}

function AlterarModelo(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_modelo = $("#nome_modelo_alt").val();
        let id_modelo = $("#id_alt").val();

        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_modelo_equipamento-dataview"),
            data: {
                btn_alterar: 'ajx',
                nome_modelo_alt: nome_modelo,
                id_alt: id_modelo
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    FecharModal("modal-alterar-modelo");
                    ConsultarModelo();
                } else if (retorno == -1) {
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
        url: BASE_URL("gerenciar_modelo_equipamento-dataview"),
        data: {
            btn_excluir: 'ajx',
            id_exc: $("#id_exc").val()
        },
        success: function (retorno) {
            if (retorno == 1) {
                MensagemSucesso();
                ConsultarModelo();
                FecharModal("modal-excluir");
            } else {
                MensagemErroExcluir();
            }
        }
    })
    return false;
}