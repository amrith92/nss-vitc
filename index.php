<?php require_once('header.php'); ?>
<?php $active = 'home'; ?>
<?php require_once('menu.php'); ?>

<?php
$sliderData = include 'event-data.php';
?>

<div class="main-container">
    <div class="main wrapper clearfix">
        <div class="liquid-slider" id="feature-slider">
            <div>
                <img src="./img/vit.jpg" alt="VIT Chennai Campus" class="img img-cover">
                <div class="panel-content-text">
                    <h2 class="title">VIT Chennai Campus</h2>
                </div>
            </div>
        <?php foreach ($sliderData as $data): ?>
            <div>
                <img src="<?php echo $data['img']; ?>" alt="<?php echo $data['title']; ?>" class="img img-cover">
                <div class="panel-content-text">
                    <h2 class="title"><?php echo $data['title']; ?></h2>
                </div>
            </div>
        <?php endforeach ?>
        </div>
    </div>
</div>
<!--
        <div id="feature">
            <img src="img/about-bg.jpg" title="VIT Chennai Campus" class="img-polaroid" />
            <div class="feature-text">
                <article>
                    <header>
                        <h1>Welcome!</h1>
                    </header>

                    <section>
                        <p>
                            Why, &apos;ello there!
                        </p>
                    </section>
                </article>
            </div>
        </div>
-->
    </div>
</div>

<div class="stories-container">
    <div class="wrapper clearfix">
        <div class="row">
            <div class="col-1-2 yellow">
                <h3>Circulars</h3>
                <ul>
                    <li>Watch out for circulars...</li>
                </ul>
            </div>

            <div class="col-1-2 yellow">
                <h3>Follow us on</h3>
            </div>

        </div> <!-- /row -->
    </div>
</div>

<script type="text/javascript">
window.onload = function() {
    $('#feature-slider').liquidSlider({
        autoSlide: true,
        autoSlideInterval: 100,
        hideSideArrows: false,
        hideArrowsWhenMobile: false,
        slideEaseFunction: 'animate.css',
        slideEaseDuration: 200,
        heightEaseDuration: 200,
        animateIn: 'bounceIn',
        animateOut: 'fadeOut',
        swipe: true
    });
};
</script>

<?php require_once('footer.php'); ?>
