<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/Assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/Assets/js/plugins/sweetalert/sweetalert2.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AutoLavado Reforma</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Auto Lavado Reforma</h1>
        </div>
        <div class="login-box">
            <form id="formLogin" class="login-form" autocomplete="off">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i> INICIAR SESION</h3>
                <div class="form-group">
                    <label class="control-label">USUARIO</label>
                    <input class="form-control is-invalid" type="text" id="usuario" name="usuario" placeholder="Digite Usuario" autofocus>
                    <div class="form-control-feedback text-danger" id="valUsr"> *Campo Requerido </div>
                </div>
                <div class="form-group">
                    <label class="control-label">CONTRASEÑA</label>
                    <input class="form-control is-invalid" type="password" id="password" name="password" placeholder="Digite Contraseña">
                    <div class="form-control-feedback text-danger" id="valPass"> *Campo Requerido </div>
                </div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>ENTRAR</button>
                </div>

                <br>

                <div class="form-group btn-container" id="divAlerta">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-warning">
                                    <p id="contAlert"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?= base_url() ?>/Assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/Assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/Assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/Assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= base_url() ?>/Assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/Assets/js/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/Assets/js/helpers.js"></script>
    <script src="<?= base_url() ?>/Assets/js/functions_index.js"></script>
</body>

</html>