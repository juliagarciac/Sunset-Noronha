<?php
session_start();

function fazerLogin($email, $senha) {
    // Simulação - substitua por consulta ao banco de dados
    $usuarios = [
        'admin@sunset.com' => '123456'
    ];

    if (isset($usuarios[$email]) && $usuarios[$email] === $senha) {
        $_SESSION['usuario'] = [
            'email' => $email,
            'nome' => 'Administrador'
        ];
        return true;
    }
    return false;
}

function estaLogado() {
    return isset($_SESSION['usuario']);
}
?>