<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="shadow bg-base-100">
        <div class="navbar container mx-auto px-4">
            <div class="flex-1">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
        </div>
    </header>