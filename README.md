# Software: **Promona**

**CRUD das entidades: Empresa, Promoção e Membro**


# Linux


1. Realizar download do projeto: [PROJETO](https://github.com/leoalves100/prova)

2. Extrair prova-master.zip


## Instalar o apache2

```
$ sudo apt install apache2 
``` 

### Verificar as configurações apache2
```
 $ sudo apache2ctl configtest
```

### Editar o apache2
  ``` 
  $ sudo nano /etc/apache2/apache2.conf 
  ```
#### Adicionar na ultima linha do arquivo apache2.conf
  ```
  ServerName 127.0.0.1
  ```

### Reinicie o servidor
  ```
  $ sudo service apache2 restart
  ```

### Modifique as permissões do index.html
  ```
  $ sudo chmod 777 /var/www/html
  ```
 **Caso preferir, pode remover index.html**

### Copie a pasta prova-master para
```
/var/www/html/
```
&nbsp;
  
## Instale o PHP7.2
```
 $ sudo apt install php7.2
```
&nbsp;

## Instale o [COMPOSER](https://getcomposer.org/download/)

&nbsp;

## Instale o MySql
```
$ sudo apt install mysql-serve
```
### Configurando MySQL
  ```
  $ sudo mysql_secure_installation (n,y,y,y,y)
  ```
### Entre como root 
```
$ sudo mysql -u root -p
``` 
Defina a senha como: **0405**

### Altere os privilegios  
  ```
  mysql -u localhost -u root -p0405 mysql ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '0405';
   ```
   ```
  flush privileges;
   ``` 
### Criar o banco de dados

    create database db_topprime
    default charset utf8
    default collate utf8_general_ci;

### Importe o banco de dados

  1. Entre na pasta: **/var/www/html/prova-master/dump_db**
  
  2. Abra o TERMINAL dentro da pasta

    mysql -h 127.0.0.1 -u root -p db_topprime < dump_db_topprime.sql
&nbsp;
## Após a realização de todas as configurações acima

1. Entrar na pasta: **/var/www/html/prova-master/promona**

2. Abrir o TERMINAL dentro da pasta
  
3. Baixe todas as dependências do projeto  
```
composer install
``` 
4. Crie uma chave para aplicação
```
php artisan key:generate
```
5. Execute a aplicação
```
php artisan serve
``` 
### O que será exibido
``` 
Laravel development server started: <http://127.0.0.1:8000>
```

Copiar a URL **http://127.0.0.1:8000** e coloca no navegador, o projeto estará em total execução.


# Windows


1. Realizar download do XAMPP e instalação: **[XAMPP_v7.3.1](https://www.apachefriends.org/xampp-files/7.3.1/xampp-win32-7.3.1-0-VC15-installer.exe)**

2. Instalar composer: **[COMPOSER](https://getcomposer.org/Composer-Setup.exe)**


3. Realizar download do projeto: **[PROJETO](https://github.com/leoalves100/prova)**

4. Extraia prova-master.zip

5. Mover prova-master para: **c:\\xampp\htdocs**

### Criar banco de dados
```
create database db_topprime
default charset utf8
default collate utf8_general_ci;
```
## Importar banco de dados

1. Entrar na pasta: **/var/www/html/prova-master/dump_db**
  
2. Copie o arquivo: **dump_db_topprime.sql** para **c:\\xampp\htdocs\mysql\bin**
  
3. Abra o cmd e entre na pasta: **cd C:\xampp\mysql\bin**
  
4. Execute o comando
```
mysql -h 127.0.0.1 -u root -p db_topprime < dump_db_topprime.sql
``` 
**OBS**: Caso peça a senha, digite: **0405**

&nbsp;    
## Após a realização de todas as configurações acima

1. Abra o cmd e entre na pasta: 
**c:\xampp\htdocs\prova-master\prova-master\promona**

3. Baixe todas as dependências do projeto  
```
composer install
``` 
4. Crie uma chave para aplicação
```
php artisan key:generate
```
5. Execute a aplicação
```
php artisan serve
``` 
### O que será exibido
``` 
Laravel development server started: <http://127.0.0.1:8000>
```

Copiar a URL **http://127.0.0.1:8000** e coloca no navegador, o projeto estará em total execução.

&nbsp;
    
## Informações do desenvolvedor
Leandro Alves Magalhães dos Santos - [Linkedin](https://www.linkedin.com/in/leandro-alves-1b6678161/) – leandro.alves351@gmail.com

Distribuído sob a licença `MIT`. Veja [LICENSE](https://opensource.org/licenses/MIT) para mais informações.
