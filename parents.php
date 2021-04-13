<?php
    $page = "parents";
    $title = "PARENTS";
    include_once 'components/navbar.php';

    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }
    
    if(!isset($_SESSION['session_person'])){
        echo '<script>window.location.replace("index.php");</script>';
    }
?>
<div class="parents mb-4">
    <div class="container">

        <!--title-->
        <h1 class="pt-4 text-center" style="color: #2A9D8F;">Parents</h1>
        <!--subtitle-->
        <p class="h3 mt-2"><b>Downloads</b></p>
        <a href="#" target="_blank" rel="noreferrer" aria-label="parent hand book"
            title="PARENT HANDBOOK" class="btn btn-info m-2 disabled">Parent Handbook</a>
        <a href="assets/pdf/CodeOfConduct.pdf" target="_blank" rel="noreferrer" aria-label="parent hand book"
            title="PARENT HANDBOOK" class="btn btn-info m-2">Code Of Conduct</a>

        <p class="lead mt-3">Interested in enrolling, Please click <a href="http://www.manitoba.ca/fs/childcare/occr/"
                target="_blank" rel="noreferrer" title="OFFICAL SITE" aria-label="link to registry">here</a> to go on our waiting list!</p>
        <hr />

        <!--subtitle-->
        <p class="h3 mt-2"><b>For more information please contact Early Learning and Child Care</b></p>
        <h5 class="mt-3">
            <a href="https://goo.gl/maps/pz35XcRwF7WXNHzXA" rel="noreferrer" aria-label="LOCATION" target="_blank" title="LOCATION" class="text-muted">Location: 210 - 114
                Garry Street Winnipeg, MB, R3C 4V4</a>
        </h5>
        <h5>
            <a href="mailto:cdcinfo@gov.mb.ca" rel="noreferrer" aria-label="EMAIL" title="EMAIL" class="text-muted">Email:
                cdcinfo@gov.mb.ca</a>
        </h5>
        <h5>
            <a href="tel:2049450776" rel="noreferrer" aria-label="PHONE" title="PHONE" class="text-muted">Phone: 204.945.0776</a>
        </h5>
        <h5>
            <a href="tel:18882134754" rel="noreferrer" aria-label="TOLLFREE" title="TOLLFREE" class="text-muted">Toll - Free:
                1.888.213.4754</a>
        </h5>
        <h5>
            <a href="fax:+12049482625" rel="noreferrer" aria-label="FAX" title="FAX" class="text-muted">Fax: 204.948.2625</a>
        </h5>
        <h5>
            <a href="tel:2049453724" rel="noreferrer" aria-label="TTY" title="TTY" class="text-muted">Tty: 204.945.3724</a>
        </h5>
        <h5 class="text-muted">Hours: Mon - Fri 8:30 AM - 4:30 PM</h5>
        <hr />
        <!--subtitle-->
        <p class="h3 mt-2"><b>Forms and Applications</b></p>
        <p class="lead mt-3">All details can be found on the <a href="https://www.gov.mb.ca/fs/childcare/"
                target="_blank" rel="noreferrer" aria-label="link to registry" title="OFFICAL SITE">Official Site</a>
        </p>
        <p>For the quickest response and service, please contact us by email at onlinechildcareregistry@gov.mb.ca. If
            you are unable to email, call 204-945-0776 in Winnipeg or 1-888-213-4754 toll free.</p>
        <div class="row">

            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="https://onlinechildcareregistry.gov.mb.ca/OCCRWeb/" rel="noreferrer"
                            aria-label="forms and applications" title="FORM/APPLICATION" class="h5"
                            style="color: #F4A261;" target="_blank">
                            Child Care Registry</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="http://mccahouse.org/" rel="noreferrer" aria-label="forms and applications"
                            title="FORM/APPLICATION" class="h5" style="color: #F4A261;" target="_blank">
                            Manitoba Child Care Association</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="http://www.manitoba.ca/fs/childcare/families/family_info/index.html" rel="noreferrer"
                            aria-label="informational link" class="h5" style="color: #F4A261;" title="INFORMATION"
                            target="_blank">Information For Families</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="http://www.manitoba.ca/fs/childcare/families/childcare_fees.html" rel="noreferrer"
                            aria-label="child fees" title="CHILD FEES" class="h5" style="color: #F4A261;"
                            target="_blank">Child Care Fees</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="http://www.manitoba.ca/fs/childcare/families/childcare_subsidies.html" rel="noreferrer"
                            aria-label="eligibility estimator" title="ESTIMATOR" class="h5" style="color: #F4A261;"
                            target="_blank">Subsidy Eligibility Estimator</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr />
        <!--subtitle-->
        <p class="h3 mt-2"><b>Pembina Trails School Division</b></p>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="https://www.pembinatrails.ca/Pages/default.aspx" rel="noreferrer"
                            aria-label="forms and applications" title="Pembina trails website" class="h5"
                            style="color: #F4A261;" target="_blank">
                            Pembina Trails School Division</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="https://www.pembinatrails.ca/ContactUs/Transportation/Pages/default.aspx"
                            rel="noreferrer" aria-label="forms and applications" title="Pembina trails transportation"
                            class="h5" style="color: #F4A261;" target="_blank">
                            Bus Transportation Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
    include_once 'components/footer.php';
?>