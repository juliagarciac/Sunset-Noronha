<?php
/**
 * Validação de dados para o Sunset Noronha
 */
class ValidationHelper {
    // Valida e-mail
    public static function validarEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    // Valida datas (formato YYYY-MM-DD)
    public static function validarData($data) {
        $d = DateTime::createFromFormat('Y-m-d', $data);
        return $d && $d->format('Y-m-d') === $data;
    }

    // Valida formulário de reserva
    public static function validarReserva($dados) {
        $erros = [];
        
        if (empty($dados['nome'])) {
            $erros['nome'] = "Nome é obrigatório";
        }

        if (!self::validarEmail($dados['email'])) {
            $erros['email'] = "E-mail inválido";
        }

        if (!self::validarData($dados['check_in'])) {
            $erros['check_in'] = "Data de check-in inválida";
        }

        if ($dados['pessoas'] < 1 || $dados['pessoas'] > 10) {
            $erros['pessoas'] = "Número de pessoas inválido";
        }

        return count($erros) ? $erros : true;
    }

    // Sanitiza inputs
    public static function sanitizar($input) {
        return htmlspecialchars(strip_tags(trim($input)));
    }
}
?>