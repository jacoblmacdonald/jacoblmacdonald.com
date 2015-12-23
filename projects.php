<?php include("content.php"); ?>
<div class="project-list">
	<div class="project-panel">
		<?php for($i = 0; $i < 2; $i++) { ?>
			<div class="project-select left <?= $i == 0 ? 'top' : 'bottom'; ?>" data-index=<?= $i; ?>>
				<div class="logo-wrapper">
					<?php echo $projects[$i]->get_logo(); ?>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="project-panel">
		<?php for($i = 2; $i < 4; $i++) { ?>
			<div class="project-select right <?= $i == 2 ? 'top' : 'bottom'; ?>" data-index=<?= $i; ?>>
				<div class="logo-wrapper">
					<?php echo $projects[$i]->get_logo(); ?>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php $i = 0; foreach($projects as $project) { ?>
		<div class="project p<?= $i; ?>">
			<div class="logo">
				<a href="<?= $project->link; ?>" target="_blank">
					<div class="wrapper">
						<?= $project->get_logo(); ?>
					</div>
				</a>
				<span class="close"><span></span></span>
			</div>
			<div class="info">
				<p>
					<?= $project->description; ?>
					<br>
					<br>
					<a href="<?= $project->link; ?>" target="_blank">Visit <span style="color:<?= $project->color; ?>;"><?= str_replace("//", "", $project->link); ?></span> --></a>
				</p>
			</div>
			<div class="image">
				<a href="<?= $project->link; ?>" target="_blank">
					<div class="images">
						<?php $j = 0; foreach($project->images as $image) { ?>
							<div class="img-load" data-src="/images/<?= $image; ?>"></div>
						<?php } ?>
					</div>
				</a>
				<p class="designed-by">
					<a href="<?= $project->designer_link; ?>" target="_blank">
						Designed by <span class="<?= $project->designer_color; ?>">
							<?= $project->designer; ?>
						</span>
					</a>
				</p>
			</div>
		</div>
	<?php $i++; } ?>
</div>