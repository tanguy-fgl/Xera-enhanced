<div class="container-xl">
	<div class="page-header d-print-none">
		<h2 class="page-title py-3">
			<?= $this->base->text($title, 'title') ?>
		</h2>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="card mb-2">
				<div class="card-header">
					<div class="card-title"><?= $this->base->text($title, 'title') ?></div>
				</div>
				<div class="card-body">
					<form method="post" class="form">
						<div class="mb-0">
							<div class="row g-2">
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
								<div class="col">
									<input type="text" name="domain" class="form-control" placeholder="<?= $this->base->text('domain_name', 'label') ?>" id="domain" value="<?php if ($domain !== false): 
											echo($domain);
									 	endif ?>">
								</div>
								<div class="col-auto">
									<input type="submit" id="search" class="btn btn-primary" value="<?= $this->base->text('search', 'button') ?>"></input>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-8">
				<div class="card mb-2">
					<div class="card-header">
						<div class="card-title"><?= $this->base->text('search_result', 'heading') ?></div>
					</div>
					<?php if($domain == false): ?>
						<div class="card-body">
							<?= $this->base->text('search_note', 'paragraph') ?>
						</div>
					<?php elseif ($data !== false): ?>
						<?php if(is_null($data)): ?>
                            <div class="card-body">
                                This domain does not appear to be hosted with us.
                            </div>
                        <?php else: ?>
                            <table class="table card-table table-transparent">
                                <tr>
                                    <td><?= $this->base->text('account', 'heading') ?></td>
                                    <td><?= $data[3] ?></td>
                                </tr>
                                <tr>
                                    <td><?= $this->base->text('status', 'heading') ?></td>
                                    <td><?= $data[0] ?></td>
                                </tr>
                                <tr>
                                    <td><?= $this->base->text('nameserver', 'heading') ?> 1</td>
                                    <td>
                                        <?php if ($data[0] === 'ACTIVE'): ?>
                                            <?= $this->base->text('ok', 'label') ?>
                                        <?php else: ?>
                                            <?= $this->base->text('error', 'label') ?>
                                        <?php endif ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?= $this->base->text('nameserver', 'heading') ?> 2</td>
                                    <td>
                                        <?php if ($data[0] === 'ACTIVE'): ?>
                                            <?= $this->base->text('ok', 'label') ?>
                                        <?php else: ?>
                                            <?= $this->base->text('error', 'label') ?>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            </table>
                        <?php endif ?>
					<?php else: ?>
						<div class="card-body">
							<?= $this->base->text('search_error', 'paragraph') ?>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div>
