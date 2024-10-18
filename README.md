# Sistema de Contactos en PHP y MySQL

Este es un sistema de contactos desarrollado en PHP y MySQL, que incluye funcionalidades para dos tipos de usuarios: **administrador** y **usuario normal**. El sistema permite a los usuarios gestionar contactos, generar reportes, y tiene un sistema de roles y protección de rutas.

## Características

### Funcionalidades del Usuario Normal:
- Registrar, listar y gestionar (CRUD) contactos.
- Subir imágenes para los contactos.
- Generar reportes en PDF y Excel de los contactos.
  
### Funcionalidades del Administrador:
- Administrar usuarios (crear, editar y eliminar).
- Gestionar sus propios contactos.
- Generar reportes en PDF y Excel de todos los usuarios y sus contactos.
  
### Seguridad y Autenticación:
- Sistema de roles: Administrador y Usuario Normal.
- Protección de rutas según el rol de usuario.
- Autenticación de usuarios con manejo de sesiones.

## Requisitos del Sistema

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Composer (gestor de dependencias para PHP)

## Instalación

Sigue estos pasos para instalar el proyecto en tu máquina local:

### 1. Clonar el repositorio

```bash
git clone https://github.com/usuario/proyecto-sistema-contactos.git
cd proyecto-sistema-contactos
