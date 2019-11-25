<div class="container">
    <div class="card">

        <div class="card-body">
            <h4 class="card-title">Home</h4>
            <?php if ($this->session->flahdata("success")) : ?>
                <p class="card-text"> <?= $this->session->flahdata("success")  ?></p>
                
                <?php endif ?>
                <?php if ($this->session->flahdata("danger")) : ?>
                    <p class="card-text"> <?= $this->session->flahdata("danger")  ?></p>
                    
                <?php endif ?>
        </div>
    </div>
</div>