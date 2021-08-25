<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('linksImport.php') ?>

    <title>Portal DAPS - Diretoria</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include('header.php') ?>

    <!-- Conteúdo da página -->
    <main>
        <div class="row">
            <h1>Diretoria</h1>
        </div>
        <div class="row">
            <div>
                Guia de Saúde de São Bernardo do Campo
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row buttonsRow">

            <button type="button" class="btn btn-dark col-3" id="mapaGuia">Mapa do Território</button>
            <button type="button" class="btn btn-dark col-3" id="telGuia">Contatos UBS</button>

        </div>

        <iframe id="frameLoad" src=""></iframe>

    </main>

    <script>
        document.getElementById("mapaGuia").addEventListener("click", mapaGuia)
        document.getElementById("telGuia").addEventListener("click", telGuia)

        function mapaGuia() {
            document.getElementById("frameLoad").src = "https://www.google.com/maps/d/embed?mid=1NZ_VzOiCWA_PmSF0_9dVx4Caxb24G_ww"
        }

        function telGuia() {
            document.getElementById("frameLoad").src = "https://docs.google.com/spreadsheets/d/e/2PACX-1vQiRAhk5yef22Y0R7KJ7XufeIqwiMWXAaZiGao0RtFXPyug-QGjlMhHPArmPCLAhpgSJTFQBqrU_3-a/pubhtml?gid=189082211&single=true"
        }
    </script>

    <?php include('sidebar.php') ?>
</body>
</html>