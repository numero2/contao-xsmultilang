<!-- indexer::stop -->
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>

	<?php if( !empty($this->links) ) { ?>
	<ul>
		<?php foreach( $this->links as $i => $entry ) { ?>
		<li class="<?php echo empty( $this->links[$i+1] ) ? 'last' : ''; ?>">
		
			<?php if( $entry['active'] ) { ?>

				<span class="active <?php echo $entry['lang']; ?>">
					<?php echo $GLOBALS['TL_LANG']['MSC']['xsmultilang_langs'][ $entry['lang'] ]; ?>
				</span>
			
			<?php } else { ?>
			
				<a href="<?php echo $entry['link']; ?>" target="_blank" class="<?php echo $entry['lang']; ?>">
					<?php echo $GLOBALS['TL_LANG']['MSC']['xsmultilang_langs'][ $entry['lang'] ]; ?>
				</a>
			
			<?php } ?>
		
		</li>
		<?php } ?>
	</ul>
	<?php } ?>

</div>
<!-- indexer::continue -->