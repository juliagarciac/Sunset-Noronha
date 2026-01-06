<?php
// Formata dados de endereço (similar à função do professor)
function formatarEndereco($endereco) {
    return sprintf(
        "%s, %s - %s/%s",
        $endereco['logradouro'],
        $endereco['bairro'],
        $endereco['cidade'],
        $endereco['estado']
    );
}

// Calcula o total de uma reserva
function calcularTotal($diarias, $preco_diaria) {
    return $diarias * $preco_diaria;
}

// Redirecionamento com mensagem (ex: após login)
function redirect($url, $mensagem = null) {
    if ($mensagem) {
        $_SESSION['mensagem'] = $mensagem;
    }
    header("Location: $url");
    exit();
}
?>