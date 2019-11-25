<?php echo validation_errors();?>
<div class="container my-10">
    <?php
    echo form_open('pacientes/cadastrarPaciente'); ?>

    <div class="form-group">

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

        <label for="telefone">Telefone:</label>
        <?= form_input(array(
            "name" => "telefone",
            "id" => "telefone",
            "class" => "form-control",
            "placeholder" => "(00)00000-0000"
        )); ?>
        <small id="helpId" class="form-text text-muted">Informe apenas numeros.</small>
    </div>
    <button type="submit" class="btn btn-primary my-2">Cadastrar</button>

    </form>
</div>