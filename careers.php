<?php
    $page = "careers";
    $title = "CAREERS";
    include_once 'components/navbar.php';

    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }

    if(isset($_GET["message"])){
        if($_GET["message"] == "sent"){
        ?>
<div id="covid-warning" class="alert alert-success rounded-0 w-100"
    style="position: absolute; z-index:99; height:50px;">
    <p class="text-center">Message sent <a class="text-success" onclick="$('#covid-warning').hide();"><i
                class="fa fa-times-circle"></i></a> </p>
</div>
<?php 
        }else{
        ?>
<div id="covid-warning" class="alert alert-danger rounded-0 w-100" style="position: absolute; z-index:99; height:50px;">
    <p class="text-center">Message failed to send. Try again! <a class="text-danger"
            onclick="$('#covid-warning').hide();"><i class="fa fa-times-circle"></i></a> </p>
</div>
<?php         
        }
    }
?>
<div class="parents mb-4">
    <div class="container">
        <!--title-->
        <h1 class="pt-4 text-center" style="color: #2A9D8F;">Job Postings</h1>
        <!--subtitle-->
        <p class="h3 mt-2 text-center"><b>Discover Your Next Career!</b></p>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs bg-light" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#openings" title="OPENINGS" rel="noreferrer"
                    aria-label="OPENINGS">Openings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#volunteer" title="VOLUNTEER" rel="noreferrer"
                    aria-label="VOLUNTEER">Volunteer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#apply" title="APPLY" rel="noreferrer"
                    aria-label="APPLY">Apply</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!--OPENING SECTION-->
            <div id="openings" class="container tab-pane active">
                <!--search bar-->
                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="SEARCH JOBS" aria-label="Search bar for jobs"
                        name="jobsearch" id="jobsearch">
                </div>
                <!--job card-->
                <div class="card shadow job-card mt-3">
                    <div class="card-header bg-dark text-white">
                        <div class="clearfix">
                            <h5 class="float-left">Job Title</h5>
                            <h5 class="float-right">#13565</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-text"><b>Posted:</b> July 4, 2020</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-text"><b>Position:</b> Permanent</div>
                            </div>
                        </div>
                        <div class="card-text mt-2"><b>Description:</b> Add description here! some description will go
                            here regarding the position.</div>
                        <div class="card-text mt-2"><b>Requirements/Qualification/Skills:</b>
                            <ul>
                                <li>skill 1</li>
                                <li>skill 1</li>
                                <li>skill 1</li>
                                <li>skill 1</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer bg-muted text-muted">
                        <div class="clearfix">
                            <h5 class="float-left">Pay Rate: 12/hr</h5>
                            <h5 class="float-right">1555 Pembina Hwy Winnipeg, MB, R3T 2E5</h5>
                        </div>
                    </div>
                </div>

                <!--job card-->
                <div class="card shadow job-card mt-3">
                    <div class="card-header bg-dark text-white">
                        <div class="clearfix">
                            <h5 class="float-left">Job Title 2</h5>
                            <h5 class="float-right">#65958</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-text"><b>posted:</b> June 4, 2020</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-text"><b>position:</b> Temporary</div>
                            </div>
                        </div>
                        <div class="card-text mt-2"><b>Description:</b> add description here! some description will go
                            here regarding the position.</div>
                        <div class="card-text mt-2"><b>Requirements/Qualification/Skills:</b>
                            <ul>
                                <li>skill 1</li>
                                <li>skill 2</li>
                                <li>skill 3</li>
                                <li>skill 4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer bg-muted text-muted">
                        <div class="clearfix">
                            <h5 class="float-left">Pay Rate: 11.25/Hr</h5>
                            <h5 class="float-right">666 Oakenwald Ave Winnipeg, MB R3T 1M4</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!--VOLUNTEER SECTION-->
            <div id="volunteer" class="container tab-pane fade">

                <div id="covid-warning" class="alert alert-warning rounded-0 w-100" style="height:50px;">
                    <p class="text-center">We are not accepting any volunteers? <a href="covid.php"
                            title="Covid-Program" rel="noreferrer" aria-label="Covid-Program"
                            style="padding: 0px;">Learn more</a>
                    </p>
                </div>
                <div class="p-2" id="student">
                    <div class="mt-4">
                        <h4><b>Student Recruitment</b></h4>
                        <p>Our student recruitment program goes hand in hand with students who recently graduated or
                            students who are still in school and looking to get some hours of experience. We are
                            flexible and thats what makes us compatible!</p>
                        <p>We provide training in all aspects of a child's day, from when they enter through our doors
                            to the time their parents come to pick them up.</p>
                    </div>
                </div>

                <!--job card-->
                <div class="card shadow job-card mt-3">
                    <div class="card-header bg-dark text-white">
                        <div class="clearfix">
                            <h5 class="float-left">Volunteer Title</h5>
                            <h5 class="float-right">#64185</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-text"><b>Posted:</b> May 8, 2020</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card-text"><b>Position:</b> Volunteer</div>
                            </div>
                        </div>
                        <div class="card-text mt-2"><b>Description:</b> add description here! some description will go
                            here regarding the position.</div>
                    </div>
                    <div class="card-footer bg-muted text-muted">
                        <h5>666 Oakenwald Ave Winnipeg, MB R3T 1M4</h5>
                    </div>
                </div>
            </div>
            <div id="apply" class="container tab-pane fade">
                <form action="./sendapplication.php" method="post" enctype="multipart/form-data" class="mt-3 mx-auto" style="max-width: 500px;">
                    <div class="form-group">
                        <input type="text" required placeholder="Full Name" name="jobfullname" id="jobfullname"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" required placeholder="Email" name="jobemail" id="jobemail"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="tel" required placeholder="123 - 456- 7890" name="jobphone" id="jobphone"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" required placeholder="Job Code" name="jobcode" id="jobcode"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <p style="margin-bottom: 0;">Add Resume</p>
                        <input type="file" required name="jobfile" id="jobfile" accept=".pdf,.doc,.docx,.txt,.rtf">
                    </div>
                    <div class="form-group">
                        <label for="jobnote">Optional</label>
                        <textarea placeholder="Additional Notes" name="jobnote" id="jobnote"
                            class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit Application" name="applicationbtn" id="applicationbtn"
                            class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    include_once 'components/footer.php';
?>