<?php

$menu_itens = [
    ['Home', 'index.php'], 
    ['Reservas', 'reservas.php'], 
    ['Pacotes', 'pacote.php'], 
    ['Serviços', 'servicos.php'], 
    ['Sobre', 'sobre.php'], 
    ['Avaliações', 'avaliacoes.php'], 
    ['Contato', 'contato.php']
];

// ===== PACOTES/ACOMODAÇÕES =====

$pacoteApartamento = [
    'id' => 1,
    'nome' => 'Apartamento de Luxo',
    'descricao' => 'O seu refúgio de elegância e conforto em cada detalhe.',
    'imagem_principal' => 'imagens/ap_luxo10.0/10.8ap.png',
    'carrossel' => 'ap_luxo',
    'estrelas' => 5,
    'detalhes' => [
        'Área: 65m²',
        'Capacidade: 4 pessoas',
        'Vista para o mar'
    ]
];

$pacoteBangaloLuxo = [
    'id' => 2,
    'nome' => 'Bangalô de Luxo',
    'descricao' => 'Privacidade, conforto e luxo em harmonia com a natureza.',
    'imagem_principal' => 'imagens/bagalo_luxo11.0/11.5luxo.jpg',
    'carrossel' => 'bangalo_luxo',
    'estrelas' => 5,
    'detalhes' => [
        'Área: 85m²',
        'Piscina privativa',
        'Deck de madeira'
    ]
];

$pacoteBangaloMaster = [
    'id' => 3,
    'nome' => 'Bangalô Master',
    'descricao' => 'Conforto imcomparável e vista deslumbrante para momentos inesquecíveis.',
    'imagem_principal' => 'imagens/bangalo_master12.0/12.4master.jpg',
    'carrossel' => 'bangalo_master',
    'estrelas' => 5,
    'detalhes' => [
        'Área: 120m²',
        'Serviço de mordomo',
        'Vista panorâmica'
    ]
];

$datasetpacotes = [ $pacoteApartamento, $pacoteBangaloLuxo, $pacoteBangaloMaster ];


// ===== SERVIÇOS (12) =====
$servicoHotel = [
    'id' => 1,
    'icone' => 'fas fa-hotel',
    'nome' => 'Hotel',
    'descricao' => 'Cada espaço da nossa pousada foi pensado para proporcionar uma experiência única.'
];

$servicoComida = [
    'id' => 2,
    'icone' => 'fas fa-utensils',
    'nome' => 'Comidas e Bebidas',
    'descricao' => 'Chef Jonatas Moreira reconhecido nacionalmente assina o cardápio do Restaurante.'
];

$servicoConcierge = [
    'id' => 3,
    'icone' => 'fas fa-concierge-bell',
    'nome' => 'Concierge',
    'descricao' => 'Serviço personalizado ao se hospedar na Pousada Morena.'
];

$servicoPiscina = [
    'id' => 4,
    'icone' => 'fas fa-swimming-pool',
    'nome' => 'Piscina',
    'descricao' => 'Em meio à exuberância da natureza, os tons de azul da piscina se encontram com o céu.'
];

$servicoNatureza = [
    'id' => 5,
    'icone' => 'fas fa-mountain',
    'nome' => 'Natureza',
    'descricao' => 'Uma das mais belas vistas do arquipélago de Noronha: o Morro do Pico.'
];

$servicoAcademia = [
    'id' => 6,
    'icone' => 'fas fa-dumbbell',
    'nome' => 'Academia',
    'descricao' => 'Para os hóspedes que não abrem mão das atividades físicas diárias.'
];

$servicoSpa = [
    'id' => 7,
    'icone' => 'fas fa-spa',
    'nome' => 'Spa & Massagem',
    'descricao' => 'Nosso spa é sua chance de relaxar e contemplar uma bela vista.'
];

$servicoLoja = [
    'id' => 8,
    'icone' => 'fas fa-store-alt',
    'nome' => 'Loja',
    'descricao' => 'Na loja da pousada você encontra moda praia masculina e feminina.'
];

$servicoRelax = [
    'id' => 9,
    'icone' => 'fas fa-umbrella-beach',
    'nome' => 'Área Relax',
    'descricao' => 'Perfeito para curtir a natureza. Deite, feche os olhos e relaxe.'
];

$servicoSauna = [
    'id' => 10,
    'icone' => 'fas fa-hot-tub',
    'nome' => 'Sauna',
    'descricao' => 'Com uma vista exuberante, nossa sauna a vapor completa o seu relax.'
];

$servicoWifi = [
    'id' => 11,
    'icone' => 'fas fa-wifi',
    'nome' => 'Wi-Fi Premium',
    'descricao' => 'Internet de alta velocidade disponível em todas as áreas.'
];

$servicoTransporte = [
    'id' => 12,
    'icone' => 'fas fa-car',
    'nome' => 'Transporte',
    'descricao' => 'Serviço de transporte exclusivo com roteiros personalizados.'
];

$datasetservicos = [ $servicoHotel,$servicoComida,$servicoConcierge,$servicoPiscina,$servicoNatureza, $servicoAcademia, $servicoSpa, $servicoLoja, $servicoRelax, $servicoSauna, $servicoWifi, $servicoTransporte];

// ===== FOTOS SOBRE NÓS (12) =====

$fotoApartamento = [
    'imagem' => 'imagens/ap_luxo10.0/10.6ap.jpg',
    'titulo' => 'Apartamento de Luxo'
];

$fotoBangaloLuxo = [
    'imagem' => 'imagens/bagalo_luxo11.0/11.4luxo.jpg',
    'titulo' => 'Bangalô de Luxo'
];

$fotoBangaloMaster = [
    'imagem' => 'imagens/bangalo_master12.0/12.7master.jpg',
    'titulo' => 'Bangalô Master'
];

$fotoPiscina = [
    'imagem' => 'imagens/piscina05/55piscina.png',
    'titulo' => 'Piscina'
];

$fotoRestaurante = [
    'imagem' => 'imagens/restaurante03/36restaurante.jpg',
    'titulo' => 'Restaurante'
];

$fotoSpa = [
    'imagem' => 'imagens/sala_massagem07/76spa.jpg',
    'titulo' => 'Spa & Massagem'
];

$fotoRelax = [
    'imagem' => 'imagens/area_relax08/83relax.png',
    'titulo' => 'Área Relax'
];

$fotoSauna = [
    'imagem' => 'imagens/sala_massagem07/76spa.jpg',
    'titulo' => 'Sauna'
];

$fotoLoja = [
    'imagem' => 'imagens/piscina05/53piscina.png',
    'titulo' => 'Loja'
];

$fotoAcademia = [
    'imagem' => 'imagens/academia06/65academia.jpg',
    'titulo' => 'Academia'
];

$fotoHorta = [
    'imagem' => 'imagens/horta09/horta09.jpg',
    'titulo' => 'Horta'
];

$fotoVista = [
    'imagem' => 'imagens/area_relax08/84relax.png',
    'titulo' => 'Vista'
];

$datasetfotos_sobre = [$fotoApartamento, $fotoBangaloLuxo, $fotoBangaloMaster, $fotoPiscina, $fotoRestaurante, $fotoSpa, $fotoRelax, $fotoSauna, $fotoLoja, $fotoAcademia, $fotoHorta, $fotoVista];

// ===== AVALIAÇÕES (6) =====

$avaliacaoErica = [
    'id' => 1,
    'nome' => 'Erica Pavan',
    'foto' => 'imagens/avaliacoes/avaliacao1.jpeg',
    'texto' => 'Excelente experiência! O apartamento de luxo superou todas as expectativas, com um atendimento impecável e instalações de primeira qualidade.',
    'estrelas' => 5
];

$avaliacaoGabriel = [
    'id' => 2,
    'nome' => 'Gabriel Mota',
    'foto' => 'imagens/avaliacoes/avaliacao2.jpeg',
    'texto' => 'O Bangalô Master foi perfeito para nossas férias em casal. Espaçoso, confortável e com uma vista deslumbrante. Recomendamos fortemente!',
    'estrelas' => 5
];

$avaliacaoEduarda = [
    'id' => 3,
    'nome' => 'Eduarda Santos',
    'foto' => 'imagens/avaliacoes/avaliacao3.jpeg',
    'texto' => 'O Bangalô de Luxo proporcionou o cenário perfeito para nossa viagem. Privacidade, conforto e um serviço excepcional.',
    'estrelas' => 5
];

$avaliacaoPaulo = [
    'id' => 4,
    'nome' => 'Paulo Araújo',
    'foto' => 'imagens/avaliacoes/avaliacao4.jpeg',
    'texto' => 'Já me hospedei em vários resorts, mas este se destaca pela atenção aos detalhes e qualidade do serviço. Voltarei com certeza!',
    'estrelas' => 5
];

$avaliacaoAntonio = [
    'id' => 5,
    'nome' => 'Antônio Xavier',
    'foto' => 'imagens/avaliacoes/avaliacao5.jpeg',
    'texto' => 'Entrei sem muitas expectativas e saí completamente impressionado. O serviço de concierge fez toda diferença na nossa estadia.',
    'estrelas' => 5
];

$avaliacaoSandra = [
    'id' => 6,
    'nome' => 'Sandra Ferreira',
    'foto' => 'imagens/avaliacoes/avaliacao6.jpeg',
    'texto' => 'O apartamento de luxo foi a melhor escolha para nossas férias em família. Espaçoso, confortável e com uma vista deslumbrante.',
    'estrelas' => 5
];

$datasetavaliacoes = [ $avaliacaoErica, $avaliacaoGabriel, $avaliacaoEduarda, $avaliacaoPaulo, $avaliacaoAntonio, $avaliacaoSandra];

?>




