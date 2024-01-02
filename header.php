<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo get_title(); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- theme CSS -->
    <?php 
    wp_head();
    ?>
</head>
<body class="container">
    <div class="navigation-menu">
    <?php 
    wp_nav_menu(
        array(
            'menu'=>'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="" class="nav-links">%3$s</ul>'
        ),
    );
    ?>
    </div>
</body>