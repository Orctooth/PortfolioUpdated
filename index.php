<!DOCTYPE html>
<html lang="en">
    <head>
        
        <link rel="stylesheet" href="css/cursor.css">
        <link rel="stylesheet" href="css/mmenu.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/hamburgers.css" rel="stylesheet">
        <title>Harry Welchman's Portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
        <script src="https://kit.fontawesome.com/886eae3fd6.js" crossorigin="anonymous"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/site.webmanifest">
        <!-- Hero-image background photo by <a href="https://unsplash.com/@didsss?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Didssph</a> on <a href="https://unsplash.com/t/textures-patterns?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a> -->
    </head>
    <body>
        
        <nav id="my-menu">
            <ul class="sticky-menu sticky-nav">
                <li class="initials-box">
                    <h1><a href="">HW</a></h1>
                </li>
                <li class="menu-box">
                    <ul class="Inset">
                        <li>
                            <a href="html/about.html">About Me</a>
                        </li>
                        <li>
                            <a id="folio-link" href="#folio">My Portfolio</a>
                        </li>
                        <li>
                            <a href="html/coding.html">Coding Examples</a>
    
                        </li>
                        <li>
                            <a href="html/scsscheme.html">SCS Scheme</a>
    
                        </li>
                    </ul>
                    
                    
                </li>
                <li class="contact-label-box">
                    <a id="contact-link" href="index.html#contact">Contact Me</a>
                </li>
                <li class="contact-icon-box">
                    <a href="https://www.linkedin.com/in/harry-welchman-0ba7a01a0/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/Orctooth" target="_blank"><i class="fab fa-github"></i></a>
                </li>
            </ul>
    
        </nav>
        
        
        <div id="my-page" class="my-page">
            
            
            <div id="burger-button">
                <button class="hamburger hamburger--elastic" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
            
            
            <div class="sticky-menu sticky-desktop">
                <div class="initials-box">
                    <h1><a href="">HW</a></h1>
                </div>
                <div class="menu-box">
                    <ul>
                        <li>
                            <a href="html/about.html">About Me</a>
                        </li>
                        <li>
                            <a href="#folio">My Portfolio</a>
                        </li>
                        <li>
                            <a href="html/coding.html">Coding Examples</a>
    
                        </li>
                        <li>
                            <a href="html/scsscheme.html">SCS Scheme</a>
    
                        </li>
                    </ul>
                    
                    
                </div>
                <div class="contact-label-box">
                    <a href="#contact">Contact Me</a>
                </div>
                <div class="contact-icon-box">
                    <a href="https://www.linkedin.com/in/harry-welchman-0ba7a01a0/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/Orctooth" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div id="main-content">
                
                
                <div class="hero-image" id="top-hotspot">
                    <div class="overlay">
                        <div class="hero-image-text">
                            <h1 id="title">My Name is Harry Welchman</h1>
                            <h3 class="typed">I'm a web developer</h3>
                        </div>
            
                        <div class="scroll-down-link">
                            <a href="#folio">
                                <p>Scroll Down</p>
                                <i class="fas fa-chevron-down"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
        
                
        
                <div class="portfolio" id="folio">
                    <div class="folio-card">
                        <a href="NM2\index.html" class="folio-link" target="_blank">
                            <div class="picture">
                                <img src="img/NMMockup.PNG" alt="project-1" class="folio-thumb">
                                <div class="pop-up">
                                    <p>
                                        Netmatters Landing Site Fascimile:<br><br>
        
                                        A faithful mockup of the Netmatters official site's landing page including the base html/css and JavaScript behaviour.
                                    </p>
                                </div>
                            </div>
                            
                            <h2>Project One</h2>
                            <p>View Project <i class="fas fa-arrow-right"></i></p>
                        </a>
                    </div>
                    <div class="folio-card">
                        <a href="pic-a-pic\index.html" class="folio-link" target="_blank">
                            <div class="picture">
                                <img src="img/Pic-a-pic.png" alt="project-2" class="folio-thumb">
                                <div class="pop-up">
                                    <p>
                                        JavaScript Reflection:<br><br>

                                        A site with API integration for displaying images from a remote host site.
                                    </p>
                                </div>
                            </div>
                            
                            <h2>Project Two</h2>
                            <p>View Project <i class="fas fa-arrow-right"></i></p>
                        </a>
                    </div>
                    <div class="folio-card">
                        <a href="http://wordpress.harry-welchman.netmatters-scs.co.uk" class="folio-link" target="_blank">
                            <div class="picture">
                                <img src="img/cook-em-up.png" alt="project-3" class="folio-thumb">
                                <div class="pop-up">
                                    <p>
                                        WordPress Reflection: <br><br>

                                        A multi-page site built with WordPress. I enforced search engine optimisation practices here.
                                    </p>
                                </div>
                            </div>
                            
                            <h2>Project Three</h2>
                            <p>View Project <i class="fas fa-arrow-right"></i></p>
        
                        </a>
                    </div>
                    <div class="folio-card">
                        <a href="sheltered\AxureRevisit\index.html" class="folio-link" target="_blank">
                            <div class="picture">
                                <img src="img/sheltered.png" alt="project-4" class="folio-thumb">
                                <div class="pop-up">
                                    <p>
                                        Axure Reflection:

                                        A prototype of an online store site using the Axure RP prototyping tool. Users can create an account, log in, add items from the store page to their basket, and checkout.
                                    </p>
                                </div>
                            </div>
                            
                            <h2>Project Four</h2>
                            <p>View Project <i class="fas fa-arrow-right"></i></p>
        
                        </a>
                    </div>
                    <div class="folio-card">
                        <a href="">
                            <div class="picture">
                                <img src="img/pankaj-patel-_SgRNwAVNKw-unsplash-min.jpg" alt="project-5" class="folio-thumb">
                                <div class="pop-up">
                                    <p>
                                        Coming Soon
                                    </p>
                                </div>
                            </div>
                            
                            <h2>Project Five</h2>
                            <p>View Project <i class="fas fa-arrow-right"></i></p>
        
                        </a>
                    </div>
                    <div class="folio-card">
                        <a href="">
                            <div class="picture">
                                <img src="img/pankaj-patel-_SgRNwAVNKw-unsplash-min.jpg" alt="project-6" class="folio-thumb">
                                <div class="pop-up">
                                    <p>
                                        Coming Soon
                                    </p>
                                </div>
                            </div>
                            
                            <h2>Project Six</h2>
                            <p>View Project <i class="fas fa-arrow-right"></i></p>
        
                        </a>
                    </div>
                </div>
        
                <div class="contact-form" id="contact">
                    <div class="info-box">
                        <h2>Get In Touch</h2>
                        <p>The best ways to contact me are using the mobile number or email address listed below. Alternatively, you can message me on my LinkedIn. </p>
                        <h3><a href="tel:07701078045">07701078045</a></h3>
                        <h3><a href="mailto:harry.welchman@gmail.com">harry.welchman@gmail.com</a></h3>
                        <p>I will typically respond to messages within 2 working days. If I'm unavailable to take a call, please leave a message with a contact phone number so I can get back to you.</p>
                    </div>
        
                    <div class="form-box">
                    
                        <form id="contact-form">
                            <div class="first-last">
                                <input type="text" id="first" placeholder="First Name*" name="first" required>
                                <input type="text" id="last" placeholder="Last Name*" name="last" required>
                            </div>
                            <div class="inputs">
                                <input type="email" id="email" placeholder="Email*" name="email" required>
                                <input type="text" id="subject" placeholder="Subject*" name="subject" required>
                                <textarea id="message" placeholder="Message*" name="message" required></textarea>
                            </div>
                            <button id ="submit" class="submit-btn" type="submit" value="Submit">Submit</button>
                            
                        </form>
                        
        
                    </div>
                    
                </div>
        
                <div class="foot">
                    <div class="to-top">
                        <a href="#top-hotspot">
                            <i class="fas fa-chevron-up"></i>
                            <p>Back To Top</p>
                        </a>
                    </div>
                </div>
    
            </div>
    
        </div>
        <script src="//cdn.polyfill.io/v2/polyfill.min.js"></script>
        <!-- <script src="js/jquery.slim-dist.js"></script> -->
        <script src="js/jquery.js"></script>
        <!-- <script src="js/mmenu.polyfills-dist.js"></script> -->
        <script src="js/mmenu-dist.js"></script>
        <!-- <script type="module" src="js/jquery.typewriter-dist.js"></script> -->
        <!-- <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script> -->
        <script src="js/typewriter-core-dist.js"></script>
        <script src="js/main-dist.js"></script>
        <script src="js/form-submit.js"></script>
        
    </body>
</html>