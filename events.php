<?php
    $page = "aboutus";
    $subpage = "newsandevents";
    $title = "NEWS AND EVENTS";
    include_once 'components/navbar.php';

    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }

    if(!isset($_SESSION['session_person'])){
        echo '<script>window.location.replace("index.php");</script>';
    }

    //all the events
    $events = array(
        array("Labour Day", "This is an example sentence, other text will go here. This text is slightly longer to see what it will look like.", "SEptemtber 7 2020 / 9am - 12pm", "Closed"),
        array("Thanks Giving", "Hey every one! We are closed on thanks giving. Please enjoy the time off.", "November 26 2020", "Closed")
    );
?>
<div class="newsandevents mb-4">
    <div class="container">
        <!--title-->
        <h1 class="mt-4 text-center">Events</h1>
        <!--sub title-->
        <h4 class="mt-2">Coming Up Next <i class="fa fa-arrow-right"></i></h4>
        <!--card-->
        <div class="card animated fadeInDown" style="animation-delay: 0.5s;">
            <div class="card-body">
                <!--p-title-->
                <p class="text-muted">Canada day</p>
                <!--p-paragraph-->
                <p class="lead text-center">Hey every one! We are closed on canada day. Please feel free to <br />
                    <a href="getintouch.php">contact</a> us regarding hours or any further questions.</p>
                <!--p-footer-->
                <p class="text-right text-muted">July 1 2020 (<span style="color: red;">Closed</span>)</p>
            </div>
        </div>

        <!--hr-->
        <hr>

        <!--sub title-->
        <h4 class="mt-2">Other Events <i class="fa fa-calendar-week"></i></h4>

        <!--search bar -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="SEARCH EVENTS" aria-label="Search bar for events"
                name="eventsearch" id="eventsearch">
        </div>
<?php
for($i = 0; $i < count($events); $i++){
    ?>
        <!--card-->
        <div class="card mt-3" id="events">
            <div class="card-body">
                <!--p-title-->
                <p class="text-muted"><?php echo $events[$i][0]; ?></p>
                <!--p-paragraph-->
                <p class="lead text-center mx-auto" style="max-width: 600px;"><?php echo $events[$i][1]; ?></p>
                <!--p-footer-->
                <p class="text-right text-muted"><?php echo $events[$i][2]; ?> (<span style="color: red;"><?php echo $events[$i][3]; ?></span>)</p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
    include_once 'components/footer.php';
?>