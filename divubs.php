<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img\tab_icon.png" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Lato:wght@400;700&family=Montserrat:wght@400;500;600;700&display=swap');
    </style>
    <!-- Referência fontes:
        font-family: 'Inter', sans-serif;
        font-family: 'Lato', sans-serif;
        font-family: 'Montserrat', sans-serif;
    -->

    <title>Portal DAPS - Div. UBS</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include('header.php') ?>

    <!-- Conteúdo da página -->
    <main>
        <div class="row">
            <h1>Divisão de UBS</h1>
        </div>
        <div class="row">
            <div>
                Espaço dedicado à ações da Divisão de UBS
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row cardsRow">

            <!-- Card 1 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Exames COVID</div>
                <div class="card-body">
                    <p class="card-text">Formulário de exames COVID realizados pela unidade</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfj01poDAt8bGitjP2-opTBcuuYbTHsZK3MEReaSePf8C92Og/viewform" class="btn btn-dark" target="_blank">Formulário</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Notas de Água DISCOM</div>
                <div class="card-body">
                    <p class="card-text">Formulário de lançamento de nota de água DISCOM</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScKv7g3sykq6l41f1STLtoApsScDJGHU4i_dM1h37ygL2Uang/viewform" class="btn btn-dark" target="_blank">Formulário</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Protocolo de Entrega de Máscara</div>
                <div class="card-body">
                    <p class="card-text">Formulário de lançamento dos protocolos de entrega de máscara</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScmlxIu7MT6I43DZNzRPE67cEaR9apcVZpkuwbusnsn771EUw/viewform" class="btn btn-dark" target="_blank">Formulário</a>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Protocolo de Fraldas</div>
                <div class="card-body">
                    <p class="card-text">Planilha de controle de fraldas para pacientes</p>
                    <a href="https://docs.google.com/spreadsheets/d/1OuDCr8yKANxr8B86II2llC83_wbOVDK_Gdagm4Jb3KA/edit?usp=sharing" class="btn btn-dark" target="_blank">Planilha</a>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Retirada de Materiais</div>
                <div class="card-body">
                    <p class="card-text">Formulário para retirada de materiais patrimoniados</p>
                    <!-- <a href="#" class="btn btn-dark">Formulário</a> -->
                </div>
            </div>

            <!-- Card 6 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Retirada de Enxoval</div>
                <div class="card-body">
                    <p class="card-text">Formulário de retirada de enxoval</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSd_n4KES57aTMjZMLA7ow_f8nxo07OaQWrB90Q7thY2Lm9MQw/viewform" class="btn btn-dark" target="_blank">Formulário</a>
                </div>
            </div>
            
            <!-- Card 7 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">RH Geral</div>
                <div class="card-body">
                    <p class="card-text">Planilha de funcionários da unidade</p>
                    <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRL1_CMIcPsXEtnFuOUKuL6UjxfbL8LnC3bxaQnoDw0m5E9HGZohbTxpfLfz2nrLU1Oc7YgBbEW-Aof/pubhtml?gid=1879302948&single=true" class="btn btn-dark" target="_blank">Planilha</a>
                </div>
            </div>
            
            <!-- Card 8 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Sítio Cirúrgico</div>
                <div class="card-body">
                    <p class="card-text">Formulário de controle de infecção pós cirúrgica</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSftlph8DWHAgFQ7gh2v6zErJTCyANSDWHGs0NvSYGC432SaPQ/viewform" class="btn btn-dark" target="_blank">Formulário</a>
                </div>
            </div>

        </div>

    </main>

    <?php include('sidebar.php') ?>
</body>
</html>