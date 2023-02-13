<?php
require_once dirname(__DIR__, 3) . '\vendor\autoload.php';
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
                            <h1>Novo funcionário</h1>
                            <h3 class="card-title">Aqui você insere um novo usuário</h3>
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

                        <form action="tipo_equipamento.php" method="post">
                            <div class="form-group">

                                <label>Tipo</label>
                                <select class="form-control" name="tipo">
                                    <option value="0">Selecione</option>
                                </select>
                                <label>Setor</label>
                                <select class="form-control" name="tipo">
                                    <option value="0">Selecione</option>
                                </select>
                                <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="nome_tipo" id="nome_tipo">
                                <label>Sobrenome</label> <br>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="nome_tipo" id="nome_tipo">
                                <label>E-mail</label> <br>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="nome_tipo" id="nome_tipo">
                                <label>Telefone</label> <br>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="nome_tipo" id="nome_tipo">
                                <label>Endereço</label> <br>
                                <input type="text" class="form-control" placeholder="Digite aqui..." name="nome_tipo" id="nome_tipo">
                            </div>
                            <button class="btn btn-success" name="btn_gravar">Gravar</button>
                        </form>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12">
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
</body>

</html>