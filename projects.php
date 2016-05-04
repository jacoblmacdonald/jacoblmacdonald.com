<?php include("content.php"); $color = "black"; include("background-text.php"); ?>
<div class="project-list">
	<p class="project-header mobile">Projects<span>Click to visit site</span></p>
	<div class="project-panel-outer top">
		<div class="project-panel-inner">
		<?php for($i = 0; $i < ceil(count($projects) / 2); $i++) { ?>
			<div class="logo-wrapper" data-index=<?= $i; ?> data-url=<?= $projects[$i]->link; ?>>
				<?php echo $projects[$i]->get_logo(); ?>
			</div>
		<?php } ?>
		</div>
	</div>
	<div class="project-panel-outer bottom">
		<div class="project-panel-inner">
		<?php for($i = ceil(count($projects) / 2); $i < count($projects); $i++) { ?>
			<div class="logo-wrapper" data-index=<?= $i; ?> data-url=<?= $projects[$i]->link; ?>>
				<?php echo $projects[$i]->get_logo(); ?>
			</div>
		<?php } ?>
		</div>
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
				<section>
					<?= $project->description; ?>
					<br>
					<br>
					<a href="<?= $project->link; ?>" target="_blank">Visit <span style="color:<?= $project->color; ?>;"><?= str_replace("//", "", $project->link); ?></span> --></a>
				</section>
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
						Designed by <span class="<?= $project->designer_color; ?>"><?= $project->designer; ?></span>
					</a>
				</p>
			</div>
		</div>
	<?php $i++; } ?>
</div>