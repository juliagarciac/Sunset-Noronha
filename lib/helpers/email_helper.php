<?php
function enviarEmailReserva($dados) {
    $to = $dados['email'];
    $subject = "Confirmação de Reserva - Sunset Noronha";
    $message = sprintf(
        "Olá %s, sua reserva para %s foi confirmada!",
        $dados['nome'],
        $dados['acomodacao']
    );
    
    // Simulação - integre com PHPMailer depois
    return mail($to, $subject, $message);
}
?>