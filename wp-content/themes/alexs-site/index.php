<?php define( 'WP_USE_THEMES', false ) ?>
<?php get_header() ?>

<section id="content">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : ?>
      <?php the_post() ?>

      <article>
        <h1>
          <a href="<?php the_permalink() ?>"
            rel="bookmark"
            title="Permanent Link to <?php the_title_attribute() ?>">
            <?php the_title() ?>
          </a>
        </h1>

        <h2>
          <?php the_time('F jS, Y') ?>
        </h2>

        <div class="body">
          <?php the_excerpt() ?>
        </div>

        <div class="footer">
          <div class="categories">
            <?php the_category(', ') ?>
          </div>

          <div class="read-more">
            <a href="<?php the_permalink() ?>"> Continue &rarr;</a>
          </div>
        </div>
      </article>
    <?php endwhile ?>
  <?php endif ?>
</section>

<?php get_footer() ?>
