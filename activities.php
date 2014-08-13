<?php require_once('header.php'); ?>
<?php $active = 'activities'; ?>
<?php require_once('menu.php'); ?>

<?php $events = include('event-data.php'); ?>

<div class="stories-container gap-please">
    <div class="wrapper clearfix" id="events">
        <div id="event-container" class="hidden">
            <div class="event-close" onclick="javascript:eventBox.close();">&times;</div>
            <div id="event-box-title">
                <h1></h1>
            </div>
            <div id="event-box-description">
                <div class="row">
                    <div class="col-1-3 no-frills">
                        <img src="" alt="" id="event-box-img" class="img img-polaroid">
                    </div>
                    <div class="col-2-3 no-frills">
                        <p id="event-box-text"></p>
                    </div>
                </div>
                <div id="event-box-gallery"></div>
            </div>
        </div>

        <div class="row">
        <?php $ctr = 1; ?>
        <?php foreach ($events as $event): ?>
            <div class="col-1-3 blue-top event-title" onclick="javascript:eventBox.toggle(<?php echo $ctr - 1; ?>);">
            <h2><?php echo $event['title']; ?></h2>
                <hr>

                <h4><?php echo (is_array($event['date']) ? implode(', ', $event['date']) : $event['date']); ?></h4>
            </div>
        <?php if ($ctr % 3 == 0): ?>
        </div>
        <div class="row">
        <?php endif; ++$ctr; ?>
        <?php endforeach; ?>
        </div> <!-- /row -->
    </div>
</div>

<?php
$jsonEvents = json_encode($events);
$scripts = <<<SCRIPTS
<script type="text/javascript">
function EventBox() {
    var toggle = false;
    var width = $('#events').width();
    var height = $('#events').height();
    var data = $jsonEvents; 

    this.toggle = function(idx) {
        if (null == data[idx]) {
            console.log('No such index!');
            return;
        }

        $('#event-container').toggleClass('hidden').width(width).height(height);
        $('#event-box-title h1').html(data[idx].title);
        $('#event-box-img').attr('src', data[idx].img).attr('alt', data[idx].title);
        $('#event-box-text').html(data[idx].description);

        var gallery_frag = document.createDocumentFragment(), row_frag = document.createElement('div');
        row_frag.setAttribute('class', 'row');
        for (var i = 1, term = data[idx].gallery.length; i <= term; ++i) {
            var col = document.createElement('div');
            col.setAttribute('class', 'col-1-3 no-frills');
            var img = document.createElement('img');
            img.setAttribute('src', data[idx].gallery[i - 1]);
            img.setAttribute('class', 'img img-polaroid');
            col.appendChild(img);
            row_frag.appendChild(col);
            if (i % 3 == 0) {
                gallery_frag.appendChild(row_frag);
                row_frag = document.createElement('div');
                row_frag.setAttribute('class', 'row');
            }
        }

        var gallery = document.getElementById('event-box-gallery');
        gallery.appendChild(gallery_frag);

        toggle = true;
    };

    this.close = function() {
        if (toggle == false)
            return;
        $('#event-container').addClass('hidden');
        $('#event-box-gallery').empty();
        toggle = false;
    };
};

var eventBox = new EventBox();
$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        eventBox.close();
    }
});
</script>
SCRIPTS;
?>
<?php require_once('footer.php'); ?>
