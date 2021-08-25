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
                Espaço dedicado à ações do NIR
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row cardsRow">

            <!-- Card 1 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Acessau Sua UBS + Digital</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Formulário de preenchimento semanal</h5> -->
                    <p class="card-text">Formulário de preenchimento semanal</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdMIO14hdQgHbc87imOj0RdENvW_lSYotAWdThuHbDeVDrGoQ/viewform" class="btn btn-dark" target="_blank">Formulário</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Transporte Sanitário</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Light card title</h5> -->
                    <p class="card-text">Solicitação de transporte para novos pacientes e visualização de pacientes cadastrados.</p>
                    <div class="row">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScMiuo8mJirkyKHtXhTx_FeYMjOYgjsHrfwVb4hiN3YwWviGQ/viewform?usp=sf_link" class="btn btn-dark" target="_blank" style="margin-bottom: 8px;">Nova Solicitação</a>
                        <a href="https://script.google.com/macros/s/AKfycbxGo6iPPWwKgJnfndAJSW2Oc5lnpOtYfs3EY1TIhOrEmgg_YUZyFLyO1Ej9A3AOAjMP/exec" class="btn btn-dark" target="_blank" style="margin-bottom: 8px;">Pacientes Cadastrados</a>
                        <a href="https://docs.google.com/document/d/1341mZeEG0FT1fQZVhm470QbYQSXR8pEK/edit?usp=sharing&ouid=109270359302641629744&rtpof=true&sd=true" class="btn btn-dark" target="_blank">Documentos</a>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <?php include('sidebar.php') ?>
</body>
</html>