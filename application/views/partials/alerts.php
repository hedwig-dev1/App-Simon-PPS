<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success dark alert-dismissible fade show" role="alert"><?= $this->session->flashdata('success');?>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>

<?php if ($this->session->flashdata('danger')) { ?>
    <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><?= $this->session->flashdata('danger');?>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>