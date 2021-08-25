<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('linksImport.php') ?>

    <title>Portal DAPS - NIR</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include('header.php') ?>

    <!-- Conteúdo da página -->
    <main>
        <div class="row">
            <h1>Núcleo Interno de Regulação</h1>
        </div>
        <div class="row">
            <div>
                Documentação relacionada ao projeto Acessa Sua UBS + Digital
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row buttonsRow">

            <button type="button" class="btn btn-dark col-3" id="acessaUbs">Formulário</button>

        </div>

        <iframe id="frameLoad" src=""></iframe>

    </main>

    <script>
        document.getElementById("acessaUbs").addEventListener("click", acessaUbs)

        function acessaUbs() {
            document.getElementById("frameLoad").src = "https://docs.google.com/forms/d/e/1FAIpQLSdMIO14hdQgHbc87imOj0RdENvW_lSYotAWdThuHbDeVDrGoQ/viewform"
        }

    </script>

    <?php include('sidebar.php') ?>
</body>
</html>