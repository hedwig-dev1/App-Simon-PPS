<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success dark alert-dismissible fade show" role="alert"><?= $this->session->flashdata('success');?>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>

<?php if ($this->session->flashdata('err')) { ?>
    <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><?= $this->session->flashdata('err');?>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>