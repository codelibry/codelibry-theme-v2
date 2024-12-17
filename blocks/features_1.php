<?php
/*
 * Block: Features
 * 
 * Files to migrate to make this work
 * 
 * sass
 * features-1.sass
 * 
 * acf
 * 
 * 
 * php
 * helpers/heading-block.php
 * 
 */



/* Heading */

$heading = get_sub_field('section_title');

$label = $heading['label'];
$title = $heading['title'];
$titleTag = $heading['title_tag'];
$content = $heading['content'];

$buttonPrimary = get_sub_field('button_primary');
$buttonSecondary = get_sub_field('button_primary');

$cardTitleTag = get_sub_field('features__title_tag') ? get_sub_field('features__title_tag') : 'h3';



//var_dump($heading);

$features = get_sub_field('features__list');

if(!$features) return;

?>

<section class="features | section">
	<div class="features__container | container ">


		<!-- replace with Arsen's title func -->

		<?php if ($title) : ?>

			<?php render_heading_block($label, $title, $titleTag, $content, ''); ?>

		<?php endif; ?>


		<!-- replace with Arsen's title func -->

		<div class="features__list | row">
			<?php foreach ($features as $item): 
				$icon = $item['features__icon'];
				$title = $item['features__title'];
				
				$text =  $item['features__text'];
				?>
				<article class="features__item item-features | col-4">
					<div class="item-features__icon">
						<?php if($icon): ?>
							<img <?php acf_image_attrs($icon) ?> >
						<?php else: ?>
							<img <?php img_src('/placeholder-icon.svg'); ?> alt="placeholder">
						<?php endif; ?>
					</div>

					<?php if($title): ?>
						<<?php echo $cardTitleTag;?> class="item-features__title">
							<?php echo  esc_html($title); ?>
						</<?php echo $cardTitleTag;?>>
					<?php endif; ?>

					<?php if($text): ?>
						<div class="item-features__text">
							<?php echo esc_html($text); ?>
						</div>
					<?php endif; ?>
				</article>
			<?php endforeach; ?>
		</div>

		<?php if ($buttonPrimary || $buttonSecondary) : ?>

			<?php render_buttons_block($buttonPrimary, $buttonSecondary, 'center');?>

		<?php endif; ?>


	</div>
</section>
