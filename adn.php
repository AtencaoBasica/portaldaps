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
                Ambulatório de Distúrbios Nutricionais
            </div>
        </div>

        <!-- Div com cards de informações -->
        <div class="row buttonsRow">
            
            <button type="button" class="btn btn-dark col-3" id="novaSolicitacaoAdn">Nova Solicitação</button>
            <button type="button" class="btn btn-dark col-3" id="pacientesAtivosAdn">Pacientes Ativos</button>
            <button type="button" class="btn btn-dark col-3" id="historicoSolicitacoesAdn">Histórico de Solicitações</button>
            
        </div>

        <div id="adnHidden" class="buttonsRow"></div>
        <iframe id="frameLoad" src=""></iframe>

    </main>

    <script>
        document.getElementById("novaSolicitacaoAdn").addEventListener("click", novaSolicitacaoAdn)
        document.getElementById("pacientesAtivosAdn").addEventListener("click", pacientesAtivosAdn)
        document.getElementById("historicoSolicitacoesAdn").addEventListener("click", historicoSolicitacoesAdn)

        function novaSolicitacaoAdn() {
            document.getElementById("frameLoad").src = "https://docs.google.com/forms/d/e/1FAIpQLSeU_fqfa7tKcyKeX3S6BWCnKLnVcE9G2dYhJ5eEsXKlvD0wlA/viewform?usp=sf_link"
        }

        function pacientesAtivosAdn() {
            var divAdn = document.getElementById("adnHidden")
            divAdn.innerHTML = ''
            divAdn.innerHTML += '<button type="button" class="btn btn-dark col-2" id="ativosUbsFinco" onclick="ativosUbsFinco()">Ativos UBS Finco</button>'
            divAdn.innerHTML += '<button type="button" class="btn btn-dark col-2" id="ativosUbsLeblon" onclick="ativosUbsLeblon()">Ativos UBS Leblon</button>'
            divAdn.innerHTML += '<button type="button" class="btn btn-dark col-2" id="ativosUbsVilaDayse" onclick="ativosUbsVilaDayse()">Ativos UBS Vila Dayse</button>'
            divAdn.innerHTML += '<button type="button" class="btn btn-dark col-2" id="ativosUbsVilaMarchi" onclick="ativosUbsVilaMarchi()">Ativos UBS Vila Marchi</button>'
        }

        function ativosUbsFinco() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbxSW1wAZy_Tvrjb0lS8SLExvetN34Ik9Laq3uDIKtA8H2PLG34IQOeL/exec"
        }

        function ativosUbsLeblon() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbyZbTNnbDl3WvEvX_aty4R-dUHip0frCxUuXK5YYM3XFimhopT5drYD/exec"
        }

        function ativosUbsVilaDayse() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbyFiTTDHWacOR8-lL5LcF226kJYY3F4gtEnCQ71U6Aoxd7ic3czUEKE4A/exec#"
        }

        function ativosUbsVilaMarchi() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbwzsh88xXDyEWkMq8HYw392D2L72At5ZooOCNUNo3JthLKgCLm8y0G58A/exec"
        }

        function historicoSolicitacoesAdn() {
            var divAdn = document.getElementById("adnHidden")
            divAdn.innerHTML = ''
            divAdn.innerHTML += '<button type="button" class="btn btn-dark col-2" id="historicoUbsFinco" onclick="historicoUbsFinco()">Histórico UBS Finco</button>'
            divAdn.innerHTML += '<button type="button" class="btn btn-dark col-2" id="historicoUbsLeblon" onclick="historicoUbsLeblon()">Histórico UBS Leblon</button>'
            divAdn.innerHTML += '<button type="button" class="btn btn-dark col-2" id="historicoUbsVilaDayse" onclick="historicoUbsVilaDayse()">Histórico UBS Vila Dayse</button>'
            divAdn.innerHTML += '<button type="button" class="btn btn-dark col-2" id="historicoUbsVilaMarchi" onclick="historicoUbsVilaMarchi()">Histórico UBS Vila Marchi</button>'
        }

        function historicoUbsFinco() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbxw-E1F_JXpUdEgwdZFsCxFpsmpYF7uoREoXoG2N1H67lvXIMJO5-mj/exec"
        }

        function historicoUbsLeblon() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbwL-b2IGbLvvBAlKUiACZdMKJxXIekk6CoVQ0NhwvnrWgwVEi6l639K/exec"
        }

        function historicoUbsVilaDayse() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbxHFvlfmQ4C_vM2lrDfoKZqePsjfEdtk2RYgTtBjBdmJrCcQfe_jo5u/exec"
        }

        function historicoUbsVilaMarchi() {
            document.getElementById("frameLoad").src = "https://script.google.com/macros/s/AKfycbylXVk0QTi3rZe6WdmLo1Fpy6sFomCrtMG0-S-tNXFXqg8DklE3CUJW7g/exec"
        }
    </script>

    <?php include('sidebar.php') ?>
</body>
</html>