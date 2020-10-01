<?php
session_start();

if(isset($_SESSION['codPersonal'])){
    require 'header.php';

?>
<div class="container">
    <div class="row bg-danger">
        <div class="col-md">
          <h1>Esta es mi pagina</h1>
        </div>
    </div>
</div>
    

<?php
require 'footer.php'; 
}else{
    header("Location: ../login.html");
}
 ?>







