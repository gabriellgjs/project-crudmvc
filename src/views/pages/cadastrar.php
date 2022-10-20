<?php $render('header'); ?>

<div class="container">
  <div>
        <a class="text-body" href="<?=$base;?>">
            <i class="fa-solid fa-arrow-left"></i> 
        </a>
  <div class="text-center">
    <h2>Cadastro de Usuário</h2>
  </div>
<form class="validator" method="POST" action="<?=$base;?>/cadastrar">
  <div class="mb-3">
    <label class="form-label">Nome:</label>
    <input data-rules="required|min=3" type="text" class="form-control" name="nome">
  </div>
  <div class="mb-3">
    <label class="form-label">Email:</label>
    <input data-rules="required|email" type="email" class="form-control" name="email">
  </div>

  <div class="mb-3">
    <label class="form-label">Senha:</label>
    <input data-rules="required|min=6" type="password" class="form-control" name="senha">
  </div>

  <div class="pt-5 text-center">
    <button type="submit" class="btn btn-success">
      <i class="fa-solid fa-plus"></i>
      Cadastrar</button>
    <a href="<?=$base;?>" class="btn btn-danger">
        <i class="fa-solid fa-x"></i>
        Cancelar
    </a>
  </div>
  
 
</form>

</div>
<?php $render('footer');?>