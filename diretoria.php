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
                Espaço dedicado à ações da Diretoria
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row cardsRow">

            <!-- Card 1 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Guia de Saúde</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Light card title</h5> -->
                    <p class="card-text">Informações sobre o território e as undiades.</p>
                    <a href="#" class="btn btn-dark">Guia de Saúde</a>
                </div>
            </div>
        </div>

    </main>

    <?php include('sidebar.php') ?>
</body>
</html>