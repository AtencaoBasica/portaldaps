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
                Documentação relacionada ao Transporte Sanitário
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row buttonsRow">

            <a href="https://docs.google.com/forms/d/e/1FAIpQLScMiuo8mJirkyKHtXhTx_FeYMjOYgjsHrfwVb4hiN3YwWviGQ/viewform?usp=sf_link" class="btn btn-dark col-3" target="_blank">Nova solicitação</a>
            <button type="button" class="btn btn-dark col-3" id="pacientesCadastrados">Pacientes Cadastrados</button>
            <button type="button" class="btn btn-dark col-3" id="documentosTransporte">Documentos</button>

        </div>

        <iframe id="frameLoad" src=""></iframe>

    </main>

    <script>
        document.getElementById("pacientesCadastrados").addEventListener("click", pacientesCadastrados)
        document.getElementById("documentosTransporte").addEventListener("click", documentosTransporte)

        function pacientesCadastrados() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbxGo6iPPWwKgJnfndAJSW2Oc5lnpOtYfs3EY1TIhOrEmgg_YUZyFLyO1Ej9A3AOAjMP/exec"
        }

        function documentosTransporte() {
            document.getElementById("frameLoad").src = "https://docs.google.com/document/d/1341mZeEG0FT1fQZVhm470QbYQSXR8pEK/edit?usp=sharing&ouid=109270359302641629744&rtpof=true&sd=true"
        }
    </script>

    <?php include('sidebar.php') ?>
</body>
</html>