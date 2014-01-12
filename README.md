Practica3IV
===========

# Practica 3 IV Diseño de máquinas virtuales
# Sergio Muñoz Gamarra


## Introducción

Esta práctica la voy a basar en Ubuntu Server, Apache, MySQL y PHP. El contenido que tendrá el servidor y sobre el que haremos la prueba será un periódico digital.

Las máquinas virtuales se crearán en VMWare Player, por una razón básica, VMWare nos permite la asignación de recursos de forma dinámica, por lo que primeramente le dedicaré recursos suficientes para que la instalación se lleve a cabo de forma rápida y después los reasignaré según las exigencias que vea necesarias para cada medida.

Por otra parte utitilizaré Ubuntu Server 12.04 LTS de 64 bits.


## Preparación de las máquinas virtuales

Partiré inicialmente con una asignación de recursos suficiente para que la instalación de los componentes necesarios y del propio sistema operativo se lleve a cabo de la forma más rápida posible. Una vez este el sistema operativo instalado voy a proceder a la instalación de los distintos componentes antes mencionados y además instalaré git, para clonar los datos del periódico que tengo en otro repositorio de HitHub. La instalación se llevará a cabo siguiendo los siguientes comandos:

    apt-get install phpmyadmin apache2 git
  
Una vez instalados los paquetes vamos a proceder a descargar el repositorio con el cógido y la base de datos del periódico, pero antes de nada cambiaré la distribución del teclado, ya que su uso con la distribución por defecto es más que incómoda con el siguiente comando:

    loadkeys es

Este comando tiene un problema y es que cada vez que se reinicia la máquina virtual volverá a la configuración por defecto en cuanto a la distribución del teclado, pero como solución rápida me es útil ya que habitualmente solo suspendo las máquinas virtuales y no las apago.

Como iba diciendo voy a proceder a clonar el repositorio con el código del periódico:

    git clone https://github.com/SergioMGamarra/Practica2IV.git
    
Una vez clonado borraré los archivos que no sean necesarios y me quedaré con el código.
