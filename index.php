<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eShocan HomePage</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base copy 3.css">
</head>
<body>
<?php include 'include/header.php';?>


    <section class="eshocan_hero_section" id="eshocan_hero_section_home">
        <div class="eshocan_hero_main" >
            <div class="eshocan_hero_desc" data-aos="fade-right" data-aos-duration="1000">
                <h4>We Help Our Clients </h4>
                <h1>Scale Engineering<br>Capacity</h1>
                <p>And Deliver Great<br>Products</p>
                <a href="Company.php" class="hero-btn"> <span>Explore <i class="fas fa-arrow-circle-right"></i></a></span> 
                </a>
            </div>
            <div class="eshocan_hero_media"  >
                <div class="Hero_media_big one" id="div12">
                    <video autoplay loop muted class="video">
                        <source src="img/career/hero.mp4" autoplay loop muted type="video/mp4">
                        <source src="img/career/hero.mp4" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="Hero_media_big two" id="div9">
                    <video autoplay loop muted class="video">
                        <source src="img/services/vid.mp4" autoplay loop muted type="video/mp4">
                        <source src="img/services/vid.mp4" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="Hero_media_big three" id="div10">
                    <video autoplay loop muted class="video">
                        <source src="img/productdevelopement/hero.mov" autoplay loop muted type="video/mp4">
                        <source src="img/productdevelopement/hero.mov" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="Hero_media_big four" id="div11">
                    <img class="video" src="img/consult/IT Consulting_Banner Image.jpeg">
                </div>
                
                <div class="eshocan_hero_media_small">
                    <a href="Teams.php"><img src="img/homepage_teams.png" class="side-img-video" target="12" title="Teams" /> </a>
                    <a href="services.php"><img src="img/homepage_techservice.png" class="side-img-video" target="9" title="Technology" /></a>
                    <a href="ProductDevelopment.php"><img src="img/homepage_pe.png" class=" side-img-video" target="10" title="product Engineering" /> </a>
                    <a href="consulting-and-staffing.php"><img src="img/homepage_it.png" class=" side-img-video" target="11" title="IT Consulting"/></a>
                    
                </div>
            </div>
        </div>
    </section><!--eshocan_hero_section-->
    <div class="popup-video">
        <span>&times;</span>
        <video src="img/career/hero.mp4" muted controls id="myvideo"></video>
    </div>
    
    <section class="who-we-are-section">
        <h2 data-aos="zoom-in"  data-aos-duration="1000">Who We Are</h2>
        <div class="who-we-are-block">
            <div class="who-we-are" data-aos="fade-up"  data-aos-duration="1000">
                <p>
                    Established by leaders with decades of experience in the multiple industry verticals, eShocan is a Product development and engineering services company designed to provide flexible solutions and innovative products. Our mission is to enable digital technology for our clients by bringing together top engineering talent, deep industry expertise, and personal dedication in order 
                </p>
                <p>
                    With two offices located in US and 2 offices located in India, eShocan is still a flat, flexible, and transparent organization. This allows us to combine the best of both worlds. On the one hand, we???re a reliable, proven Product development, software engineering provider that is able to quickly scale your engineering capacity
                </p>
                <a href="Company.php" class="hero-btn"><img src="img/view-more-img.png" alt=""> View More</a>
            </div>

            <div class="who-we-are-list">
                <ul>
                    <li data-aos="fade-down"    data-aos-duration="1000">
                        <img src="img/who-we-are.png" alt="">
                        <p>Product development and engineering services company</p>
                    </li>
                    <li data-aos="fade-down"    data-aos-duration="1200">
                        <img src="img/who-we-are.png" alt="">
                        <p>Enable digital technology for our clients</p>
                    </li>
                    <li data-aos="fade-down"   data-aos-duration="1400">
                        <img src="img/who-we-are.png" alt="">
                        <p>A reliable, proven Product development, software engineering provider</p>
                    </li>
                </ul>
            </div>
        </div><!--who-we-are-block-->

        <div class="who-we-are-bottom">
            <ul>
                <li data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"  data-aos-duration="1000">
                    <p class="who-we-are-bottom-head">$20 million</p>
                    <p class="who-we-are-bottom-copy">Avg Cost Saving <br/>Idea</p>
                </li>

                <li data-aos="fade-down" data-aos-anchor-placement="bottom-bottom"  data-aos-duration="1200">
                    <p class="who-we-are-bottom-head">3 Centres</p>
                    <p class="who-we-are-bottom-copy">of Strategic <br/> Delivery</p>
                </li>

                <li data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"  data-aos-duration="1400">
                    <p class="who-we-are-bottom-head">15 + years</p>
                    <p class="who-we-are-bottom-copy">Technology & <br/> Engineering Services</p>
                </li>

                <li data-aos="fade-down" data-aos-anchor-placement="bottom-bottom"  data-aos-duration="1600">
                    <p class="who-we-are-bottom-head">100k + Hours </p>
                    <p class="who-we-are-bottom-copy">engineering work <br/> Delivered</p>
                </li>
            </ul>
        </div><!--who-we-are-bottom-->
        
    </section><!--who-we-are-section-->
       
    <section class="IndustriesInFocus">
        <h2 data-aos="zoom-in"  data-aos-duration="1000">Industries in Focus</h2>
            <div class="row">
                <div class="col-sup desktop-block">
                    <div class="col" >
                        <a href="Automotive.php"><img src="img/industries/auto.png" class="side-img"  target="1" data-aos="flip-left" data-aos-duration="1000"></a>
                        <a href="Automotive.php"><p>AUTOMOTIVE</p></a>
                        <a href="ElectricMobility.php"><img src="img/industries/elec.png" class="side-img" target="2" data-aos="flip-right" data-aos-duration="1000"> </a>
                        <a href="ElectricMobility.php"><p>ELECTRIC MOBILITY</p></a>
                    </div>   
                    <div class="col-r">
                        <a href="Heavy Machinery.php"><img src="img/industries/indust1.png" class="side-img"  target="3"  data-aos="flip-right" data-aos-duration="1000"></a>
                        <a href="Heavy Machinery.php"><p>Industrial Machinery</p></a>
                        <a href="Off Road.php"><img src="img/industries/offrd.png" class="side-img" target="4"  data-aos="flip-right" data-aos-duration="1000"> </a>
                        <a href="Off Road.php"><p>Off Road</p></a>
                    </div>    
                </div>
                <div class="col-sup-mid automotive active" id="div1">
                        <a href="Automotive.php"><img src="img/industries/auto.png"  data-aos="fade-up" data-aos-duration="1000"></a>
                        <a href="Automotive.php"><h3 id="midHead" data-aos="fade-up" data-aos-duration="1200">AUTOMOTIVE</h3></a>
                        <a href="Automotive.php"><p id="midDesc" data-aos="fade-up" data-aos-duration="1300">eShocan is a partner to global automotive OEMs and Tier 1 suppliers, providing expertise in multiple domains for full vehicle systems and subsystem development.</p></a>
                </div>
                <div class="col-sup-mid ELECTRIC-MOBILITY"  id="div2">
                    <a href="ElectricMobility.php"><img src="img/industries/elec.png"></a>
                    <a href="ElectricMobility.php"><h3 id="midHead">ELECTRIC MOBILITY</h3></a>
                    <a href="ElectricMobility.php"><p id="midDesc">From electric cars to electric bikes, our engineers can accelerate electric drivetrain development.</p></a>
                </div>
                <div class="col-sup-mid INDUSTRIAL-MACHINERY" id="div3">
                    <a href="Heavy Machinery.php"><img src="img/industries/indust.png" ></a>
                    <a href="Heavy Machinery.php"><h3 id="midHead">INDUSTRIAL MACHINERY</h3></a>
                    <a href="Heavy Machinery.php"><p id="midDesc">Our process allows us to customize designs to meet varying international standards, which enables our clients to rapidly bring products to new markets.</p></a>
                </div>
                <div class="col-sup-mid OFF-ROAD" id="div4">
                    <a href="Off Road.php"><img src="img/industries/offrd.png"></a>
                    <a href="Off Road.php"><h3 id="midHead">OFF ROAD</h3></a>
                    <a href="Off Road.php"><p id="midDesc">We don???t just design cars. Our engineering services extend to clients who want to deliver the best recreational vehicles to the market.</p></a>
                </div>

                <div class="col-sup-mid HEALTHCARE" id="div5">
                    <a href="Healthcare.php"><img src="img/industries/health.png" ></a>
                    <a href="Healthcare.php"><h3 id="midHead">HEALTHCARE</h3></a>
                    <a href="Healthcare.php"><p id="midDesc">Our engineers can ensure the success of your next investment in new and improved medical device technology.</p></a>
                </div>
                <div class="col-sup-mid TRANSPORTATION" id="div6">
                    <a href="Transportion.php"><img src="img/industries/Transportation-rail.png"></a>
                    <a href="Transportion.php"><h3 id="midHead">TRANSPORTATION</h3></a>
                    <a href="Transportion.php"><p id="midDesc">OnTrack or Off Track, our solutions will ensure all your projects are always OnTrack. Post Covid work has changed the Travel landscape and at eShocan we are well equipped to support the change </p></a>
                </div>
                <div class="col-sup-mid AEROSPACE-DEFENSE" id="div7">
                    <a href="Aerospace.php"><img src="img/industries/aerospace-defence.png"></a>
                    <a href="Aerospace.php"><h3 id="midHead">AEROSPACE &amp; DEFENSE</h3></a>
                    <a href="Aerospace.php"><p id="midDesc">With over 20+ experience in the aerospace industry, our in-house experts cater to both Civil and Military Aviation???s requirement</p></a>
                </div>
                <div class="col-sup-mid AERO-ENGINES" id="div8">
                    <a href="Aerospace.php"><img src="img/industries/aero-engines.png"></a>
                    <a href="Aerospace.php"><h3 id="midHead">AERO ENGINES</h3></a>
                    <a href="Aerospace.php"><p id="midDesc">eShocan is a partner to global automotive OEMs and Tier 1 suppliers, providing expertise in multiple domains for full vehicle systems and subsystem development.</p></a>
                </div>

                <div class="mobile-block"  data-aos="fade-right" data-aos-duration="1000">
                    <div class="col-sup ">
                        <div class="col">
                            <div>
                                <img src="img/industries/auto.png" class="side-img"  target="1">
                                <p>AUTOMOTIVE</p>
                            </div>
                            <div>
                                <img src="img/industries/elec.png" class="side-img" target="2"> 
                                <p>ELECTRIC MOBILITY</p>
                            </div>
                            
                            <div>
                                <img src="img/industries/indust.png" class="side-img"  target="3">
                                <p>Industrial Machinery</p>
                            </div>
    
                            <div>
                                <img src="img/industries/offrd.png" class="side-img" target="4"> 
                                <p>Off Road</p>
                            </div>
                           
                            <div>
                                <img src="img/industries/health.png" class="side-img" id="HEALTHCARE" target="5">
                                <p>HEALTHCARE</p>
                            </div>
    
                            <div>
                                <img src="img/industries/Transportation-rail.png" class="side-img" id="TRANSPORTATION" target="6">
                                <p>TRANSPORTATION</p> 
                            </div>
    
                            <div>
                                <img src="img/industries/aerospace-defence.png" class="side-img" id="AEROSPACE-DEFENSE" target="7">
                                <p>AEROSPACE &amp; DEFENSE</p>
                            </div>
                            
                            <div>   
                                <img src="img/industries/aero-engines.png" class="side-img" target="8"> 
                                <p>AERO ENGINES</p>
                            </div>
                           
                        </div>   
                    </div>
                </div>
               

                <div class="col-sup desktop-block">
                    <div class="col">
                        <img src="img/industries/health1.png" class="side-img" id="HEALTHCARE" target="5"  data-aos="flip-right" data-aos-duration="1000">
                        <a href="Healthcare.php"><p>HEALTHCARE</p></a>
                        <img src="img/industries/Transportation-rail.png" class="side-img" id="TRANSPORTATION" target="6"  data-aos="flip-right" data-aos-duration="1000">
                        <a href="Transportion.php"></a><p>TRANSPORTATION</p></a>
                    </div>   
                    <div class="col-r">
                        <img src="img/industries/aerospace-defence.png" class="side-img" id="AEROSPACE-DEFENSE" target="7"  data-aos="flip-left" data-aos-duration="1000">
                        <a href="Aerospace.php"></a><p>AEROSPACE &amp; DEFENSE</p></a>
                        <img src="img/industries/aero-engines.png" class="side-img" target="8"  data-aos="flip-left" data-aos-duration="1000"> 
                        <a href="Aerospace.php"></a><p>AERO ENGINES</p></a>
                    </div>
                </div>
            </div>
    </section><!---Industries in Focus-->


    <section class="homepage">
        <h2 data-aos="zoom-in" data-aos-duration="1000">Partners and clients</h2>
        <div class="partner-slider"> 
            <div><img src="img/client/image-7.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-9.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-10.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-11.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-12.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-8.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-1.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-2.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-3.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-6.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-4.png" alt=""></div>
            <div><img src="img/client/image-13.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-5.png" alt=""></div>
            <div><img src="img/client/image-15.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
            <div><img src="img/client/image-16.png" alt=""></div>
            <div><img src="img/client/image-14.png" alt=""></div>
        </div>
    </section> <!---partner-client-->
<!--
    <section class="partners-testimonal" data-aos="fade-up" data-aos-duration="1000">
        <div class="partners-testimonal-slider">
            <div class="partners-testimonal-block">
                <p style="font-weight: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies in malesuada ut enim, mauris, sodales etiam sit mauris. Egestas augue quis sit urna felis, adipiscing massa quam. Maecenas in est eu aliquet massa potenti et. Sed venenatis amet et duis dolor. Malesuada semper vel sed velit. Convallis justo, ac dui aenean phasellus. Enim purus varius consequat sed id. Amet, laoreet aenean lorem enim id mauris, vulputate. At fames sed tellus vitae dui, justo, ac nisl sed. Duis tincidunt imperdiet convallis aenean mi. Consequat, ipsum vel consequat cursus massa in eget amet. Sagittis, ultrices massa sem faucibus arcu nulla id nunc. Neque, mauris amet sit dictumst tristique massa et. Sed at.</p>
                <img src="img/client-slider-logo.png" alt="" class="block-img">
            </div>
            <div class="partners-testimonal-block">
                <p style="font-weight: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies in malesuada ut enim, mauris, sodales etiam sit mauris. Egestas augue quis sit urna felis, adipiscing massa quam. Maecenas in est eu aliquet massa potenti et. Sed venenatis amet et duis dolor. Malesuada semper vel sed velit. Convallis justo, ac dui aenean phasellus. Enim purus varius consequat sed id. Amet, laoreet aenean lorem enim id mauris, vulputate. At fames sed tellus vitae dui, justo, ac nisl sed. Duis tincidunt imperdiet convallis aenean mi. Consequat, ipsum vel consequat cursus massa in eget amet. Sagittis, ultrices massa sem faucibus arcu nulla id nunc. Neque, mauris amet sit dictumst tristique massa et. Sed at.</p>
                <img src="img/client-slider-logo.png" alt="" class="block-img">
            </div>
            <div class="partners-testimonal-block">
                <p style="font-weight: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies in malesuada ut enim, mauris, sodales etiam sit mauris. Egestas augue quis sit urna felis, adipiscing massa quam. Maecenas in est eu aliquet massa potenti et. Sed venenatis amet et duis dolor. Malesuada semper vel sed velit. Convallis justo, ac dui aenean phasellus. Enim purus varius consequat sed id. Amet, laoreet aenean lorem enim id mauris, vulputate. At fames sed tellus vitae dui, justo, ac nisl sed. Duis tincidunt imperdiet convallis aenean mi. Consequat, ipsum vel consequat cursus massa in eget amet. Sagittis, ultrices massa sem faucibus arcu nulla id nunc. Neque, mauris amet sit dictumst tristique massa et. Sed at.</p>
                <img src="img/client-slider-logo.png" alt="" class="block-img">
            </div>
            <div class="partners-testimonal-block">
                <p style="font-weight: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies in malesuada ut enim, mauris, sodales etiam sit mauris. Egestas augue quis sit urna felis, adipiscing massa quam. Maecenas in est eu aliquet massa potenti et. Sed venenatis amet et duis dolor. Malesuada semper vel sed velit. Convallis justo, ac dui aenean phasellus. Enim purus varius consequat sed id. Amet, laoreet aenean lorem enim id mauris, vulputate. At fames sed tellus vitae dui, justo, ac nisl sed. Duis tincidunt imperdiet convallis aenean mi. Consequat, ipsum vel consequat cursus massa in eget amet. Sagittis, ultrices massa sem faucibus arcu nulla id nunc. Neque, mauris amet sit dictumst tristique massa et. Sed at.</p>
                <img src="img/client-slider-logo.png" alt="" class="block-img">
            </div>
        </div>
    </section>
partners-testimonal-->

    <section class="blog-list">
        <div class="blog">
            <div class="blog-title-block" data-aos="zoom-in" data-aos-duration="1000">
                <h2>BLOGS</h2>
            </div>
            <div class="blog-img-block">
                <div class="blog-img-block-child">
                    <div class="blog-content-block" data-aos="fade-up" data-aos-duration="1000">
                        <a href="casestudy-10.php">
                            <img src="img/blog/home12.png" alt="">
                            <p>CAE Driven</p>
                        </a>
                    </div>
                    <div class="blog-content-block" data-aos="fade-up" data-aos-duration="1200">
                        <a href="blog-3.php">
                            <img src="img/blog/home4.png" alt="">
                            <p>Virtual Prototyping</p>
                        </a>
                    </div> 
                </div>

                <div class="blog-img-block-child">
                    <div class="blog-content-block automotive-img" data-aos="fade-up" data-aos-duration="1000">
                        <a href="blog-2.php">
                            <img src="img/blog/Home2.png" alt="">
                            <p>Team Building</p>
                        </a>
                    </div>
                    <div class="blog-content-block" data-aos="fade-up" data-aos-duration="1200">
                        <a href="blog-1.php">
                            <img src="img/blog/Home3.png" alt="">
                            <p>ADAS control systems</p>
                        </a>
                    </div>
                </div>
            </div>
           
        </div><!--blog-->
    </section><!--blog-list-->

    <section class="blog-list">
        <div class="blog case-study">
            <div class="blog-title-block" data-aos="zoom-in" data-aos-duration="1000">
                <h2>Case<br/> Studies</h2>
            </div>

            <div class="blog-img-block">
                <div class="blog-img-block-child">
                    <div class="blog-content-block automotive-img " data-aos="fade-up" data-aos-duration="1000">
                        <a href="casestudy-1.php">
                            <img src="img/casestudy/home1.png" alt="">
                            <p>Lean Production</p>
                        </a>
                    </div>
                    <div class="blog-content-block" data-aos="fade-up" data-aos-duration="1200">
                        <a href="casestudy-2.php">
                            <img src="img/casestudy/home2.png" alt="">
                            <p>Aeroengines</p>
                        </a>
                    </div>
                </div>
                <div class="blog-img-block-child">
                    <div class="blog-content-block" data-aos="fade-up" data-aos-duration="1000">
                        <a href="casestudy-3.php">
                            <img src="img/casestudy/home3.png" alt="">
                            <p>Design Rule</p>
                        </a>
                    </div>
                    <div class="blog-content-block" data-aos="fade-up" data-aos-duration="1200">
                        <a href="casestudy-4.php">
                            <img src="img/casestudy/home4.png" alt="">
                            <p>BIW Spot welding</p>
                        </a>
                    </div> 
                </div>
            </div>
           
        </div><!--blog-->
    </section><!--case-study-->

    <section class="people-culture">
        <div class="people-culture-block">
            <div class="people-culture-img-block" data-aos="fade-up" data-aos-duration="1000">
                <img src="img/peoplenculture.png" alt="">
            </div>

            <div class="people-culture-copy-block" >
                <p class="people-culture-copy-block-heading" data-aos="fade-up" data-aos-duration="1000">We create a comfortable and encouraging workplace environment for our teams to grow, develop, and design innovative solutions.</p>
                <p class="people-culture-copy-block-question" data-aos="fade-up" data-aos-duration="1200">Why Join eshocan?</p>
                <p class="people-culture-copy-block-copy" data-aos="fade-up" data-aos-duration="1400">As an employee-focused company, eShocan offers an attractive career trajectory with room for growth and benefits to support your family and financial goals.</p>
                <a href="career.php" class="hero-btn" data-aos="fade-up" data-aos-duration="1500"><img src="img/view-more-img.png" alt=""> View More</a>
            </div>
        </div><!--people-culture-block-->
    </section><!--people-culture-->

    <section class="partners-testimonal testimonial" >
        <div class="partners-testimonal-slider" data-aos="fade-up" data-aos-duration="1200">
            <div class="partners-testimonal-block">
                <img src="img/testimonial/1.png" alt="" class="block-img"/>
                <p class="testimonial-copy">"eShocan helped me achieve my dream by giving me a new opportunity to continue with my learning and professional growth. What I like the most about & to work with eShocan is the attention and support Management give to all of us. Delighted to be part of this great team???
                </p>
                <p class="testimonial-name">Erasmo Antonio De la torre Ortega</p>
                <p class="testimonial-designation">Optical Engineer</p>
                
            </div>
            <div class="partners-testimonal-block">
                <img src="img/testimonial/3.png" alt="" class="block-img"/>
                <p class="testimonial-copy">eShocan provides the best of both worlds by presenting multiple opportunities and platforms for career advancement, while also offering great work-life balance and genuine support of one???s financial and immigration needs. I wholeheartedly recommend eShocan to job seekers of all levels.</p>
                <p class="testimonial-name">Nirupama Warrier</p>
                <p class="testimonial-designation">Automotive Design Engineer</p>
            </div>
            <div class="partners-testimonal-block">
                <img src="img/testimonial/2.png" alt="" class="block-img"/>
                <p class="testimonial-copy">"Having worked for more than 14 years in my previous organization in India, I was a bit anxious before joining eShocan in USA especially about its culture, my family settling and an employer which could provide me a meaningful career. However, my last half a year here have been the best so far!, The Global leadership is both Client as well as People oriented and strives to make eShocan a top-notch global consulting firm which meets the ever changing needs of the market. eShocan has a great culture and provides ample learning and growth opportunities for all of us. It also recognizes the hard work of all of its employees and absolutely deserves all the accolades. i am happy to be associated with the company of such high repute, working towards providing best to the employee.???
                </p>                
                <p class="testimonial-name">Rahul Milhotra</p>
                <p class="testimonial-designation">Mechanical design Engineer</p>
            </div>
            <div class="partners-testimonal-block">
                <img src="img/testimonial/4.png" alt="" class="block-img"/>
                <p class="testimonial-copy">I have been with eShocan for about a year and this is my first company to work for in the US.
                    It was a big step for me moving to a new country and I was nervous, but the management made sure they tried to make the transition as smooth as possible. They were very compassionate and answered all my questions and concerns. The top management is very approachable and ready to work with you if you approach them with new ideas. The variety of career options and their vision of collaborative growth is unique which has encouraged me to push my boundaries and think outside the box. I am very excited and happy to be a part of this organization.
                    </p> 
                <p class="testimonial-name">Arjunshankar Dhanushkodi</p>
                <p class="testimonial-designation">Sr. Engineer</p>
            </div>
            <div class="partners-testimonal-block">
                <img src="img/testimonial/5.png" alt="" class="block-img"/>
                <p class="testimonial-copy">"eShocan's culture is very transparent, every employee, irrespective of their position is given a chance to be heard, and there are ample opportunities available to those who want to build a career here. It is a young organization with a contemporary, innovative and entrepreneurial approach that distinguishes it from its competitors. I have been with the organization for some time now and have seen myself transform as a professional in more than one way. eShocan is one of the few companies that would take immigration matters very seriously and takes??care of any Visa /GC requirements in a timely manner???
                </p> 
                <p class="testimonial-name">Saniyal Afreen Khan</p>
                <p class="testimonial-designation">HMI ??? Team Lead</p>
            </div>
            <div class="partners-testimonal-block">
                <img src="img/testimonial/6.png" alt="" class="block-img"/>
                <p class="testimonial-copy">???I started working for eShocan, as a recruiter, shortly after graduating from Grand Valley State University. Everyone was welcoming and helpful when I started my career with eShocan. The recruiting team was there to help with any questions or concerns I had. I have had the chance to meet and work with amazing people as the company continues to grow. I look forward to my future with a great company like eShocan???
                </p> 
                <p class="testimonial-name">Hannah McPhee</p>
                <p class="testimonial-designation">Talent Acquisition Specialist</p>
            </div>
            <div class="partners-testimonal-block">
                <img src="img/testimonial/7.png" alt="" class="block-img"/>
                <p class="testimonial-copy">???eShocan has a fantastic work environment where everyone works as a team. Even with the fast growth of the company you know eShocan cares for each of their employees individually. I moved from South Carolina to work for eShocan, and their team made the transition very easy for me. I recommend anyone seeking a new job opportunity to reach out to eShocan???s recruiting team.???
                </p> 
                <p class="testimonial-name">Emily Arena</p>
                <p class="testimonial-designation">HR ??? Executive</p>
            </div>
        </div>
    </section><!--partners-testimonal-->

    <?php include 'include/footer.php';?>


</body>
</html>