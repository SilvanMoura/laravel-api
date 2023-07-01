# Instalação

## Pré-requisitos
Se você ainda não possui um ambiente local Apache com PHP e MySQL, use um dos seguintes links:
 - Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/
Além disso, você precisará instalar o Composer: https://getcomposer.org/doc/00-intro.md
E também o Node: https://nodejs.org/en/download


## Executando

<div align="center" >
    <p>Clonando o Repositório</p>
</div>

<div>

<p>Abra o terminal do git, de preferência em sua área de trabalho, e execute o comando</p>

    git clone https://github.com/SilvanMoura/laravel-api

</div>

<br />

<div align="center" >
    <p>Entrando no diretório</p>
</div>

<div>

<p>Entre na pasta clonada</p>

    cd laravel-api

</div>

<br />

<div align="center" >
    <p>Criando .env</p>
</div>

<div>

<p>Criando arquivo .env com base em .env.example</p>

    cp .env.example .env    # Linux/Mac
    copy .env.example .env  # Windows

</div>

<br />

<div align="center" >
    <p>Instalando composer</p>
</div>

<div>

<p>Realizando instalação do composer</p>

    composer install

</div>

<br />

<div align="center" >
    <p>Geração da key</p>
</div>

<div>

<p>Realizando a geração da key</p>

    php artisan key:generate

</div>

<br />

<div align="center" >
    <p>Conexão com o Banco</p>
</div>

<div>

<p>Conectando ao Banco de Dados no arquivo .env</p>

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=DBname
    DB_USERNAME=root
    DB_PASSWORD=yourPassword   

</div>

<br />

<div align="center" >
    <p>Criação das migrates</p>
</div>

<div>

<p>Criando as migrates no Banco de Dados</p>

    php artisan migrate

</div>

<br />

<div align="center" >
    <p>Executando o back</p>
</div>

<div>

<p>Iniciando o projeto</p>

    php artisan serve

</div>