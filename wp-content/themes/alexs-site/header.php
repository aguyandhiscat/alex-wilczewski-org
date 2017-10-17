<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title() ?></title>

<?php wp_head() ?>
</head>

<body <?php body_class() ?>>

<header>
  <section id="title">
    <h1><a href="/">Alex Wilczewski</a></h1>
    <h2>Freelance Web Developer</h2>
  </section>

<?php if(has_nav_menu('header-menu')) : ?>
  <nav role="navigation">
    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false, 'item_spacing' => 'discard')) ?>
  </nav>
<?php endif ?>
</header>
