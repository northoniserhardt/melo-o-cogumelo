
# Mush the Mushroom - Customizador de Personagens

![Mush the Mushroom](https://github.com/northoniserhardt/mush-the-mushroom/assets/32493494/ae505b57-5f2a-4b6f-bd13-baf78ce0b0e6)



Mush the Mushroom é um projeto desenvolvido em Laravel e Livewire que permite aos usuários customizar um personagem adorável chamado Mush, que é um cogumelo fofo. Os usuários podem escolher diferentes elementos para personalizar o Mush, incluindo a cabeça, óculos e o donut que ele segura.

## Pré-requisitos

Antes de começar a usar o projeto, certifique-se de que seu ambiente atenda aos seguintes pré-requisitos:

- [PHP](https://www.php.net/) >= 8.1
- [Composer](https://getcomposer.org/)

## Instalação

Clone o projeto:
- `cd mush-the-mushroom`
  
Navegue até o diretório do projeto:
- `cd mush-the-mushroom`

Instale as dependências do PHP usando o Composer:
- `composer install`
  
Copie o arquivo .env.example para .env:
- `cp .env.example .env`
  
Gere uma chave de aplicativo:
- `php artisan key:generate`
  
Inicie o servidor de desenvolvimento (Caso opte por não utilizar servidores como o Nginx ou Apache):
- `php artisan serve`
  
Agora, você pode acessar o Mush the Mushroom em seu navegador em http://localhost:8000. (Porta padrão 8000)

## Uso

1. Na página inicial, você verá o personagem Mush.

2. Clique nos botões ou menus para personalizar a cabeça, óculos e o donut que Mush segura.

3. As alterações feitas serão refletidas automaticamente no personagem Mush em tempo real.

## Próximos Passos

Os próximos passos para o projeto Mush the Mushroom incluem a expansão para se tornar um customizador genérico que pode acomodar qualquer persona com quaisquer customizações. Este projeto já foi arquitetado com esse objetivo em mente.
