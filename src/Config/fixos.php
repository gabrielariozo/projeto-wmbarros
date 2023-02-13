<?php

//define('PATH_URL' , $_SERVER['DOCUMENT_ROOT'] . '/ControleOS/src/');

// DEFINIÇÃO DO CAMINHO PADRÃO(LOCAL) DO PROJETO
define('PATH_URL' , $_SERVER['DOCUMENT_ROOT'] . '/ControleOS/src/');


#TIPOS DE USUÁRIO
const PERFIL_ADM = 1;
const PERFIL_FUNCIONARIO = 2;
const PERFIL_TECNICO = 3;

//FUNÇÕES DO PROJETO

//TIPO DO EQUIPAMENTO
const CADASTRAR_TIPO = "CadastrarTipoEquipamento";
const ALTERAR_TIPO = "AlterarTipoEquipamento";
const EXCLUIR_TIPO = "ExcluirTipoEquipamento";

//SETOR DO EQUIPAMENTO
const CADASTRAR_SETOR = "CadastrarSetorEquipamento";
const ALTERAR_SETOR = "AlterarSetorEquipamento";
const EXCLUIR_SETOR = "ExcluirSetorEquipamento";

//MODELO DO EQUIPAMENTO
const CADASTRAR_MODELO = "CadastrarModeloEquipamento";
const ALTERAR_MODELO = "AlterarModeloEquipamento";
const EXCLUIR_MODELO = "ExcluirModeloEquipamento";

//EQUIPAMENTO
const CADASTRAR_EQUIPAMENTO = "CadastrarEquipamento";
const ALTERAR_EQUIPAMENTO = "AlterarEquipamento";
const EXCLUIR_EQUIPAMENTO = "ExcluirEquipamento";