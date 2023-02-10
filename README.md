# Sistema Clínico - backend

Sistema para Gestão Clínica: pessoal administrativo, pessoal clínico, utentes, marcação de consulta, marcação de exame, gestão de receitas, histórico de diagnóstico, exames e consultas.

## Instalação

Requisitos:

-    PHP ^8.0
-    MySql ^5.7
-    composer ^2.2.6 
-    git ^2.38

Instalação

1.  Executar no Shell/PowerShell/ ou no seu CLI padrão
    ```
     git clone https://github.com/joao-muzange/SistemaClinico-back-end.git
     cd  SistemaClinico-back-end
     composer install
    ```
2.  Criar o arquivo **.env** a partir do **.env.example**

3.  Alterar configurações da base de dados do arquivo .env

    ```
        DB_HOST=host -> padrão: 127.0.0.1
        DB_PORT=porta_mysql -> padrão: 3306
        DB_DATABASE=nome_da_database
        DB_USERNAME=nome_do_utilizador -> padrão: root
        DB_PASSWORD=palavra_passe_do_utilizador
    ```

4.  Aplicar as migrações

    ```
        php artisan migrate
    ```

5.  Executar o projecto

    ```
        php artisan serve
    ```
