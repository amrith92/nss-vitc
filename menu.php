<?php if (!isset($active)) $active = 'home'; ?>
<?php
$menuItems = array(
    'home' => array('uri' => 'index.php', 'title' => 'Home'),
    'about' => array('uri' => 'about.php', 'title' => 'About'),
    'activities' => array('uri' => 'activities.php', 'title' => 'Activity Forum'),
    'bureau' => array('uri' => 'bureau.php', 'title' => 'Bureau Members'),
    'volunteers' => array('uri' => '#', 'title' => 'Volunteers'),
    'reach-out' => array('uri' => 'reach-out.php', 'title' => 'Reach Out'),
    'faq' => array('uri' => 'faq.php', 'title' => 'FAQ')
);
?>
<div id="header">
    <header class="wrapper clearfix">
        <div class="mobile-toggle">
            <h2>NSS @ VITCC</h2>
            <img src="img/toggle.png" id="toggle-img" class="pull-right" />
        </div>
        <nav>
            <ul>
<?php foreach ($menuItems as $k => $li) { ?>
<li <?php if ($active == $k) echo 'class="active"'; ?>><a href="<?php echo $li['uri']; ?>"><?php echo $li['title']; ?></a></li>
<?php } ?>
            </ul>
        </nav>
    </header>
</div>

