<?php
    $page = "programs";
    $title = "PROGRAMS";
    include_once 'components/navbar.php';
    
    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }

?>
<div class="programs mb-4">
    <div class="container">
        <!--title-->
        <h1 class="pt-4 text-center" style="color: #2A9D8F;">Programs, Rates <br>and Fees</h1>

        <div class="h3 mt-2"><b>Programs</b></div>
        <div class="row mb-4">
            <div class="col-sm-6 mt-3">
                <div class="btn btn-primary w-100" onclick="$('#Ecole-text').toggle('500')">Ecole Viscount Alexander <i
                        class="fa fa-chevron-down"></i></div>
                <div id="Ecole-text" class="p-2" style="display:none;">
                    <!--Programs Offered-->
                    <div>
                        <span class="h5">Programs Offered</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">School Age</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Before and After School</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Licensed Capacity-->
                    <div>
                        <span class="h5">Licensed Capacity</span>
                        <ul>
                            <li class="text-muted">45 Children</li>
                        </ul>
                    </div>
                    <!--Ages/Grades-->
                    <div>
                        <span class="h5">Ages/Grades</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">6 years to 12 years of Age</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Grade 1 to Grade 6</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Kindergarten Offered-->
                    <div>
                        <span class="h5">Kindergarten Care Offered</span>
                        <ul>
                            <li class="text-muted">No</li>
                        </ul>
                    </div>
                    <!--Location-->
                    <div>
                        <span class="h5">Location</span>
                        <ul>
                            <li class="text-muted">Inside Ecole Viscount Alexander,
                                <a href="https://goo.gl/maps/zZ6vHCL7v8DZdpn3A" target="_blank" rel="noreferrer"
                                    aria-label="Map Link" title="Location">810 Waterford Ave, Winnipeg,
                                    Manitoba, R3T 1G7</a></li>
                        </ul>
                    </div>
                    <!--Rooms-->
                    <div>
                        <span class="h5">Room Numbers</span>
                        <ul>
                            <li class="text-muted">2nd Floor, Home Economic &amp; Graphic Art Rooms</li>
                        </ul>
                    </div>
                    <!--Phone-->
                    <div>
                        <span class="h5">Phone Number</span>
                        <ul>
                            <li class="text-muted"><a href="tel:2043901811" rel="noreferrer" aria-label="Phone number"
                                    title="Phone">204.390.1811</a></li>
                        </ul>
                    </div>
                    <!--Hours-->
                    <div>
                        <span class="h5">Business Hours</span>
                        <ul>
                            <li class="text-muted">7:00 AM to 8:45 AM &amp; 3:20 PM to 6:00 PM</li>
                        </ul>
                    </div>
                    <!--Operational Months-->
                    <div>
                        <span class="h5">Operational Months</span>
                        <ul>
                            <li class="text-muted">Open All Year Round</li>
                        </ul>
                    </div>
                    <!--Fees-->
                    <div>
                        <span class="h5">Fees</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Before and/or After School - $8.60 per day</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">In-service &amp; School Breaks - $20.80 per day</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <a onclick="$('#Ecole-text').hide('500')" class="btn btn-primary text-white"><i
                                class="fa fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-3">
                <div class="btn btn-primary w-100" onclick="$('#Oakenwald-text').toggle('500')">Oakenwald <i
                        class="fa fa-chevron-down"></i></div>
                <div id="Oakenwald-text" class="p-2" style="display:none; ">
                    <!--Programs Offered-->
                    <div>
                        <span class="h5">Programs Offered</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">School Age</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Before and After School</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Kindergarten Care</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Licensed Capacity-->
                    <div>
                        <span class="h5">Licensed Capacity</span>
                        <ul>
                            <li class="text-muted">50 Children</li>
                        </ul>
                    </div>
                    <!--Ages/Grades-->
                    <div>
                        <span class="h5">Ages/Grades</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">5 years to 12 years of Age</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Kindergarten to Grade 6</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Kindergarten Offered-->
                    <div>
                        <span class="h5">Kindergarten Care Offered</span>
                        <ul>
                            <li class="text-muted">Yes</li>
                        </ul>
                    </div>
                    <!--Location-->
                    <div>
                        <span class="h5">Location</span>
                        <ul>
                            <li class="text-muted">Inside Oakenwald School,
                                <a href="https://goo.gl/maps/5sWu66KJuTrPMePB9" target="_blank" rel="noreferrer"
                                    aria-label="Map Link" title="Location">666 Oakenwald Ave, Winnipeg, Manitoba, R3T
                                    1M4</a></li>
                        </ul>
                    </div>
                    <!--Rooms-->
                    <div>
                        <span class="h5">Room Numbers</span>
                        <ul>
                            <li class="text-muted">Room: 6, 7, 8</li>
                        </ul>
                    </div>
                    <!--Phone-->
                    <div>
                        <span class="h5">Phone Number</span>
                        <ul>
                            <li class="text-muted"><a href="tel:2044529933" rel="noreferrer" aria-label="Phone number"
                                    title="Phone">204.452.9933</a></li>
                        </ul>
                    </div>
                    <!--Hours-->
                    <div>
                        <span class="h5">Business Hours</span>
                        <ul>
                            <li class="text-muted">7:00 AM to 8:45 AM &amp; 11:30 AM to 6:00 PM</li>
                        </ul>
                    </div>
                    <!--Operational Months-->
                    <div>
                        <span class="h5">Operational Months</span>
                        <ul>
                            <li class="text-muted">Open All Year Round</li>
                        </ul>
                    </div>
                    <!--Fees-->
                    <div>
                        <span class="h5">Fees</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Before and/or After School - $8.60 per day</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">In-service &amp; School Breaks - $20.80 per day</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Kindergarten - $20.80 per day</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <a onclick="$('#Oakenwald-text').hide('500')" class="btn btn-primary text-white"><i
                                class="fa fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-3">
                <div class="btn btn-primary w-100" onclick="$('#Henry-text').toggle('500')">Henry G. Izatt Middle School
                    <i class="fa fa-chevron-down"></i></div>
                <div id="Henry-text" class="p-2" style="display:none; ">
                    <!--Programs Offered-->
                    <div>
                        <span class="h5">Programs Offered</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">School Age</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Before and After School</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Licensed Capacity-->
                    <div>
                        <span class="h5">Licensed Capacity</span>
                        <ul>
                            <li class="text-muted">30 Children</li>
                        </ul>
                    </div>
                    <!--Ages/Grades-->
                    <div>
                        <span class="h5">Ages/Grades</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">10 years to 12 years of Age</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Grade 5 & Grade 6</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Kindergarten Offered-->
                    <div>
                        <span class="h5">Kindergarten Care Offered</span>
                        <ul>
                            <li class="text-muted">No</li>
                        </ul>
                    </div>
                    <!--Location-->
                    <div>
                        <span class="h5">Location</span>
                        <ul>
                            <li class="text-muted">Inside Henry G. Izatt Middle School,
                                <a href="https://goo.gl/maps/wapz3ntKr7jSDACQA" target="_blank" rel="noreferrer"
                                    aria-label="Map Link" title="Location">960 Scurfield Blvd, Winnipeg,
                                    Manitoba, R3Y 1N6</a></li>
                        </ul>
                    </div>
                    <!--Rooms-->
                    <div>
                        <span class="h5">Room Numbers</span>
                        <ul>
                            <li class="text-muted">Main Floor, Room 103 Home Economic Room</li>
                        </ul>
                    </div>
                    <!--Phone-->
                    <div>
                        <span class="h5">Phone Number</span>
                        <ul>
                            <li class="text-muted"><a href="tel:2046190914" rel="noreferrer" aria-label="Phone number"
                                    title="Phone">204.619.0914</a></li>
                        </ul>
                    </div>
                    <!--Hours-->
                    <div>
                        <span class="h5">Business Hours</span>
                        <ul>
                            <li class="text-muted">7:00 AM to 8:45 AM &amp; 3:30 PM to 6:00 PM</li>
                        </ul>
                    </div>
                    <!--Operational Months-->
                    <div>
                        <span class="h5">Operational Months</span>
                        <ul>
                            <li class="text-muted">Closed July & August</li>
                        </ul>
                    </div>
                    <!--Fees-->
                    <div>
                        <span class="h5">Fees</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Before and/or After School - $8.60 per day</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">In-service &amp; School Breaks - $20.80 per day</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="text-muted">Early Dismissal Days (2PM) - for day $10.40</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <a onclick="$('#Henry-text').hide('500')" class="btn btn-primary text-white"><i
                                class="fa fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-3">
                <div class="btn btn-primary w-100" onclick="$('#Mitt-text').toggle('500')">MITT Preschool <i
                        class="fa fa-chevron-down"></i></div>
                <div id="Mitt-text" class="p-2" style="display:none; ">
                    <!--Programs Offered-->
                    <div>
                        <span class="h5">Program Offered</span>
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li class="text-muted">Preschool Program</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li class="text-muted">Kindergarten Care</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Licensed Capacity-->
                    <div>
                        <span class="h5">Licensed Capacity</span>
                        <ul>
                            <li class="text-muted">55 Children</li>
                        </ul>
                    </div>
                    <!--Ages/Grades-->
                    <div>
                        <div>
                            <span class="h5">Ages/Grades</span>
                            <ul>
                                <li class="text-muted">2 years to 5 years</li>
                            </ul>
                        </div>
                    </div>
                    <!--Kindergarten Offered-->
                    <div>
                        <span class="h5">Kindergarten Care Offered</span>
                        <ul>
                            <li class="text-muted">Yes</li>
                        </ul>
                    </div>
                    <!--Location-->
                    <div>
                        <span class="h5">Location</span>
                        <ul>
                            <li class="text-muted">Inside the Manitoba Institute of Trades and Technology,
                                <a href="https://goo.gl/maps/4XBtLszzWoMcSg2t9" target="_blank" rel="noreferrer"
                                    aria-label="Map Link" title="Location">1555 Pembina
                                    Highway, Winnipeg, Manitoba, R3T 2E5</a></li>
                        </ul>
                    </div>
                    <!--Phone-->
                    <div>
                        <span class="h5">Phone Number</span>
                        <ul>
                            <li class="text-muted"><a href="tel:2044537600" rel="noreferrer" aria-label="Phone number"
                                    title="Phone">204.453.7600</a></li>
                        </ul>
                    </div>
                    <!--Hours-->
                    <div>
                        <span class="h5">Business Hours</span>
                        <ul>
                            <li class="text-muted">7:00 AM to 6:00 PM</li>
                        </ul>
                    </div>
                    <!--Operational Months-->
                    <div>
                        <span class="h5">Operational Months</span>
                        <ul>
                            <li class="text-muted">Open All Year Round</li>
                        </ul>
                    </div>
                    <!--Fees-->
                    <div>
                        <span class="h5">Fees</span>
                        <ul>
                            <li class="text-muted">Preschool and Kindergarten Care - $20.80 per day</li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <a onclick="$('#Mitt-text').hide('500')" class="btn btn-primary text-white"><i
                                class="fa fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="h5 mt-2"><b>Monthly Family Membership Fee</b></div>
        <p class="text-muted">The monthly family member ship fee is <span class="text-success"
                style="padding: 1px;">$10.00</span>
            per billing period <span class="text-success" style="padding: 1px;">(13 billing periods in a
                year)</span> plus 24 hours
            of volunteer service per year. Starting this year the membership fee will be used to enhance new initiatives
            in literacy and STEAM (Science, Technology, Engineering, the Arts and Mathematics). New
            equipment and programming materials will be purchased to create hands on educational
            stations for the children to circulate through and resource kits for the children to explore.
            The child care centers will also be moving towards creating natural environments by
            upgrading our equipment and materials</p>

        <div class="h5 mt-2"><b>Field Trip/Special Event Fee</b></div>
        <p class="text-muted">During the year and especially during the warmer months, the children may have an
            opportunity to explore other educational sites such as a farm or a zoo. Special guest
            speakers may also come for presentation or special activities. A maximum fee of up to
            <span class="text-success" style="padding: 1px;">$10</span> may be charged per event. Parents will
            be provided with a <span class="text-success" style="padding: 1px;">30 days</span> notice and can
            choose if they wish for their child to participate or stay back at the center.
        </p>

        <p class="lead text-center mt-2" style="color: #E76F51;">*In-service and school break fees are charged regardless
            of attendance!*</p>

        <p class="text-center mt-2 text-muted">
            If you have any questions please <a href="./getintouch.php" rel="noreferrer" aria-label="contact page link"
                title="CONTACT">contact</a> us!</p>
    </div>
</div>
<?php
    include_once 'components/footer.php';
?>