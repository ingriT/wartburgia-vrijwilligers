<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo get_bloginfo( 'name' ); ?> | <?php echo get_bloginfo( 'description' ); ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous" />

        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" />

        <?php wp_head();?>
    </head>
    <body>
        <div class="container-fluid" style="height: 10em;text-align: center;background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/wb-vrijwilligers-header.png');background-position: 50% 50%;">
        </div>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_bloginfo( 'wpurl' );?>">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <?php wp_list_pages( '&title_li=' ); ?>
                    </ul>
                </div>
            </div>
        </nav>
