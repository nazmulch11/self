<?php 

global $self;
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
        <!-- favicon -->		
        <link rel="shortcut icon" type="<?php echo get_template_directory_uri(); ?>/image/x-icon" href="img/logo/favicon.ico">
        <?php wp_head(); ?>
    </head>
    <body>

        
        <header style="background-image: url(<?php echo $self['self-my-photo']['url']; ?> )">
            <!-- Start Top Header -->
            <div id="sticker" class="header-area">
                <div class="container">
                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                        <a class="navbar-brand page-scroll" href="#page-top"><img src="<?php echo $self['self-upload-logo']['url']; ?>"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="#home">Home</a>
                                </li>
<?php 

$menu_layout = $self['self-layout-manager']['enabled'];

if($menu_layout){

    foreach ($menu_layout as $key => $value) {
        switch ($key) {
            case 'about': echo ' 
                            <li>
                                <a class="page-scroll" href="#about">About</a>
                            </li>';
                break;

            case 'add-area': echo '';
                break;

            case 'skills': echo ' 
                            <li>
                                <a class="page-scroll" href="#skills">Skills</a>
                            </li>';
                break;

            case 'counter': echo ' ';
                break;

            case 'portfolio': echo ' 
                            <li>
                               <a class="page-scroll" href="#portfolio">Portfolio</a>
                            </li>';
                break;

            case 'testimonials': echo ' 
                            <li>
                                <a class="page-scroll" href="#reviews">Reviews</a>
                            </li>';
                break;

            case 'blog-area': echo ' 
                            <li>
                                <a class="page-scroll" href="#blog">Blog</a>
                            </li>';
                break;

            case 'contact-area': echo ' 
                            <li>
                                <a class="page-scroll" href="#contact">Contact</a>
                            </li>';
                break;
            

        }
    }

}


?>

                                <!--
                                <li>
                                    <a class="page-scroll" href="#about">About</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#skills">Skills</a>
                                </li>		              	
                                <li>
                                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                                </li>	
                                <li>
                                    <a class="page-scroll" href="#reviews">Reviews</a>
                                </li>		              	
                                <li>
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>		              	              	              	
                                <li>
                                    <a class="page-scroll" href="#contact">Contact</a>
                                </li> -->		              			              
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
            <!-- End Top Header -->
            <!-- Start Bottom Header -->
            <div id="home" class="header-img">
                <div class="header-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="header-bottom">
                                <h1>Hi, I'm <?php echo $self['self-my-name']; ?> </h1>
                                <h2 class="cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper">
                <?php 
                $q = new WP_Query(array(
                    'post_type' => 'self_sliders',
                    'posts_per_page'    => -1

                ));

                while( $q->have_posts() ): $q->the_post(); ?>                    
                    <b><?php the_title(); ?></b>
                <?php endwhile; ?>                        
                           
                                    </span>


                                </h2>
                                <a href="<?php echo $self['self-project-link']; ?>" class=" btn custom-btn">WORKS</a><span class="btn-2"><a href="<?php echo $self['self-hire-me']; ?>" class="btn custom-btn">HIRE ME</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Bottom Header -->
        </header>
		<!-- END Header -->