<?php $render('header'); ?>

<div class="container">
    <section class="listagem">
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

            </tbody>
        </table>
    </section>
    <section>
    <div class="d-grid gap-1">
    <a href="*">
        <button style="width: 100px;" class="btn btn-outline-success" type="button">
        <svg style="max-width: 15px; max-height: 15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
        Cadastrar Usuário</button>
    </a>        
    </div>
    </section>

</div>

<?php $render('footer');?>