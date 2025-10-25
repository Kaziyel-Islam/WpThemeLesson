<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
    
<header>

 <?php get_template_part('template-parts/header/nav'); ?>

</header>