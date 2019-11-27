<?php echo validation_errors(); ?>
<div class="container d-flex justify-content-center">
    <div class="card w-50 mt-5">
        <div class="card-body ">
            <h4 class="card-title">Login</h4>
            <p class="card-text">
                <?php echo form_open('login/logar'); ?>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <?= form_input(array(
                        'type' => 'text',
                        'name' => 'usuario',
                        'id' => 'usuario',
                        'class' => 'form-control',
                        'placeholder' => 'nome de usuario'
                    )) ?>
                    <label for="senha">Senha</label>
                    <?= form_input(array(
                        'type' => 'password',
                        'name' => 'senha',
                        'id' => 'senha',
                        'class' => 'form-control',
                        'placeholder' => 'senha'
                    )) ?>
                </div>
                <button type="submit" class="btn btn-primary my-2">Logar</button>
                </form>
            </p>
        </div>
        <div class="card-footer">
                        <?= anchor('Medicos/cadastrarMedico', 'Cadastre-se (medicos apenas)')?>
        </div>
    </div>
</div>