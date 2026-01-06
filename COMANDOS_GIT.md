# Como Enviar o Projeto para o GitHub

Siga estes passos para enviar todo o projeto para o repositório GitHub que você criou.

## Passo 1: Abrir o Terminal/Git Bash

1. No Windows, abra o **Git Bash** ou **PowerShell**
2. Navegue até a pasta do projeto usando:
```bash
cd "C:\Users\jgarc\OneDrive\Área de Trabalho\github\sunset"
```

## Passo 2: Inicializar o Git (se ainda não foi feito)

Se o diretório ainda não é um repositório Git, execute:
```bash
git init
```

## Passo 3: Adicionar o Remote do GitHub

Adicione o repositório remoto que você criou:
```bash
git remote add origin https://github.com/juliagarciac/Sunset-Noronha.git
```

## Passo 4: Adicionar Todos os Arquivos

Adicione todos os arquivos do projeto ao staging:
```bash
git add .
```

## Passo 5: Fazer o Primeiro Commit

Faça o commit inicial com todos os arquivos:
```bash
git commit -m "Initial commit: Projeto Sunset Noronha completo"
```

## Passo 6: Renomear a Branch Principal (se necessário)

Se estiver usando uma branch antiga, renomeie para `main`:
```bash
git branch -M main
```

## Passo 7: Enviar para o GitHub

Envie todos os arquivos para o GitHub:
```bash
git push -u origin main
```

Se pedir credenciais, use:
- **Usuário**: seu nome de usuário do GitHub (juliagarciac)
- **Senha**: seu Personal Access Token (não use a senha da conta)

### Como Criar um Personal Access Token:

1. Vá para: https://github.com/settings/tokens
2. Clique em "Generate new token" → "Generate new token (classic)"
3. Dê um nome como "Sunset-Noronha"
4. Selecione o escopo `repo` (acesso completo aos repositórios)
5. Clique em "Generate token"
6. **Copie o token** (você só verá ele uma vez!)
7. Use esse token como senha quando o Git pedir credenciais

## Comandos Alternativos

Se der erro no passo 7, tente forçar o push (apenas na primeira vez):
```bash
git push -u origin main --force
```

## Verificar se Funcionou

Depois de executar os comandos, vá até:
https://github.com/juliagarciac/Sunset-Noronha

Você deve ver todos os arquivos do projeto lá!

---

## Resumo Rápido (todos os comandos de uma vez):

```bash
cd "C:\Users\jgarc\OneDrive\Área de Trabalho\github\sunset"
git init
git remote add origin https://github.com/juliagarciac/Sunset-Noronha.git
git add .
git commit -m "Initial commit: Projeto Sunset Noronha completo"
git branch -M main
git push -u origin main
```

