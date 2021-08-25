<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('linksImport.php') ?>

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
                Planilha de controle de fraldas para pacientes
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row buttonsRow">

            <button type="button" class="btn btn-dark col-3" id="protocoloFralda">Planilha</button>

        </div>

        <iframe id="frameLoad" src=""></iframe>

    </main>

    <script>
        document.getElementById("protocoloFralda").addEventListener("click", protocoloFralda)

        function protocoloFralda() {
            document.getElementById("frameLoad").src = "https://docs.google.com/spreadsheets/d/1OuDCr8yKANxr8B86II2llC83_wbOVDK_Gdagm4Jb3KA/edit?usp=sharing"
        }

    </script>

    <?php include('sidebar.php') ?>
</body>
</html>