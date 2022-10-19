<?php $render('header'); ?>

<div class="container">
   <div class="row">
        <div class="text-center p-5">
                <a href="<?=$base;?>/cadastrar">
                    <button  class="btn btn-outline-success" type="button">
                    <i class="fa-solid fa-plus"></i>
                    Cadastrar Usuário</button>
                </a>        
                <a href="<?=$base;?>/usuarios">
                    <button  class="btn btn-outline-primary" type="button">
                    <i class="fa-solid fa-plus"></i>
                    Listar Usuários</button>
                </a>        

        </div>
   </div>
  
    </section>

</div>

<?php $render('footer');?>