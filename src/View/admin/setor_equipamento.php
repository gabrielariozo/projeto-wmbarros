<?php
require_once dirname(__DIR__, 2) . '/Resource/dataview/gerenciar_setor_equipamento-dataview.php';
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include_once PATH_URL . 'Template/_includes/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php
        include_once PATH_URL . '/Template/_includes/_topo.php';
        include_once PATH_URL . '/Template/_includes/_menu.php';
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gerenciar setor dos equipamentos</h1>
                            <h3 class="card-title">Aqui você gerencia todos os setores dos equipamentos cadastrados</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">

                        <form action="setor_equipamento.php" method="post">
                            <div class="form-group">
                                <label>Nome do setor</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="nome_setor" id="nome_setor">
                            </div>
                            <button class="btn btn-success" name="btn_cadastrar" onclick="return CadastrarSetor('form_cad')">Cadastrar</button>
                        </form>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Setores Cadastrados</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" onkeyup="ConsultarSetor()" id="nome_pesquisa" name="nome_pesquisa" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" onclick="ConsultarSetor()" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" id="tableResult">
                                        <table class="table table-hover">

                                        </table>
                                    </div>
                                    <form action="" method="post">
                                        <?php
                                        include_once 'modals/_setor_equipamento_alterar.php';
                                        include_once 'modals/_excluir.php';
                                        ?>
                                    </form>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php
        include_once PATH_URL . 'Template/_includes/_footer.php';
        ?>

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php
    include_once PATH_URL . 'Template/_includes/_scripts.php';
    include_once PATH_URL . 'Template/_includes/_msg.php';
    ?>
    <script src="../../Resource/ajax/setor-ajx.js"></script>
    <script>
        ConsultarSetor()
    </script>
</body>

</html>