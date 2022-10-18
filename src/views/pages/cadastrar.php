<?php $render('header'); ?>

<div class="container">
<form>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fa-solid fa-plus"></i>
    Cadastrar</button>
</form>

</div>
<?php $render('footer');?>