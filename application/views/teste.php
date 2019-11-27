<?php if ($this->session->flashdata("success")) : ?>
    <p class="alert alert-success"><?= $this->session->flashdata("success"); ?></p>
    >
<?php endif ?>

<?php if ($this->session->flashdata("danger")) : ?>
    <p class="alert alert-danger"><?= $this->session->flashdata("danger"); ?></p>
<?php endif ?>

<?php $usuario = $this->session->get_userdata(); ?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>User ID</th>
                <th>login</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td><?= $usuario["user_id"] ?></td>
                <td><?= $usuario["login"] ?></td>
                <td><?= $usuario["tipo"] ?></td>


            </tr>
        </tbody>
    </table>
</div>