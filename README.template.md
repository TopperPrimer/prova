# Promona

CRUD das entidades Empresa, Promoção e Membro

## Instalação

Linux
```sh

Realizar download do projeto: [PROJETO](https://github.com/leoalves100/prova)->Clone or download

Extrair prova-master.zip

Mover prova-master para: /var/www/html/

Instalar o apache2: sudo apt install apache2 

Verificar as configurações apache2: sudo apache2ctl configtest

Editar o apache2
  sudo nano /etc/apache2/apache2.conf
  - adicionar na ultima linha
  ServerName 127.0.0.1
  
Reiniciar servidor
  sudo service apache2 restart
  
Modificar permissões do index.html

  sudo chmod 777 /var/www/html
  
 [Caso preferir, pode remover index.html]
  
Instalar php7.2: sudo apt install php7.2

Instalar o MYSQL: sudo apt install mysql-serve

Configurando MySQL
  sudo mysql_secure_installation (n,y,y,y,y)
  
  Entrar como root: mysql -u root -p
    mysql -u localhost -u root -p0405 mysql
    ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'sua senha';
    flush privileges;
    
Criar banco de dados

  create database db_topprime
  default charset utf8
  default collate utf8_general_ci;

Importar banco de dados

  Entrar na pasta: /var/www/html/prova-master/dump_db
  
  Abrir o TERMINAL na pasta e rodar esse comando

    mysql -h 127.0.0.1 -u root -p db_topprime < dump_db_topprime.sql
  
##Após a realização de todas as configurações acima

Entrar na pasta /var/www/html/prova-master/promona

  Abrir o TERMINAL na pasta e rodar esse comando
  
    php artisan serve
    
    O que será exibido: Laravel development server started: <http://127.0.0.1:8000>
    Copiar a URL http://127.0.0.1:8000 e coloca no navegador, o projeto estará em total execução.
```
## Instalação

Windows
```sh

Realizar download do XAMPP: [XAMPP_v7.3.1](https://www.apachefriends.org/xampp-files/7.3.1/xampp-win32-7.3.1-0-VC15-installer.exe)

  Depois usa instalação: next>next>finish  :)
  

Realizar download do projeto: [PROJETO](https://github.com/leoalves100/prova)->Clone or download

Extrair prova-master.zip

Mover prova-master para: c:\\xampp\htdocs

Criar banco de dados

  create database db_topprime
  default charset utf8
  default collate utf8_general_ci;

Importar banco de dados

  Entrar na pasta: /var/www/html/prova-master/dump_db
  
  Copie o arquivo: dump_db_topprime.sql para c:\\xampp\htdocs\mysql\bin
  
  Execute no cmd: cd C:\xampp\mysql\bin
  
  Depois: 
    mysql -h 127.0.0.1 -u root -p db_topprime < dump_db_topprime.sql
    
##Após a realização de todas as configurações acima

Entrar na pasta c:\xampp\htdocs\prova-master\prova-master\promona

  Abrir o CMD na pasta e rodar esse comando
  
    php artisan serve
    
    O que será exibido: Laravel development server started: <http://127.0.0.1:8000>
    Copiar a URL http://127.0.0.1:8000 e coloca no navegador, o projeto estará em total execução.
    
   
```
## Meta
Leandro Alves Magalhães dos Santos - (https://www.linkedin.com/in/leandro-alves-1b6678161/) – leandro.alves351@gmail.com

Distribuído sob a licença `MIT`. Veja [LICENSE](https://opensource.org/licenses/MIT) para mais informações.
