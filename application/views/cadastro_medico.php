<?php echo validation_errors(); ?>
<div class="container my-10">
    <div class="card mt-5">

        <div class="card-body">
            <h4 class="card-title">Cadastro Medico:</h4>
            <p class="card-text">

                <?php
                echo form_open('medicos/cadastrarMedico'); ?>

                <div class="form-group">

                    <label for="login">Login:</label>
                    <?= form_input(array(
                        "name" => "login",
                        "id" => "login",
                        "class" => "form-control",
                        "placeholder" => "Nome de usuario (login)."
                    )); ?>
                    <small id="helpId" class="form-text text-muted">Informe um nome de usuario.</small>

                    <label for="login">Senha:</label>
                    <?= form_input(array(
                        "name" => "senha",
                        "id" => "senha",
                        "class" => "form-control",
                        "placeholder" => "Senha."
                    )); ?>
                    <small id="helpId" class="form-text text-muted">Informe a senha desejada (8 - 16 caracteres).
                    </small>
                    <label for="nome">Nome:</label>
                    <?= form_input(array(
                        "name" => "nome",
                        "id" => "nome",
                        "class" => "form-control",
                        "placeholder" => "Nome completo do paciente."
                    )); ?>
                    <small id="helpId" class="form-text text-muted">Informe apenas o nome, sem numeros.</small>

                    <label for="cpf">CPF:</label>
                    <?= form_input(array(
                        "name" => "cpf",
                        "id" => "cpf",
                        "class" => "form-control",
                        "placeholder" => "000.000.000-00"
                    )); ?>
                    <small id="helpId" class="form-text text-muted">Informe apenas numeros.</small>

                    <label for="crm">CRM:</label>
                    <?= form_input(array(
                        "name" => "crm",
                        "id" => "crm",
                        "class" => "form-control",
                        "placeholder" => "000000000-0"
                    )); ?>
                    <small id="helpId" class="form-text text-muted">Informe apenas numeros.</small>
                </div>
                <button type="submit" class="btn btn-primary my-2">Cadastrar</button>

                </form>
            </p>
        </div>
    </div>
</div>