<?php
// Template Name: Page Home
?>
<?php get_header(); ?>
    <main>
      <section id="about">
        <div class="item1">
          <picture>
            <source media="(min-width:1440px)" srcset="<?php the_field('item1_imgg'); ?>" type="image/jpg" >
            <img src="<?php the_field('item1_imgp'); ?>" alt="">
          </picture>
        </div>
        <div class="item2 text-item">
          <div class="text-container">
            <h2><?php the_field('item2_title'); ?></h2>
            <p><?php the_field('item2_text'); ?></p>
            <a href="" aria-label="Learn more">LEARN MORE</a>
          </div>
        </div>
        <div class="item3">
          <picture>
            <source media="(min-width:1440px)" srcset="<?php the_field('item3_imgg'); ?>" type="image/jpg" >
            <img src="<?php the_field('item3_imgp'); ?>" alt="">
          </picture>
        </div>
        <div class="item4 text-item">
          <div class="text-container">
            <h2><?php the_field('item4_title'); ?></h2>
            <p><?php the_field('item4_text'); ?></p>
            <a href="" aria-label="Learn more">LEARN MORE</a>
          </div>
        </div>
        <div class="item5 image-text-item">
          <picture>
            <source media="(min-width:1440px)" srcset="<?php the_field('item5_imgg'); ?>" type="image/jpg" >
            <img src="<?php the_field('item5_imgp'); ?>" alt="">
          </picture>
          <div>
            <h3><?php the_field('item5_title'); ?></h3>
            <p><?php the_field('item5_text'); ?></p>
          </div>
        </div>
        <div class="item6 image-text-item">
          <picture>
            <source media="(min-width:1440px)" srcset="<?php the_field('item6_imgg'); ?>" type="image/jpg" >
            <img src="<?php the_field('item6_imgp'); ?>" alt="">
          </picture>
          <div>
            <h3><?php the_field('item6_title'); ?></h3>
            <p><?php the_field('item6_text'); ?></p>
          </div>
        </div>
      </section>

      <section id="testimonials" class="container">
        <h2>CLIENT TESTIMONIALS</h2>
        <div class="cards">
          <div class="card">
            <img src="<?php the_field('foto_depoimento1'); ?>" alt="<?php the_field('foto_depoimento1_nome'); ?>">
            <p class="text">
              <?php the_field('depoimento1'); ?>
            </p>
            <p class="name"><?php the_field('depoimento1_nome'); ?></p>
            <p class="profession"><?php the_field('depoimento1_profession'); ?></p>
          </div>
          <div class="card">
            <img src="<?php the_field('foto_depoimento2'); ?>" alt="<?php the_field('foto_depoimento2_nome'); ?>">
            <p class="text">
            <?php the_field('depoimento2'); ?>
            </p>
            <p class="name"><?php the_field('depoimento2_nome'); ?></p>
            <p class="profession"><?php the_field('depoimento2_profession'); ?></p>
          </div>
          <div class="card">
            <img src="<?php the_field('foto_depoimento3'); ?>" alt="<?php the_field('foto_depoimento3_nome'); ?>">
            <p class="text">
            <?php the_field('depoimento3'); ?>
            </p>
            <p class="name"><?php the_field('depoimento3_nome'); ?></p>
            <p class="profession"><?php the_field('depoimento3_profession'); ?></p>
          </div>
          </div>
        </div>
      </section>

      <div id="img-gallery">
        <picture>
          <source media="(min-width:1440px)" srcset="<?php the_field('gallery_fotog1'); ?>" type="image/jpg" >
          <img src="<?php the_field('gallery_fotop1'); ?>" alt="" />
        </picture>
        <picture>
          <source media="(min-width:1440px)" srcset="<?php the_field('gallery_fotog2'); ?>" type="image/jpg" >
          <img src="<?php the_field('gallery_fotop2'); ?>" alt="" />
        </picture>
        <picture>
          <source media="(min-width:1440px)" srcset="<?php the_field('gallery_fotog3'); ?>" type="image/jpg" >
          <img src="<?php the_field('gallery_fotop3'); ?>" alt="" />
        </picture>
        <picture>
          <source media="(min-width:1440px)" srcset="<?php the_field('gallery_fotog4'); ?>" type="image/jpg" >
          <img src="<?php the_field('gallery_fotop4'); ?>" alt="" />
        </picture>
      </div>
    </main>
<?php get_footer(); ?>