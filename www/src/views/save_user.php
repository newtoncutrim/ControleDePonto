<main class="content">
    <?php
    renderTitle(
        'Cadastro de Usuario',
        'Crie e atualize o usuario',
        'icofont-user'
    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="POST">
        <input type="hidden" name="id" value="<?= $id?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Informe o nome" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" value="<?= $name ?>">

                <div class="invalid-feedback">
                    <?php $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Informe o email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= $email ?>">

                <div class="invalid-feedback">
                    <?php $errors['email'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Informe a senha" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">

                <div class="invalid-feedback">
                    <?php $errors['password'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirmar senha</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme sua senha" class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">

                <div class="invalid-feedback">
                    <?php $errors['confirm_password'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Data de admissão</label>
                <input type="date" id="start_date" name="start_date" class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>" value="<?= $start_date ?>">

                <div class=" invalid-feedback">
                    <?php $errors['start_date'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Data de desligamento</label>
                <input type="date" id="end_date" name="end_date" class="form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>" value="<?= $end_date ?>">

                <div class="invalid-feedback">
                    <?php $errors['end_date'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="is_admin">Administrador?</label>
                <input type="checkbox" id="is_admin" name="is_admin" class=" ml-3 <?= $errors['is_admin'] ? 'is-invalid' : '' ?>" <?= $is_admin ? 'checked' : '' ?>>

                <div class="invalid-feedback">
                    <?php $errors['is_admin'] ?>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-lg">Salvar</button>
            <a class="btn btn-secondary btn-lg" href="/users">Cancelar</a>
        </div>
    </form>
</main>