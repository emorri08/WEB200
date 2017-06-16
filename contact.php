<?php include 'includes/header.php' ?>
        
<!-- start page -->
        <div id="container">
            
        <!-- start banner -->
            <div id="homePageBanner">
                <img id="bannerHome" class="bannerImage" src="images/home-banner.jpg" alt="RMD Insight Banner Image" />
                <img id="bannerMobile" class="bannerImage" src="images/mobile-banner.jpg" alt="RMD Insight Banner Image" />
            </div>
        <!-- end -->
            
<!-- start main content -->
            <div id="pageContent">
            <div id="contactForm">   
                <form id="contactRMD"  method="post" action="http://ellycodes.com/web200/protosite/success.php">
                  
                        <legend>If you would like to contact RMD Insight, please fill out the form below and click &quot;Submit&quot;</legend>
                            <p>
                                <label for="name">Name: *</label><br/>
                                <input id="enterName" name="name" type="text" minlength="2" required /><span></span>
                            </p>
                            <p>
                                <label for="email">E-mail: *</label><br/>
                                <input id="enterEmail" name="email" type="email" required /><span></span>
                            </p>
                            <p>
                                <label for="url">URL: </label><br/>
                                <input id="enterURL" type="url" name="url" /><span></span>
                            </p>
                            <p>
                                <label for="comment">Comment: *</label><br/>
                                <textarea id="enterComment" name="comment" required></textarea><span></span>
                            </p>
                            <p>
                                <input class="submitButton" type="submit" value="submit"
                            </p>
                   
                </form>
            </div>   
            </div>
<!-- end main content -->
            
<!-- cut here for php includes footer -->
<!-- start footer -->
            <footer>
                
<!-- begin footer links -->
            <!--left links -->
                <div id="linksLeft">
                <h4 id="leftFootLinks">What is Lorem Ipsum?</h4>
                    <ul id="leftLinksList">                   
                        <li class="leftFoot">Lorem Ipsum is</li>
                        <li class="leftFoot">Simply dummy text</li>
                        <li class="leftFoot">Of the printing</li>
                        <li class="leftFoot">And Typesetting</li>
                        <li class="leftFoot">Industry</li>
                    </ul> 
                </div>
            <!-- end left -->
                
            <!-- center links -->
                <div id="linksCenter">
                <h4 id="centerFootLinks">Why Do We Use It?</h4>
                    <ul id="centerLinksList">                   
                        <li class="centerFoot">It is a long</li>
                        <li class="centerFoot">Established fact</li>
                        <li class="centerFoot">That a reader</li>
                        <li class="centerFoot">Will be distracted</li>
                        <li class="centerFoot">By the readable</li>
                    </ul>                
                </div>
            <!-- end center -->
                
            <!-- right links -->
                <div id="linksRight">
                <h4 id="rightFootLinks">Where Does it Come From?</h4>
                    <ul id="rightLinksList">                    
                        <li class="rightFoot">Contrary to popular</li>
                        <li class="rightFoot">Belief Lorem Ipsum</li>
                        <li class="rightFoot">Is not simply</li>
                        <li class="rightFoot">Random text</li>
                        <li class="rightFoot">It has roots...</li>
                    </ul> 
                </div> 
            <!-- end right -->
                
            <!-- mobile links -->
                <div id="linksMobile">
                    <h4 id="mobileFootLinks">Where Does it Come From?</h4>
                    <ul id="mobileLinksList">                    
                        <li class="leftFoot">Lorem Ipsum is</li>
                        <li class="leftFoot">Simply dummy text</li>
                        <li class="leftFoot">Of the printing</li>
                        <li class="leftFoot">And Typesetting</li>
                        <li class="leftFoot">Industry</li>
                        <li class="centerFoot">It is a long</li>
                        <li class="centerFoot">Established fact</li>
                        <li class="centerFoot">That a reader</li>
                        <li class="centerFoot">Will be distracted</li>
                        <li class="centerFoot">By the readable</li>
                        <li class="rightFoot">Contrary to popular</li>
                        <li class="rightFoot">Belief Lorem Ipsum</li>
                        <li class="rightFoot">Is not simply</li>
                        <li class="rightFoot">Random text</li>
                        <li class="rightFoot">It has roots...</li>
                    </ul>
                </div>
<!-- end footer links -->
                
            <!-- copyright -->
                <div id="copyright">
                    <small>&copy; 2017, RMD Insight, LLC, All Rights Reserved. </small>
                </div>
            <!-- end -->
                
            </footer>
<!-- end footer -->
        </div>
<!-- end page -->
    </body>
</html>