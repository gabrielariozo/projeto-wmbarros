function CadastrarSetor(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_setor = $("#nome_setor").val();

        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_setor_equipamento-dataview"),
            data: {
                nome_setor: nome_setor,
                btn_cadastrar: 'ajx'
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarSetor();
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarSetor() {
    $.ajax({
        type: "post",
        url: BASE_URL("gerenciar_setor_equipamento-dataview"),
        data: {
            consultar_ajx: 'ajx',
            nome_pesquisa: $("#nome_pesquisa").val()
        },
        success: function (dados_result) {
            $('#tableResult').html(dados_result);
        }
    })
}

function AlterarSetor(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_setor = $("#nome_setor_alt").val();
        let id_setor = $("#id_alt").val();

        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_setor_equipamento-dataview"),
            data: {
                btn_alterar: 'ajx',
                nome_setor_alt: nome_setor,
                id_alt: id_setor
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    FecharModal("modal-alterar-setor");
                    ConsultarSetor();
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
        url: BASE_URL("gerenciar_setor_equipamento-dataview"),
        data: {
            btn_excluir: 'ajx',
            id_exc: $("#id_exc").val()
        },
        success: function (retorno) {
            if (retorno == 1) {
                MensagemSucesso();
                ConsultarSetor();
                FecharModal("modal-excluir");
            } else {
                MensagemErroExcluir();
            }
        }
    })
    return false;
}