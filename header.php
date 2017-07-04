<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous" />

        <?php wp_head();?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.9&appId=339493943137775";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <a href="/">
            <div class="container-fluid page-header" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/wb-vrijwilligers-header.png');">
            </div>
        </a>
        <div class="container-fluid navbg bg-faded">
            <div class="container">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
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
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="fb-button">
                <div class="fb-share-button" 
                    data-href="<?php get_permalink() ?>" 
                    data-layout="button" data-size="large" data-mobile-iframe="true">
                    <a class="fb-xfbml-parse-ignore" target="_blank" 
                        href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink() ?>&amp;src=sdkpreparse">
                        Delen
                    </a>
                </div>
            </div>
        </div>
