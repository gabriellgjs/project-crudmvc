<?php $render('header'); ?>

<div class="container">
<form>
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="email" class="form-control" name="nome">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>

  <div class="mb-3">
    <label class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha">
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