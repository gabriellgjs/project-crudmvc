<?php $render('header'); ?>

        
       
        
    
<div class="container">
    <div>
        <a class="text-body" href="<?=$base;?>">
            <i class="fa-solid fa-arrow-left"></i> 
        </a>
    </div>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $user):?>
            <tr>
                <th scope="row"><?= $user['id-usuario']; ?></th>
                <td> <?= $user['nome']; ?></td>
                <td><?= $user['email']; ?></td>
                <td>
                    <a class="text-body" href="<?=$base;?>/usuario/<?=$user['id-usuario'];?>/editar">
                        <i class="fa-regular fa-pen-to-square"></i>
                        EDITAR
                    </a>
                </td>
                <td>
                    <a class="text-body" href="<?=$base;?>/usuario/<?=$user['id-usuario'];?>/excluir">
                        <i class="fa-regular fa-trash-can"></i>
                        EXCLUIR
                    
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

<?php $render('footer');?>