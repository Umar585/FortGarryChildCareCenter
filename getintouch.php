<?php
    $page = "contactus";
    $title = "CONTACT US";
    require './vendor/autoload.php';
    include_once 'components/navbar.php';

    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }
?>
<div class="contactus">
    <!--locations-->
    <div class="location-bg-img">
        <div class="container" style="max-width: 700px;">
            <!--title-->
            <h1 class="pt-4 text-center text-white">Contact Us</h1>

            <div class="row text-center mt-4">
                <!--email-->
                <div class="col-sm-6">
                    <div class="h5">
                        <div class="list-inline-item text-center">
                            <div style="background: #2A9D8F; border-radius: 50%; height:50px; width: 50px;">
                                <div class="h4" style="padding-top:13px; color: white;"><i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="list-inline-item ">
                            <a href="mailto:fgcc@mts.net" title="EMAIL" rel="noreferrer" aria-label="Email link"
                                class="text-white">
                                fgcc@mts.net.
                            </a>
                        </div>
                    </div>
                </div>
                <!--phone -->
                <div class="col-sm-6">
                    <div class="h5">
                        <div class="list-inline-item text-center">
                            <div style="background: #2A9D8F; border-radius: 50%; height:50px; width: 50px;">
                                <div class="h4" style="padding-top:13px; color: white;"><i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="list-inline-item ">
                            <a href="tel:2044537600" title="PHONE" rel="noreferrer" aria-label="phone link"
                                class="text-white">
                                204.453.7600
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                //i have created an error message in the url that will pick up the error and output these messages!
                if(isset($_GET["message"])){
                    if($_GET["message"] == "sent"){
                    echo '<p class="alert alert-success text-center">Message has been sent. Thanks</p>';
                    }
                }

              if(isset($_POST['contactsubmit'])){
                   //variables
                   $name =  $_POST['contactname'];
                   $email = $_POST['contactemail'];
                   $subject = $_POST['contactsubject'];
                   $message = $_POST['contactmessage'];

                    $sendemail = new \SendGrid\Mail\Mail();
                    $sendemail->setFrom("fgcc@mts.net", $name);//change gmail to client email
                    $sendemail->setSubject('FGCCC FORM: '.$subject);
                    $sendemail->addTo("fgcc@mts.net", "FGCCC");//change gmail to client email
                    $sendemail->addContent("text/html", 'Sender Email: '.$email . '<br/>Sender Name: '. $name .'<br/>Message:<br/>'.$message);
                    $api = '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';//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';
                    $sendgrid = new \SendGrid($api);
                    if($sendgrid->send($sendemail)){
                        ?>
                            <div class="alert alert-success">
                        <?php
                            echo "Message Sent";
                        ?>
                            </div>
                        <?php
                        }else{
                            ?>
                            <div class="alert alert-danger">
                        <?php
                            echo "Message Failed";
                        ?>
                            </div>
                        <?php
                        }
                }
            ?>

            <!--contact form-->
            <div class="contact-form" style="margin-bottom: 10px;">
                <form class="mx-auto" method="POST">
                    <div class="row">
                        <div class="col-sm-4 mt-2">
                            <input type="text" name="contactname" id="contactname" class="form-control"
                                placeholder="Full Name*" required>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <input type="email" name="contactemail" id="contactemail" class="form-control"
                                placeholder="Email*" required>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <input type="text" name="contactsubject" id="contactsubject" class="form-control"
                                placeholder="Subject*" required>
                        </div>
                        <div class="col-12 mt-2">
                            <pre style="font-family:MYRIADPRO-REGULAR;"><textarea name="contactmessage" id="contactmessage" class="form-control" required cols="30"
                                rows="5" maxLength="400" placeholder="Write A Message*"></textarea></pre>
                        </div>
                        <div class="col-12 mt-2">
                            <input type="submit" value="Send Message" name="contactsubmit"
                                style="background-color: #2A9D8F;" class="btn form-control text-white">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--title-->
        <h1 class="pt-4 text-center text-white" id="locations">Locations</h1>
        <div class="container location-4">
            <div class="row text-center" style="color: #f4a261;">
                <div class="col-sm-6">
                    <!--card-->
                    <div class="card shadow p-3">
                        <div class="h5">
                            <div class="list-inline">
                                <div class="list-inline-item  mt-2 ">
                                    <div class="list-inline-item text-center ">
                                        <div
                                            style="border: 1px solid #f4a261; border-radius: 50%; height:50px; width: 50px;">
                                            <div class="h5" style="padding-top:13px;"><i class="fa fa-phone"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a href="tel:2046190914" title="PHONE" aria-label="PHONE NUMBER"
                                            style="color: #f4a261;">204.619.0914</a>
                                    </div>
                                </div>
                                <div class="list-inline-item mt-2">
                                    <div class="list-inline-item text-center ">
                                        <div
                                            style="border: 1px solid #f4a261; border-radius: 50%; height:50px; width: 50px;">
                                            <div class="h5" style="padding-top:13px;"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-inline-item">
                                        <div style="color: #f4a261;">Amanda Jack</div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>960 Scurfield Blvd Winnipeg, MB, R3Y 1N6</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2574.838419273794!2d-97.21766858439973!3d49.80790534133437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea754588a63191%3A0x7216660e8e5b9320!2s960%20Scurfield%20Blvd%2C%20Winnipeg%2C%20MB%20R3Y%201N6!5e0!3m2!1sen!2sca!4v1594240277356!5m2!1sen!2sca"
                            height="200" frameborder="0" allowfullscreen="" tabindex="0"
                            style="width: 100% !important; border:0;" class="shadow"></iframe>
                    </div>
                </div>

                <div class="col-sm-6">
                    <!--card-->
                    <div class="card shadow p-3">
                        <div class="h5">
                            <div class="list-inline">
                                <div class="list-inline-item  mt-2 ">
                                    <div class="list-inline-item text-center ">
                                        <div
                                            style="border: 1px solid #f4a261; border-radius: 50%; height:50px; width: 50px;">
                                            <div class="h5" style="padding-top:13px;"><i class="fa fa-phone"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a href="tel:2044529933" title="PHONE" aria-label="PHONE NUMBER"
                                            style="color: #f4a261;">204.452.9933</a>
                                    </div>
                                </div>
                                <div class="list-inline-item mt-2">
                                    <div class="list-inline-item text-center ">
                                        <div
                                            style="border: 1px solid #f4a261; border-radius: 50%; height:50px; width: 50px;">
                                            <div class="h5" style="padding-top:13px;"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-inline-item">
                                        <div style="color: #f4a261;">Corrie Proulx</div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>666 Oakenwald Ave Winnipeg, MB, R3T 1M4</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2572.8861105787855!2d-97.14276668475917!3d49.844597438714416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea742be806014d%3A0xb7a705e696ebf9a!2s666%20Oakenwald%20Ave%2C%20Winnipeg%2C%20MB%20R3T%201M4!5e0!3m2!1sen!2sca!4v1593798421395!5m2!1sen!2sca"
                            height="200" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"
                            style="width: 100% !important; border:0;" class="shadow"></iframe>
                    </div>
                </div>

                <div class="col-sm-6">
                    <!--card-->
                    <div class="card shadow p-3">
                        <div class="h5">
                            <div class="list-inline">
                                <div class="list-inline-item  mt-2 ">
                                    <div class="list-inline-item text-center ">
                                        <div
                                            style="border: 1px solid #f4a261; border-radius: 50%; height:50px; width: 50px;">
                                            <div class="h5" style="padding-top:13px;"><i class="fa fa-phone"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a href="tel:2044537600" title="PHONE" aria-label="PHONE NUMBER"
                                            style="color: #f4a261;">204.453.7600</a>
                                    </div>
                                </div>
                                <div class="list-inline-item mt-2">
                                    <div class="list-inline-item text-center ">
                                        <div
                                            style="border: 1px solid #f4a261; border-radius: 50%; height:50px; width: 50px;">
                                            <div class="h5" style="padding-top:13px;"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-inline-item">
                                        <div style="color: #f4a261;">Cynthia Beck</div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>1555 Pembina Hwy Winnipeg, MB, R3T 2E5</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.521368828591!2d-97.15423268475963!3d49.832660439567086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea75c93481c611%3A0xafe7048fc13f1e4e!2s1555%20Pembina%20Hwy%2C%20Winnipeg%2C%20MB%20R3T%202E5!5e0!3m2!1sen!2sca!4v1593798510417!5m2!1sen!2sca"
                            height="200" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"
                            style="width: 100% !important; border:0;" class="shadow"></iframe>
                    </div>
                </div>

                <div class="col-sm-6">
                    <!--card-->
                    <div class="card shadow p-3">
                        <div class="h5">
                            <div class="list-inline">
                                <div class="list-inline-item  mt-2 ">
                                    <div class="list-inline-item text-center ">
                                        <div
                                            style="border: 1px solid #f4a261; border-radius: 50%; height:50px; width: 50px;">
                                            <div class="h5" style="padding-top:13px;"><i class="fa fa-phone"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a href="tel:2043901811" title="PHONE" aria-label="PHONE NUMBER"
                                            style="color: #f4a261;">204.390.1811</a>
                                    </div>
                                </div>
                                 <!-- <div class="list-inline-item mt-2">
                                    <div class="list-inline-item text-center ">
                                        <div
                                            style="border: 1px solid #f4a261; border-radius: 50%; height:50px; width: 50px;">
                                            <div class="h5" style="padding-top:13px;"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                  <div class="list-inline-item">
                                        <div style="color: #f4a261;">Tracey McCluskey</div>
                                    </div>
                                </div>-->
                            </div>
                            <br>
                            <p>810 Avenue Waterford Winnipeg, MB, R3T 1G7</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2572.7846589400715!2d-97.145755!3d49.8465036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea742ef59c7601%3A0xcc8a03d47c43d2bc!2s810%20Waterford%20Ave%2C%20Winnipeg%2C%20MB%20R3T%201G7!5e0!3m2!1sen!2sca!4v1594222963045!5m2!1sen!2sca"
                            height="200" frameborder="0" style="width: 100% !important; border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0" class="shadow"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!--subtitle-->
        <div class="text-center">
            <h3 class="mt-2">Hours of Operations</h3>
            <p>Monday - Friday: 7am to 6pm<br />Saturday - Sunday: <span class="text-danger">Closed</span></p>
        </div>
    </div>
</div>
<?php
    include_once 'components/footer.php';
?>