<?php $render('header');?>
<div class="container">
  <div>
        <a class="text-body" href="<?=$base;?>/usuarios">
            <i class="fa-solid fa-arrow-left"></i> 
        </a>
  <div class="text-center">
    <h3>Editar Usuário</h3>
  </div>
<form class="validator" method="POST" action="<?=$base;?>/usuario/<?=$usuario['id-usuario'];?>/editar">
  <div class="mb-3">
    <label class="form-label">Nome:</label>
    <input data-rules="required|min=3" type="text" class="form-control" name="nome" value="<?=$usuario['nome'];?>" >
  </div>
  <div class="mb-3">
    <label class="form-label">Email:</label>
    <input data-rules="required|email" type="email" class="form-control" name="email" value="<?=$usuario['email'];?>" >
  </div>


  <div class=" text-center">
    <button type="submit" class="btn btn-success">
      <i class="fa-solid fa-plus"></i>
      Salvar</button>
    <a href="<?=$base;?>/usuarios" class="btn btn-danger">
        <i class="fa-solid fa-x"></i>
        Cancelar
    </a>
  </div>
  
 
</form>

</div>
<?php $render('footer');?>