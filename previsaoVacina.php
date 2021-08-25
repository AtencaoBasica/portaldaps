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
                Previsão Semanal de Vacinas
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row buttonsRow">
            
            <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRnPXQAihKod3XkL2Ejdx2y5Lt8Lh1cCFPnExFbj3CLMDLHr0Sli9bW-KCej-rR0LMHxseLmuMgzgV8/pubhtml?gid=465973552&single=true" class="btn btn-dark col-3" target="_blank" >Planilha Geral</a>
            <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRw8sVdY7Sl0tpM9oXfShIj2emuNSyEO-naRMwN3tL_Uj4Tug14X4JsDjIEcxXpl48w0UzTAsZFcnVc/pubhtml?gid=465973552&single=true" class="btn btn-dark col-3" target="_blank">Planilha Gestantes</a>
            
        </div>

    </main>

    <?php include('sidebar.php') ?>
</body>
</html>