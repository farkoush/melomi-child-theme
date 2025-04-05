<?php
/**
 * Title: Hero Section
 * Slug: astra-child/hero-section
 * Categories: custom, featured
 * Block Types: core/post-content
 * Keywords: hero, banner, top
 */
?>
 <!-- wp:cover {"url":"your-image.jpg","dimRatio":50} -->
 <div class="wp-block-cover">
     <span aria-hidden="true" class="wp-block-cover__background has-background-dim-50"></span>
     <img class="wp-block-cover__image-background" alt="" src="your-image.jpg"/>
     <div class="wp-block-cover__inner-container">
         <!-- wp:heading {"textAlign":"center"} -->
         <h2 class="has-text-align-center">Welcome to My Site</h2>
         <!-- /wp:heading -->
     </div>
 </div>
 <!-- /wp:cover -->
