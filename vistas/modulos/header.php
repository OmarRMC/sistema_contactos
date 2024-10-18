<nav  class="nav_container">
 <ul> 
   <div>
  <li>
    <a class="nav-link" href="<?= BASE_URL?>home">Home</a>
    
  </li>
  <li>
    <a class="nav-link" href="<?= BASE_URL?>perfil">Perfil</a>    
  </li>
  
  <li>
    <a class="nav-link" href="<?= BASE_URL?>contactos">contactos</a>    
  </li>
  <?php if(isset($_SESSION['rol']) && $_SESSION['rol']=='admin'): ?>
    <li>
    <a class="nav-link" href="<?= BASE_URL?>usuarios">Usuarios</a>    
    </li>
  <?php endif; ?> 

  </div>

  <div>
    <?php if(isset($_SESSION['id_usuario'])) :?> 
   <li>
    <a class="nav-link" href="<?= BASE_URL?>perfil"><?= $_SESSION['nombre']?></a>
  </li>
  
  <li>
    <div class="imagenUsuario"> 
    
    <img  src="<?= BASE_URL.$_SESSION['imagen']?>" alt="perfil" />
    
    </div>
  </li>
  
  <li>
    <a  class="nav-link salir" href="<?= BASE_URL?>salir">Salir</a>
  </li>
     <?php endif; ?> 
  </div>
  
 </ul>

</nav>