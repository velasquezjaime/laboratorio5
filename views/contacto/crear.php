<div class="container-md" >
    
<form action="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("mostrar")."" ?>" method="post">
<div class="mb-3">
    <label for="exampleInputText1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtNombre_contacto">
    <div id="textHelp" class="form-text"></div>
</div>

<div class="mb-3">
    <label for="exampleInputText1" class="form-label">Correo</label>
    <input type="email" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtCorreo_contacto">
    <div id="textHelp" class="form-text"></div>
</div>

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtComentario"></textarea>
    <div id="textHelp" class="form-text"></div>
</div>

<input type="hidden" value="<?php echo seg::getToken()?>">

<button type="submit" class="btn btn-success">Enviar</button>
<button type="reset" class="btn btn-danger">Borrar</button>
</form>

</div>