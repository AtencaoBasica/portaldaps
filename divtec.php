<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('linksImport.php') ?>

    <title>Portal DAPS - Div. Téc.</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include('header.php') ?>

    <!-- Conteúdo da página -->
    <main>
        <div class="row">
            <h1>Divisão Técnica Assistencial</h1>
        </div>
        <div class="row">
            <div>
                Espaço dedicado à ações da Divisão Técnica Assistencial
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row cardsRow">

            <!-- Card 1 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Ambulatório de Distúrbios Nutricionais</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Light card title</h5> -->
                    <p class="card-text">Solicitação de fórmulas e visualização de pacientes cadastrados.</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeU_fqfa7tKcyKeX3S6BWCnKLnVcE9G2dYhJ5eEsXKlvD0wlA/viewform?usp=sf_link" class="btn btn-dark" target="_blank" style="margin-bottom: 8px;">Nova Solicitação</a>
                    <a href="adn.php" class="btn btn-dark" target="_blank">Pacientes Cadastrados</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Previsão Semanal de Vacina</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Light card title</h5> -->
                    <p class="card-text">Planilha de previsão de vacinas a serem aplicadas na semana pela unidade</p>
                    <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRnPXQAihKod3XkL2Ejdx2y5Lt8Lh1cCFPnExFbj3CLMDLHr0Sli9bW-KCej-rR0LMHxseLmuMgzgV8/pubhtml?gid=465973552&single=true" class="btn btn-dark" target="_blank" style="margin-bottom: 8px;">Planilha Geral</a>
                    <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRw8sVdY7Sl0tpM9oXfShIj2emuNSyEO-naRMwN3tL_Uj4Tug14X4JsDjIEcxXpl48w0UzTAsZFcnVc/pubhtml?gid=465973552&single=true" class="btn btn-dark" target="_blank">Planilha Gestantes</a>
                </div>
            </div>

        </div>

    </main>

    <?php include('sidebar.php') ?>
</body>
</html>