<?php
    if ($this->uri->segment(1) != NULL) {?>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
	<li class="breadcrumb-item"><?= ucwords($this->uri->segment(1)) ?></li>
</ol>
<?php } ?>