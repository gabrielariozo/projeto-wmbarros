function BASE_URL(nome_arquivo) {
    return "../../Resource/dataview/" + nome_arquivo + ".php";
}

function BASE_URL_GET(nome_arquivo) {
    return "../../Resource/dataview/" + nome_arquivo;
}

function FecharModal(id_modal) {
    $("#" + id_modal).modal("hide");
}

function LimparCampos(id_form) {
    $("#" + id_form + " input, #" + id_form + " select, #" + id_form + " textarea").each(function () {

        //Tira a marcação do campo da vez
        $(this).removeClass("is-valid");
        //Limpa o campo da vez
        $(this).val('');
    })
}

function NotificarCampos(id_form) {

    let ret = true;

    $("#" + id_form + " input, #" + id_form + " select, #" + id_form + " textarea").each(function () {

        //Se o objeto tem a flag "obj", ele altera a classe
        //Serve para identificar os campos obrigatórios
        if ($(this).hasClass("obg")) {
            if ($(this).val().trim() == "") {
                ret = false;
                $(this).addClass("is-invalid");
            } else {
                $(this).removeClass("is-invalid").addClass("is-valid");
            }
        }
    })

    if (!ret)
        MensagemCampoObrigatorio();
    return ret;
}