<?php include 'includes/config.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head><!-- Marge, this ticket doesn't just give me a seat. It also gives me the right...no, the duty...to make a complete ass of myself. -Homer Simpson -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
                <title><?=$title?></title>
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
            <script src="js/script.js"></script><!-- Yeah, Moe, that team sure did suck last night! They just plain sucked! I've seen teams suck before, but they were the suckiest bunch of sucks that ever sucked! -Homer Simpson -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/navigation.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Prompt:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    </head>
<!-- end invisible content -->
    <body>
        <header>
        <!-- log in and sign up -->
            <div id="logIn">
                <button>Log In</button>
                <p class="signUp">Sign Up</p>
            </div>
        <!-- end -->
            
        <!-- main logo -->
            <div id="mainLogo">
                <img id="rmdInsightLogo" class="logo" src="images/RMD-logo-1.png" alt="RMD Insight Logo Image"/>
            </div>
        <!-- end --> 
            
<!-- begin navigation -->
            
            <div id="mainNav">
                <ul>
                    <li><a href="index.php"><span>HOME</span></a></li>
                    
                    <li><a href="about.php"><span>ABOUT</span></a>
                        
                        <ul>
                            <li><a href="resume.php"><span>Resume</span></a></li>
                            
                            <li><a href="testemonials.php"><span>Testemonials</span></a></li>
                            
                            <li><a href="press.php"><span>Press</span></a></li>
                            
                            <li><a href="safety.php"><span>Safety</span></a></li>

                            <li><a href="events.php"><span>Events</span></a></li>
                            
                            <li><a href="privacy.php"><span>Privacy</span></a></li>
                            
                            <li><a href="faq.php"><span>FAQ</span></a></li>
                        </ul>
                    </li>
                    
                    <li><a href="services.php"><span>SERVICES</span></a>
                        <ul>
                            <li><a href="monitoring.php"><span>Medical Monitoring</span></a></li>
                            
                            <li><a href="protocol.php"><span>Protocol Writing</span></a></li>
                            
                            <li><a href="dsmb.php"><span>DSMB</span></a></li>
                            
                            <li><a href="presentations.php"><span>Presentations</span></a></li>
                            
                            <li><a href="studies.php"><span>Phase 1 Studies</span></a></li>
                            
                            <li><a href="participant-faq.php"><span>Study Participant FAQ</span></a></li>
                        </ul>
                    </li>
                    
                    <li><a href="resources.php"><span>RESOURCES</span></a></li>
                    
                    <li><a href="blog.php"><span>BLOG</span></a>
                        <ul>
                            <li><a href="white-papers.php"><span>White Papers</span></a></li>
                            
                            <li><a href="articles.php"><span>Articles</span></a></li>
                            
                            <li><a href="archives.php"><span>Archives</span></a></li>
                        </ul>
                    </li>
                    
                    <li><a href="contact.php"><span>CONTACT</span></a></li>
                </ul>
            </div>
            
<!-- end navigation -->
            
        </header>
<!-- cut here for php includes header -->