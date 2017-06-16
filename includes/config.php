<?php
//config.php


// defines the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// --------- switch statement -----------

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Home';
        $banner = 'image.jpg';
        $headline = 'RMD Insight, LLC.';
    break;
        
    case 'about.php':
        $title = 'About RMD Insight';
        $banner = 'image.jpg';
        $headline = 'About RMD Insight';
    break;
        
    case 'resume.php':
        $title = 'Resume';
        $banner = 'image.jpg';
        $headline = 'Dr. Royce A. Morrison, MD&39;s Experience';
    break;
        
    case 'testemonials.php':
        $title = 'Client Testemonials';
        $banner = 'image.jpg';
        $headline = 'Hear what our past clients have to say about us!';
    break;
        
    case 'press.php':
        $title = 'Press';
        $banner = 'image.jpg';
        $headline = 'Press';
    break;
        
    case 'privacy.php':
        $title = 'Home';
        $banner = 'image.jpg';
        $headline = 'RMD Insight, LLC.';
    break;
        
    case 'safety.php':
        $title = 'Safety';
        $banner = 'image.jpg';
        $headline = 'Safety Protocol';
    break;
        
    case 'events.php':
        $title = 'Events';
        $banner = 'image.jpg';
        $headline = 'Upcoming Events';
    break;
        
    case 'faq.php':
        $title = 'Frequently Asked Questions';
        $banner = 'image.jpg';
        $headline = 'Frequently Asked Questions';
    break;
        
    case 'services.php':
        $title = 'Services';
        $banner = 'image.jpg';
        $headline = 'Services Provided by RMD Insight';
    break;
        
    case 'monitoring.php':
        $title = 'Medical Monitoring';
        $banner = 'image.jpg';
        $headline = 'Medical Monitoring by RMD Insight';
    break;
        
    case 'protocol.php':
        $title = 'Protocol Writing';
        $banner = 'image.jpg';
        $headline = 'Protocol Writing';
    break;
        
    case 'dsmb.php':
        $title = 'Data Safety Monitoring Board';
        $banner = 'image.jpg';
        $headline = 'Data Safety Monitoring Board';
    break;
        
    case 'presentations.php':
        $title = 'RMD Insight Presentations';
        $banner = 'image.jpg';
        $headline = 'Presentations by RMD Insight';
    break;
        
    case 'studies.php':
        $title = 'Phase 1 Studies';
        $banner = 'image.jpg';
        $headline = 'Phase 1 Studies';
    break;
        
    case 'participant-faq.php':
        $title = 'Study Participant Frequently Asked Questions';
        $banner = 'image.jpg';
        $headline = 'Study Participant FAQ';
    break;
        
    case 'resources.php':
        $title = 'Resources';
        $banner = 'image.jpg';
        $headline = 'Helpful Resources';
    break;
        
    case 'blog.php':
        $title = 'RMD Insight Blog';
        $banner = 'image.jpg';
        $headline = 'RMD Insight: Blog';
    break;
        
    case 'white-papers.php':
        $title = 'White-Papers';
        $banner = 'image.jpg';
        $headline = 'White Papers';
    break;
        
    case 'articles.php':
        $title = 'Articles';
        $banner = 'image.jpg';
        $headline = 'Articles';
    break;
        
    case 'archives.php':
        $title = 'Archives';
        $banner = 'image.jpg';
        $headline = 'Archived articles, blog entries, white-papers, etc.';
    break;
        
    case 'contact.php':
        $title = 'Contact RMD Insight';
        $banner = 'image.jpg';
        $headline = 'Have a question?';
        $subHeadline = 'Send an e-mail to Dr. Morrison here!';
    break;
}










?>