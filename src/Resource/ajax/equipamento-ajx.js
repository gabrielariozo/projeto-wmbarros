function CadastrarEquipamento(id_form) {

    if (NotificarCampos(id_form)) {
        let tipo = $("#tipo").val();
        let modelo = $("#modelo").val();
        let identificacao = $("#identificacao").val();
        let descricao = $("#descricao_equipamento").val();

        $.ajax({
            type: "post",
            url: BASE_URL("gerenciar_equipamento-dataview"),
            data: {
                tipo: tipo,
                modelo: modelo,
                identificacao: identificacao,
                descricao_equipamento: descricao,
                btn_cadastrar: 'ajx'
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                } else if (retorno == -1) {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarEquipamento() {
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