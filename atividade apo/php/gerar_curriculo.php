<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $idade = $_POST['idade'];

    $experiencias = [];
    if (isset($_POST['empresa'])) {
        for ($i = 0; $i < count($_POST['empresa']); $i++) {
            $experiencias[] = [
                'empresa' => $_POST['empresa'][$i],
                'cargo' => $_POST['cargo'][$i],
                'periodo' => $_POST['periodo'][$i]
            ];
        }
    }

    $referencias = [];
    if (isset($_POST['nomeReferencia'])) {
        for ($i = 0; $i < count($_POST['nomeReferencia']); $i++) {
            $referencias[] = [
                'nome' => $_POST['nomeReferencia'][$i],
                'contato' => $_POST['contatoReferencia'][$i]
            ];
        }
    }

    // Geração do currículo (este exemplo é básico e pode ser expandido)
    echo "<h1>Currículo de $nome</h1>";
    echo "<p>Data de Nascimento: $dataNascimento</p>";
    echo "<p>Idade: $idade</p>";

    if (!empty($experiencias)) {
        echo "<h2>Experiências Profissionais</h2>";
        foreach ($experiencias as $exp) {
            echo "<p>Empresa: {$exp['empresa']} - Cargo: {$exp['cargo']} - Período: {$exp['periodo']}</p>";
        }
    }

    if (!empty($referencias)) {
        echo "<h2>Referências Pessoais</h2>";
        foreach ($referencias as $ref) {
            echo "<p>Nome: {$ref['nome']} - Contato: {$ref['contato']}</p>";
        }
    }

    // Incluir a opção de download do currículo
    echo "<button onclick='window.print();'>Baixar Currículo</button>";
}
?>
