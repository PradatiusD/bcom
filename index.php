<?php
include_once 'data.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Brown Club of Miami</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- include font awesome, themify-icons, wow js animation, magnificPopup and FlexSlider -->
    <link media="all" rel="stylesheet" href="css/plugins.css">
    <!-- include bootstrap and custom  css -->
    <link media="all" rel="stylesheet" href="css/slideshow-banner.css">
</head>

<body>

<!-- Pre Loader -->
<div class="preloader" id="pageLoad">
    <div class="holder">
        <div class="sp sp-wave"></div>
    </div>
</div>

<!-- Main wrapper of the page -->
<div id="wrap">

    <!-- Header -->
    <header class="header-bg-light" id="header">
        <div class="container-fluid">
            <nav class="nav navbar navbar-expand-lg navbar-dark" id="main-menu">
                <!-- Logo -->
                <a class="navbar-brand logo" href="#home">
                    <img src="images/logo.png" class="normal" alt="Illusion logo">
                    <img src="images/logo-gray.png" class="gray" alt="Illusion logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav ml-md-auto" id="mainnav">
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#volunteering">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#review">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>

                    <a href="#contact" class="d-none d-lg-inline-block btn btn-primary btn-md text-uppercase" id="scroll_to_id">
                        Send A Message
                    </a>
                </div>

            </nav>
        </div>
    </header>


    <!-- Banner -->
    <section class="banner window-height banner-slider" id="home">
        <div class="flexslider">
            <ul class="slides">

                <!-- slide 1 -->
                <li>
                    <div class="fleximg zoomInOut" style="background-image: url(images/slider/catamaran.jpg)">
                        <div class="color-overlay black"></div>
                    </div>
                    <div class="flex-caption banner-caption">
                        <div class="container">
                            <div class="inner-wrap">
                                <h1 class="brand-heading light large ani ani_bottom d6">Uniting South Florida Brown Alumni</h1>
                                <div class="ani ani_bottom d9">
                                    <a href="https://www.facebook.com/groups/BrownClubMiami/" class="btn btn-default white btn-md outline text-uppercase">Join the Facebook Group</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- slide 2 -->
                <li>
                    <div class="fleximg zoomInOut" style="background-image: url(images/slider/breakthrough-hall.jpg)">
                        <div class="color-overlay black"></div>
                    </div>
                    <div class="flex-caption banner-caption text-center">
                        <div class="container">
                            <div class="inner-wrap">
                                <h1 class="brand-heading light large ani ani_bottom d6">Engage with South Florida</h1>
                                <div class="ani ani_bottom d9">
                                    <a href="https://www.facebook.com/groups/BrownClubMiami/" class="btn btn-default white btn-md outline text-uppercase">Join the Facebook Group</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <a href="#services" class="scroll-indicator light">
            <span class="arrow arrow-1 ti-angle-down"></span>
            <span class="arrow arrow-2 ti-angle-down"></span>
        </a>
    </section>

    <!--Services-->
    <section class="services common-box" id="services">
        <div class="container">
            <div class="text-block row">
                <div class="col-lg-8 mr-auto ml-auto text-center">
                    <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        The Brown Club of Miami is a volunteer organization dedicated to uniting the Brown Alumni community in South Florida, including both Broward & Miami-Dade counties
                    </h3>
                </div>
            </div>
            <ul class="row">
                <li class="col-lg-4 col-md-6">
                    <div class="item-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay="0.75s">
                        <span class="icon-wrap text-primary"><i class="ti-face-smile"></i></span>
                        <h4>Reunite with Alumni</h4>
                        <p>We focus on creating events that revive old friendships and forge new ones.</p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-6">
                    <div class="item-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <span class="icon-wrap text-primary"><i class="ti-thought"></i></span>
                        <h4>Propose Your Event</h4>
                        <p>We're always excited to showcase, support and amplify local alumni projects and events.</p>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="item-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay="1.25s">
                        <span class="icon-wrap text-primary"><i class="ti-world"></i></span>
                        <h4>Build Your Network</h4>
                        <p>We give you a chance to expand & explore career opportunities thanks to the amazing local alumni we work with!</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!--Counter Block -->
    <aside class="common-box count-block text-center parallax" data-parallax="scroll" data-image-src="images/mercedes-counts.jpg">
        <span class="color-overlay"></span>
        <ul class="row">
            <?php
            $counterItems = CounterItem::getCounters();
            foreach ($counterItems as $counterItem):?>
                <li class="col-lg-<?php echo ceil(12 / count($counterItems));?> col-sm-6">
                    <div class="holder">
                        <i class="<?php echo $counterItem->iconClass;?>"></i>
                        <span class="counter"><?php echo $counterItem->value;?></span>
                        <span class="text"><?php echo $counterItem->label;?></span>
                    </div>
                </li>
            <?php endforeach;?>
        </ul>
    </aside>


    <!-- Work List -->
    <section class="work common-box padding-bottom-0 text-center" id="work">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Events</h2>
                <span class="sub-title">Here's a snapshot of some of the kinds of events we have run in the past!</span>
            </div>

            <!-- Sorting Navigation -->
            <nav class="sorting-nav">
            <ul>
            <li class="active" data-filter="all">All Items</li>
            <li data-filter="1">Application</li>
            <li data-filter="2">Graphics</li>
            <li data-filter="3">Media</li>
            </ul>
            </nav>

        </div>

        <div class="work-list color-dark lightbox filtr-container">
            <?php
            $events = ClubEvent::getClubEvents();
            foreach($events as $event):?>
            <div class="filtr-item" data-category="1">
                <div class="item-wrap">
                    <a href="<?php echo $event->largeImage;?>" class="item" data-title="<?php echo $event->title;?>">
                        <img src="<?php echo $event->smallImage;?>" class="fill" alt="<?php echo $event->title;?>">
                        <div class="caption">
                            <div class="inner-caption">
                                <h4><?php echo $event->titleAbbrev;?></h4>
                                <p><?php echo $event->subtitle;?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach;?>
    </section>

    <!-- Quick Contact Banner -->
    <aside class="contact-banner text-center bg-primary">
        <div class="container">
            <h3>Looking to host an event with the Brown Club of Miami?</h3>
            <a href="#contact" class="btn btn-primary radius btn-md">Send a Message</a>
        </div>
    </aside>


    <!-- Price Table -->
    <section class="price-table common-box" id="volunteering">
        <span class="color-overlay"></span>
        <div class="container text-center">
            <div class="section-title text-center">
                <h2>Get Involved</h2>
                <span class="sub-title">To keep on bringing in a continual stream of events, we count on a network of amazing local alumni that help keep our community connected and engaged.  Here are a few ways you can help us!</span>
            </div>
            <div class="row">
                <div class="col-lg-10 mr-auto ml-auto">
                    <ul class="package-wrap row no-gutters align-items-center">
                        <!-- Item 1 -->
                        <li class="col-md-4">
                            <div class="item-wrap wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.3s">
                                <div class="title-wrap">
                                    <h3>Cute Cub</h3>
                                    <small style="text-transform: initial">Be a face for Brown</small>
                                </div>
                                <br />
                                <!--<span class="cost"> <b>$5</b> / per month </span>-->
                                <ul>
                                    <li><strong>Fun</strong> Connect with amazing high schoolers</li>
                                    <li><strong>Relevant</strong>Help the admissions team better understand its applicants</li>
                                </ul>
                                <a href="https://brunonia.brown.edu/alumni/volunteer/info/interviewing" target="_blank" class="btn btn-secondary btn-md outline radius">Reach Out</a></div>
                        </li>
                        <!-- Item 2 -->
                        <li class="col-md-4">
                            <div class="item-wrap active wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                                <div class="title-wrap">
                                    <h3>Burgeoning Bruno</h3>
                                    <small style="text-transform: initial">Let's collaborate on your idea</small>
                                </div>
                                <br />
                                <!--<span class="cost"> <b>$10</b> / per month </span>-->
                                <ul>
                                    <li><strong>Promotion</strong> We love promoting and supporting local alumni initiatives from fun to philanthropic</li>
                                    <li><strong>Collaboration</strong>We leverage our network to help your event get the resources it needs</li>
                                    <li><strong>Funding</strong> We can connect with the university alumni relations to request funding for the event you have in mind</li>
                                    <li><strong>University</strong> With enough time in advance, we can work to see when university leadership and faculty can come to support your event</li>
                                </ul>
                                <a href="#contact" class="btn btn-primary btn-md radius">Reach Out</a> </div>
                        </li>
                        <!-- Item 3 -->
                        <li class="col-md-4">
                            <div class="item-wrap wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.9s">
                                <div class="title-wrap">
                                    <h3>Brown Bear</h3>
                                    <small style="text-transform: initial">Help us shape our community</small>
                                </div>
                                <br />
                                <!--<span class="cost"> <b>$25</b> / per month </span>-->
                                <ul>
                                    <li><strong>Office Member</strong> If you would like to become a leader of the organization, feel free to reach out</li>
                                    <li><strong>Committee Member</strong> Want a low key way to help offer your opinion about future Brown events? Join our event or young alumni committee to give us your feedback!</li>
                                </ul>
                                <a href="#contact" class="btn btn-secondary  btn-md outline radius">Reach Out</a> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Block -->
    <section class="bg-dark hero-showcase" id="about">
        <div class="image-half left parallax align-middle" style="background-image:url(images/veritas-forum.jpg)">
            <div class="text-center">
                <a class="btn-videoplay color-primary" id="video_popup" href="https://www.youtube.com/watch?v=vTjyguBfAGE"><i class="ti-control-play"></i></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto">
                    <div class="why-choose-list light-color common-box">
                        <div class="section-title">
                            <h2>The Brown Promise</h2>
                        </div>
                        <ul>
                            <li>
                                <div class="item-wrap">
                                    <i class="fa fa-line-chart"></i>
                                    <h4>Life Changing</h4>
                                    <p>Brown's Promise: To replace all loans with scholarships in all University packaged financial aid for Brown undergraduates.</p>
                                </div>
                            </li>
                            <li>
                                <div class="item-wrap">
                                    <i class="ti-thumb-up"></i>
                                    <h4>An Big Change</h4>
                                    <p>Brown will need plenty of help to finance this promise, and so with the advancement office we're reaching out to alumni to help drive this initiative.</p>
                                </div>
                            </li>
                            <li>
                                <div class="item-wrap">
                                    <i class="ti-comments-smiley"></i>
                                    <h4>Part of Brown</h4>
                                    <p>This inititaive allows brown students to truly focus on the topics and passions that matter to them most.</p>
                                </div>
                            </li>
                            <li>
                                <div class="item-wrap text-center">
                                    <a href="https://bbis.advancement.brown.edu/bbphenix/brunonia/give-now" class="btn btn-primary">Donate Now</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--&lt;!&ndash; News and Blogs &ndash;&gt;-->
    <!--<section class="common-box newsnblog text-center" id="blog">-->
    <!--<div class="container">-->
    <!--<div class="section-title text-center">-->
    <!--<h2>Latest News</h2>-->
    <!--<span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie aliquet molestie. Donec viverra augue at diam maximus</span>-->
    <!--</div>-->
    <!--<div class="row">-->
    <!--&lt;!&ndash; item 1 &ndash;&gt;-->
    <!--<div class="col-lg-4 col-md-6">-->
    <!--<div class="item-wrap">-->
    <!--<a href="https://brunonia.brown.edu/giving/article/one-postdocs-quest-to-understand-how-photosynthesis-fights-climate-change" class="intro-image">-->
    <!--<img src="images/news/photosynthesis.png" class="fill" alt="Climate Change">-->
    <!--<span class="date">Dec, 2017</span>-->
    <!--</a>-->
    <!--<div class="caption">-->
    <!--<h4><a href="https://brunonia.brown.edu/giving/article/one-postdocs-quest-to-understand-how-photosynthesis-fights-climate-change">Deep breathing: One postdoc’s quest to understand how photosynthesis fights climate change</a></h4>-->
    <!--<p>Until her Voss Fellowship, Loren Albert did emissions research by climbing trees. Now, with the help of Assistant Professor Jim Kellner and drone technology, she has the whole forest in her sights.</p>-->
    <!--<a href="https://brunonia.brown.edu/giving/article/one-postdocs-quest-to-understand-how-photosynthesis-fights-climate-change" class="more arrow">More Details</a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--&lt;!&ndash; item 2 &ndash;&gt;-->
    <!--<div class="col-lg-4 col-md-6">-->
    <!--<div class="item-wrap">-->
    <!--<a href="https://brunonia.brown.edu/giving/article/new-construction-elevates-browns-competitive-spirit" class="intro-image">-->
    <!--<img src="images/news/college-hill.png" class="fill" alt="Reconstruction in Brown">-->
    <!--<span class="date">Dec, 2017</span>-->
    <!--</a>-->
    <!--<div class="caption">-->
    <!--<h4><a href="https://brunonia.brown.edu/giving/article/new-construction-elevates-browns-competitive-spirit">Revamping College Hill: New construction elevates Brown’s competitive spirit</a></h4>-->
    <!--<p>CGleaming new and renovated spaces are inspiring deeper collaboration and ingenuity—and, in athletics, giving Brown a boost.</p>-->
    <!--<a href="https://brunonia.brown.edu/giving/article/new-construction-elevates-browns-competitive-spirit" class="more arrow">More Details</a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--&lt;!&ndash; item 3 &ndash;&gt;-->
    <!--<div class="col-lg-4">-->
    <!--<div class="item-wrap">-->
    <!--<a href="#" class="intro-image">-->
    <!--<img src="images/news/promise.jpg" class="fill" alt="The Brown University Promise">-->
    <!--<span class="date">Dec, 2017</span>-->
    <!--</a>-->
    <!--<div class="caption">-->
    <!--<h4><a href="https://brunonia.brown.edu/giving/article/brunonians-support-brown-promise">Heeding the call: Brunonians far and wide support The Brown Promise</a></h4>-->
    <!--<p>With current-use gifts ranging from $10 to more than $1 million, people from every Brown constituency have come together to champion undergraduate financial aid. Hear what inspired their collective generosity. .</p>-->
    <!--<a href="https://brunonia.brown.edu/giving/article/brunonians-support-brown-promise" class="more arrow">More Details</a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--&lt;!&ndash;<div class="text-center">&ndash;&gt;-->
    <!--&lt;!&ndash;<a href="#" class="btn btn-default white btn-md radius text-uppercase shadow">More Post <i class="fa fa-chevron-circle-right"></i></a>&ndash;&gt;-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--</div>-->
    <!--</section>-->

    <!-- Testimonials -->
    <section class="bg-white hero-showcase" id="review">
        <div class="image-half right" style="background-image:url(images/daniela-hugging.jpg)"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mr-auto">
                    <!-- Testimonials -->
                    <div class="text-center featured-review color-dark common-box">
                        <div id="review-list">
                            <!-- Item 1 -->
                            <div class="item">
                                <h4>"It was one of the most fun nights I have had since returning to Miami"</h4>
                                <p>I just wanted to let you know that I had an absolute blast!  It was so nice to meet everyone, and to be able to talk about our shared experiences.  It was one of the most fun nights I have had since returning to Miami earlier this year.  Thank you so much for putting it together, and I hope to keep attending these events!</p>
                                <span class="review-by">Maria</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Team -->
    <section class="common-box text-center team" id="team">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Team</h2>
                <div class="sub-title">We couldn't be more thankful for a board that spans so many interests, class years, and abilities, as they help bring the best events and activities to our South Florida community!</div>
            </div>

            <?php
                $members = TeamMember::getBoardMembers();
            ?>

            <div class="row">
                <div class="team-list">
                    <?php

                    $executive_members = array_filter($members, function ($member) {
                        return $member->isExecutiveOfficer;
                    });
                    $wow_delay = 0;
                    foreach ($executive_members as $team_member):
                            $wow_delay += 0.3;
                            $team_member->renderBoardMemberHTML($wow_delay);
                            ?>
                    <?php endforeach;?>
                </div>
            </div>

            <div class="row" style="margin-top: 4em">
                <div class="team-list">
                    <?php
                    $committee_members = array_filter($members, function ($member) {
                        return !$member->isExecutiveOfficer;
                    });
                    $wow_delay = 3;
                        foreach ($committee_members as $team_member):
                            $wow_delay += 0.3;
                            $team_member->renderBoardMemberHTML($wow_delay);
                            ?>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </section>


    <!-- Our Clients -->
    <aside class="clients bg-white">
        <div class="container">
            <div class="section-title text-center" style="padding-bottom: 0;">
                <h2>Our Partners</h2>
                <div class="sub-title">Here are some of the partner organizations we've worked with to make our events possible.  A big thanks to them!</div>
            </div>
            <div class="client-list">
                <div>
                    <a href="http://bulac.org/">
                        <img src="images/logos/bulac-logo.png" alt="BULAC logo">
                    </a>
                </div>
                <div>
                    <a href="https://www.breakthroughcollaborative.org/">
                        <img src="images/logos/btm-logo.png" alt="Breakthrough Collaborative logo">
                    </a>
                </div>
                <div>
                    <a href="https://www.miamicountryday.org">
                        <img src="images/logos/mcds-logo.png" alt="Miami Country Day Logo">
                    </a>
                </div>
                <div>
                    <a href="http://knowledgeofcareers.org/">
                        <img src="images/logos/koc-logo.png" alt="Knowledge of Careers">
                    </a>
                </div>
            </div>
        </div>
    </aside>


    <!-- Contact Section  -->
    <section class="common-box contact primary-bg parallax" id="contact" style="background-image:url(images/ugly-sweater-contact.jpg)">
        <div class="color-overlay" style="opacity: 0.87"></div>
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <h3>Please do not hesitate to contact us if you have any further questions.</h3>
                    <p>We're always interested in hearing how we can bring your idea to life, or help you reunite with your local Brown family!</p>
                </div>
                <div class="col-md-6">
                    <ul class="contact-details">
                        <li>
                            <div class="inner-wrap">
                                <h4>Send us an Email</h4>
                                <a href="mailto:BrownClubofMiami@alumni.brown.edu"><i class="fa fa-envelope"></i>BrownClubofMiami@alumni.brown.edu</a>
                            </div>
                        </li>
                        <li>
                            <div class="inner-wrap">
                                <h4>Join our Facebook Group</h4>
                                <a href="https://www.facebook.com/groups/BrownClubMiami/"><i class="fa fa-facebook"></i>/groups/BrownClubMiami</a>
                            </div>
                        </li>
                        <li>
                            <div class="inner-wrap">
                                <h4>Follow us on Instagram</h4>
                                <a href="https://instagram.com/brownclubofmiami"><i class="fa fa-instagram"></i>@brownclubofmiami</a>
                            </div>
                        </li>
                        <li>
                            <div class="inner-wrap">
                                <h4>Join Our Linkedin Group</h4>
                                <a href="https://instagram.com/brownclubofmiami"><i class="fa fa-linkedin"></i>To network with local alumni</a>
                            </div>
                        </li>
                        <li>
                            <div class="inner-wrap">
                                <h4>Visit Brunonia</h4>
                                <a href="https://www.linkedin.com/groups/12269032/"><i class="fa fa-globe"></i>To see the latest news & events from Brown</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!--Contact Form
                <div class="col-md-6 ml-auto">
                    <form name="message" id="contactUs" novalidate>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-white"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-white"></p>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="6" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-white"></p>
                        </div>
                        <div class="btn-wrap">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-md btn-default white primary-color shadow text-uppercase radius">Send Message</button>
                        </div>
                    </form>
                </div>
                -->
            </div>
        </div>
    </section>


    <!--Footer -->
    <footer id="footer">
        <div class="container">
            <ul class="row align-items-center">
                <li class="col-md-6 legal-text">
                    &copy; Copyright 2018 Brown Club of Miami. Made with <a href="http://danielprada.co">♥</a> by <a href="http://danielprada.co">Daniel Prada</a>
                </li>
                <li class="col-md-6 social-media">
                    <a href="https://www.facebook.com/groups/BrownClubMiami/" rel="nofollow" target="_blank" class="radius"><i class="fa fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/brownclubofmiami/" rel="nofollow" target="_blank" class="radius"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/BrownMiami" rel="nofollow" target="_blank" class="radius"><i class="fa fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </footer>

</div>
<!--//- End Wrapper -->


<!-- JQUERY LIBRARY -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- jQuery easing -->
<script src="js/jquery.easing.1.3.min.js"></script>
<!-- Popper javascript -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap javascript -->
<script src="js/bootstrap.min.js"></script>
<!-- Combine plugins  -->
<script src="js/plugins.js"></script>
<!-- custom script  -->
<script src="js/custom.js?v=1"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-69253768-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-69253768-1');
</script>

</body>
</html>