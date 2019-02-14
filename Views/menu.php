<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/menu.css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <!-- *******************MENU************************ -->
                <ul>
                    <li><a href="#"> <img src="<?php echo BASE_URL; ?>assets/images/perfil.png" alt=""> Perfil</a></li>

                    <li><a href="#"> <img src="<?php echo BASE_URL; ?>assets/images/equipamento.png"alt=""> Equipamentos</a></li>

                    <li><a href="#"> <img src="<?php echo BASE_URL; ?>assets/images/emprestimo.png" alt=""> Emprestimo</a></li>

                    <li><a href="#"> <img src="<?php echo BASE_URL; ?>assets/images/ocs.png" alt=""> OCS</a></li>
                    
                    <li><a href="#"> <img src="<?php echo BASE_URL; ?>assets/images/sair.png" alt=""> Sair</a></li>
                </ul>
            </div>
            <div class="col-sm-10">
                <?php $this->loadViewInTemplate($viewName, $viewData);?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/Usuario.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/equipamento.js"></script>
</body>

</html>