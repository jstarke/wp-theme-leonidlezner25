<?php get_template_part('src/layout/page', 'begin'); ?>

<div class="space-y-10">
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php echo get_permalink(get_the_ID()); ?>">
      <?php echo the_post_thumbnail('post-thumbnail', ['class' => 'h-32 lg:h-64 object-cover w-full rounded-md overflow-hidden']); ?>
    </a>
  <?php endif; ?>

  <div class="max-w-3xl mx-auto">
    <div class="space-y-2 lg:space-y-5 mb-10">
      <?php get_template_part('src/partials/page_headline'); ?>

      <?php if (is_single()) : ?>
        <?php get_template_part('src/posts/meta'); ?>
      <?php endif; ?>
    </div>

    <article class="">
      <?php the_post(); ?>

      <div class="prose prose-lg prose-leonidlezner">
        <?php the_content(); ?>
      </div>

      <?php if (comments_open() || get_comments_number()) : ?>
        <div class="pt-10">
          <div class="">
            <h2 class="text-3xl font-bold font-heading mb-10 text-color2"><?php lang('Comments'); ?></h2>

            <div class="post-comments">
              <?php comments_template(); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </article>

    <?php /* if (is_single()) : ?>
      <div class="col-span-7 lg:col-span-2">
        <?php get_template_part('src/partials/post_books'); ?>
      </div>
    <?php endif; */ ?>
  </div>

  <?php /*if (is_single()) : ?>
    <?php get_template_part('src/partials/more_category_posts', null, ['max_count' => 2]); ?>
  <?php endif;*/ ?>

</div>

<?php get_template_part('src/layout/page', 'end'); ?>