Practica3IV
===========

# Práctica 3 IV Diseño de máquinas virtuales
# Sergio Muñoz Gamarra


## Introducción

Esta práctica la voy a basar en Ubuntu Server, Apache, MySQL y PHP. El contenido que tendrá el servidor y sobre el que haremos la prueba será un periódico digital.

Las máquinas virtuales se crearán en VMWare Player, por una razón básica, VMWare nos permite la asignación de recursos de forma dinámica, por lo que primeramente le dedicaré recursos suficientes para que la instalación se lleve a cabo de forma rápida y después los reasignaré según las exigencias que vea necesarias para cada medida.

Por otra parte utitilizaré Ubuntu Server 13.04 de 64 bits.


## Preparación de las máquinas virtuales

Partiré inicialmente con una asignación de recursos suficiente para que la instalación de los componentes necesarios y del propio sistema operativo se lleve a cabo de la forma más rápida posible. Una vez este el sistema operativo instalado voy a proceder a la instalación de los distintos componentes antes mencionados y además instalaré git, para clonar los datos del periódico que tengo en otro repositorio de HitHub. La instalación se llevará a cabo siguiendo los siguientes comandos:

    apt-get install phpmyadmin apache2 git mysql-client mysql-server
  
Una vez instalados los paquetes vamos a proceder a descargar el repositorio con el cógido y la base de datos del periódico, pero antes de nada cambiaré la distribución del teclado, ya que su uso con la distribución por defecto es más que incómoda con el siguiente comando:

    loadkeys es

Este comando tiene un problema y es que cada vez que se reinicia la máquina virtual volverá a la configuración por defecto en cuanto a la distribución del teclado, pero como solución rápida me es útil ya que habitualmente solo suspendo las máquinas virtuales y no las apago.

Como iba diciendo voy a proceder a clonar el repositorio con el código del periódico:

    git clone https://github.com/SergioMGamarra/Practica2IV.git
    
Una vez clonado borraré los archivos que no sean necesarios y me quedaré con el código.
Para montar la aplicación lo primero que haré será importar la base de datos desde la interfaz web de phpmyadmin, accediendo con la IP de la máquina virtual /phpmyadmin:

IMG: IMPORTBD.PNG

Una vez importada la base de datos modificaremos los archivos de configuración de la base de datos para que nuestra aplicación pueda acceder de forma correcta a la base de datos. Una vez esta todo montado en la máquina virtual vamos a proceder al diseño y las pruebas de las máquinas virtuales


## Configuración de las máquinas virtuales

Se tendrán tres configuraciones para las máquinas virtuales sobre las que se realizará la prueba:

- Configuración 1
    Sistema Operativo: Ubuntu Server 13.04
    RAM: 512 MB
    Núcleos: 1 precesador

- Configuración 2
    Sistema Operativo: Ubuntu Server 13.04
    RAM: 1024 MB
    Núcleos: 1 precesador

- Configuración 3
    Sistema Operativo: Ubuntu Server 13.04
    RAM: 1024 MB
    Núcleos: 2 precesador

- Configuración 4
    Sistema Operativo: Ubuntu Server 13.04
    RAM: 2048 MB
    Núcleos: 1 precesador

- Configuración 5
    Sistema Operativo: Ubuntu Server 13.04
    RAM: 2048 MB
    Núcleos: 2 precesador

- Configuración 6
    Sistema Operativo: Ubuntu Server 13.04
    RAM: 1024 MB
    Núcleos: 3 precesador

# Mediciones

Para medir el rendimiento de cada máquina virtual lo que utilizaré será el benchmark de apache, que instalaré con el paquete de apache2-utils. Los comandos serán los siguientes:
    - Primera medida: ab -c100 -n20000 http://172.16.80.130/periodicoII/Portada/portada/portada.php
    - Segunda medida: ab -c100 -n40000 http://172.16.80.130/periodicoII/Portada/portada/portada.php
    - Tercera medida: ab -c100 -n60000 http://172.16.80.130/periodicoII/Portada/portada/portada.php
    
# Resultados:



    
