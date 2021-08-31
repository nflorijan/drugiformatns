<div class="c-card-section">
  <?php if ( have_rows('add_member_card') ) : ?>
    <?php while( have_rows('add_member_card') ) : the_row(); ?>
      <div class="c-card">
        <?php if( get_sub_field('member_name') ) : ?>
          <h2 class="c-card__title">
            <?php echo get_sub_field('member_name'); ?>
          </h2>
          <?php endif; ?>
          <?php 
          $image = get_sub_field('member_image');
          if( !empty( $image ) ): ?>
              <img class="c-card__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>