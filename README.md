# Sunset Noronha

Website institucional para a Pousada Sunset Noronha, localizada em Fernando de Noronha. O projeto apresenta informações sobre acomodações, serviços, avaliações e permite realizar reservas através de um formulário de contato.

## Características

- Design responsivo e moderno
- Interface intuitiva e profissional
- Carrossel de imagens para pacotes de acomodação
- Sistema de avaliações com slider interativo
- Formulários de reserva e contato
- Vídeo de fundo na página inicial
- Modal de carrossel para visualização de imagens

## Tecnologias Utilizadas

- PHP 7.4+
- HTML5
- CSS3 (com Flexbox e Grid)
- JavaScript (Vanilla)
- Font Awesome (ícones)
- Google Fonts (tipografia)

## Estrutura do Projeto

```
sunset/
├── index.php              # Página inicial
├── pacote.php            # Página de pacotes/acomodações
├── servicos.php          # Página de serviços
├── sobre.php             # Página sobre nós
├── reservas.php          # Página de reservas
├── contato.php           # Página de contato
├── avaliacoes.php        # Página de avaliações
├── lib/                  # Bibliotecas e configurações
│   ├── config.php        # Configurações do sistema
│   ├── auth.php          # Sistema de autenticação
│   ├── datalib.php       # Dados e arrays de configuração
│   └── helpers/          # Funções auxiliares
├── parts/                # Componentes reutilizáveis
│   ├── cabecalho.php     # Head HTML
│   ├── header.php        # Cabeçalho/navegação
│   ├── footer.php        # Rodapé
│   ├── login.php         # Formulário de login
│   ├── cadastrar.php     # Formulário de cadastro
│   ├── home.php          # Conteúdo da home
│   ├── cardPacote.php    # Card de pacote
│   ├── cardServicos.php  # Card de serviço
│   └── formContato.php   # Formulário de contato
├── style/
│   └── style.css         # Estilos principais
├── script.js             # JavaScript principal
├── imagens/              # Imagens e assets
└── video/                # Vídeos de fundo
```

## Requisitos

- Servidor web (Apache, Nginx ou similar)
- PHP 7.4 ou superior
- Navegador web moderno com suporte a JavaScript

## Instalação

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/sunset.git
```

2. Coloque os arquivos na raiz do servidor web ou configure um virtual host

3. Configure o arquivo `lib/config.php` com as informações do seu ambiente:
   - Ajuste o `BASE_URL` conforme sua configuração
   - Configure as credenciais do banco de dados (se necessário)

4. Certifique-se de que as permissões de leitura estão corretas para os diretórios `imagens/` e `video/`

## Configuração

### Banco de Dados

O projeto está preparado para integração com banco de dados. Atualmente, os dados estão em arrays PHP no arquivo `lib/datalib.php`. Para usar banco de dados:

1. Configure as credenciais em `lib/config.php`
2. Crie as tabelas necessárias
3. Atualize as funções em `lib/datalib.php` para consultar o banco

### Personalização

- **Cores**: Edite as variáveis CSS em `style/style.css` (seção `:root`)
- **Conteúdo**: Modifique os arrays em `lib/datalib.php`
- **Imagens**: Adicione suas imagens na pasta `imagens/` mantendo a estrutura de pastas

## Funcionalidades

### Página Inicial
- Vídeo de fundo com controles de navegação
- Navegação suave entre seções
- Design responsivo

### Pacotes
- Exibição de 3 tipos de acomodações
- Carrossel de imagens em modal
- Sistema de estrelas para avaliação

### Serviços
- Grid de serviços oferecidos
- Ícones Font Awesome
- Layout responsivo

### Reservas
- Formulário de reserva
- Validação de campos
- Integração com sistema de envio de emails (a configurar)

### Contato
- Formulário de contato
- Mapa integrado do Google Maps
- Layout com imagem e formulário lado a lado

### Avaliações
- Slider de avaliações de clientes
- Navegação com botões e indicadores
- Design responsivo (1, 2 ou 3 colunas conforme o tamanho da tela)

## Navegação

O menu principal inclui links para:
- Home
- Reservas
- Pacotes
- Serviços
- Sobre
- Avaliações
- Contato

## Responsividade

O site é totalmente responsivo e se adapta a diferentes tamanhos de tela:
- Desktop (acima de 992px)
- Tablet (768px - 991px)
- Mobile (abaixo de 768px)

## Segurança

- Validação de dados nos formulários
- Proteção contra SQL Injection (quando usar banco de dados)
- Sanitização de entradas do usuário

## Melhorias Futuras

- Integração com banco de dados
- Sistema de autenticação completo
- Painel administrativo
- Sistema de reservas em tempo real
- Integração com gateway de pagamento
- Sistema de notificações por email

## Contribuindo

Contribuições são bem-vindas! Para contribuir:

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/MinhaFeature`)
3. Commit suas mudanças (`git commit -m 'Adiciona MinhaFeature'`)
4. Push para a branch (`git push origin feature/MinhaFeature`)
5. Abra um Pull Request

## Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## Autor

Desenvolvido para a Pousada Sunset Noronha.

## Suporte

Para questões ou suporte, entre em contato através do formulário no site ou abra uma issue no repositório.

