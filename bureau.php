<?php require_once('header.php'); ?>
<?php $active = 'bureau'; ?>
<?php require_once('menu.php'); ?>

<?php

$members = array(
    array('name' => 'Dr. G. Viswanathan', 'title' => 'Chief Patron', 'position' => 'Founder'),
    array('name' => 'Mr. Sankar Viswanathan', 'title' => 'Patron', 'position' => 'Vice President'),
    array('name' => 'Ms. Kadambari Viswanthan', 'title' => 'Co-Patron', 'position' => 'Assistant Vice President'),
    array('name' => 'Prof. V. Raju', 'title' => 'Co-Patron', 'position' => 'Vice-Chancellor'),
    array('name' => 'Dr. Anand A. Samuel', 'title' => 'Chairman', 'position' => 'Pro Vice-Chancellor'),
    array('name' => 'Prof. P. Govindarajan', 'title' => 'Member Secretary', 'position' => 'NSS Programme Co-ordinator'),
    array('name' => 'Dr. Kalyani Desikan', 'title' => 'Member', 'position' => 'Dean of School of Advance Sciences'),
    array('name' => 'Dr. Joseph Sathiaraj', 'title' => 'Member', 'position' => 'Division Chair of School of Social Sciences and Languages'),
    array('name' => 'Prof. M. Priyaadharshini', 'title' => 'Member', 'position' => 'NSS Programme Officer'),
    array('name' => 'Sh. Subash Chand', 'title' => 'Member', 'position' => 'Assistant Programme Advisor  NSS Cell,  MYAS'),
    array('name' => 'Dr. Rajashekar', 'title' => 'Member', 'position' => 'State Liaison Officer, Tamilnadu, NSS Cell')
);

?>

<div class="stories-container gap-please">
    <div class="wrapper clearfix">
        <div class="row">
            <div class="col-2-3 blue-top">
                <h1>Bureau Members</h1>
            </div>
        </div>

    <?php $ctr = 1; foreach ($members as $m) { ?>
        <div class="row">
            <div class="col-1-3 no-frills">
                <div class="profile">
                    <div class="profile-text">
                        <h3><?php echo $m['name']; ?></h3>
                        <p><?php echo $m['title']; ?></p>
                        <p><?php echo $m['position']; ?></p>
                    </div>
                </div>
            </div>
        <?php if ($ctr % 3 == 0): ?>
        </div>
        <?php if (($ctr / 3) % 2 == 0): ?>
            <hr>
        <?php endif ?>
        <div class="row">
        <?php endif ?>
    <?php ++$ctr; } ?>
    </div>
</div>

<?php require_once('footer.php'); ?>
