<div class="col-lg-12">
	<?php if ($errors->has()): ?>
		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<ul class="square">
						<?php foreach ($errors->all() as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>	
		</div>
	<?php endif ?>
</div>