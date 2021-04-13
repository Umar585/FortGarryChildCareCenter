<?php
    $page = "aboutus";
    $subpage = "ourmission";
    $title = "ABOUT US";
    include_once 'components/navbar.php';

    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }
?>
<div class="ourmission">
    <div class="my-jumbotron jumbotron rounded-0">
        <!--title-->
        <h1 class="text-center text-white">Fort Garry Child Care Center Co-op Inc</h1>
        <h4 class="text-center">Get to know us!</h4>
    </div>
    <div class="container">
        <div class="mt-4">
            <div class="row">
                <!--col-sm-6-->
                <div class="col-sm-6 text-center border-right">
                    <h1>Our Mission</h1>
                    <p class="lead">To provide
                        child day care services for families every where and to be true to the values of
                        non-profit, co-operative governance.</p>
                </div>
                <!--col-sm-6-->
                <div class="col-sm-6 text-center">
                    <h1>Our Vision</h1>
                    <p class="lead">Fort Garry Child Care Center Co-op Inc. Strives to
                        achieve excellence in child daycare services and responsiveness to the needs of children.
                        Families and community.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 text-white" style="background-color: #264653;">
        <div class="container p-3">
            <h1 class="text-center">History</h1>
            <!--paragraph-->
            <p>
                We are a Non-Profit Registered Charity that functions under the direction of a volunteer
                Board of Directors that consists of parents and community members. We are licensed by
                Manitoba Early Learning and Child Care to accept up to 55 preschool children, aged 2 to
                5 years, at our Pembina Hwy location in Manitoba Institute of Trades and Technology
                Campus (MITT). In addition, we are licensed for 30 school-age children, ages 5-12 years,
                at our Ecole Viscount Alexander School location, 20 kindergarten children and 30 school-
                age children at our Oakenwald School location and 30 school-age children at our Henry
                G. Izatt School location.
            </p>
            <p>
                The Co-op was incorporated in 1992 with the amalgamation of College Co-op Day Care Center Inc. and
                Oakenwald Before & After School Co-op Inc. College`s preschool program had been in Fort Garry since its
                incorporation in 1974, located in the basement of the Fort Garry United Church since December 1981.
                Oakenwald school-age program was located in the Oakenwald School since its incorporation in 1990. On
                April 19, 1993 both programs moved to 757 Lyon Street (formerly General Steele School).
            </p>
            <p>
                A Satellite program called Fort Garry Oakenwald School-age opened September 7, 2005
                with the cooperation of Pembina Trails School Division #5 and Oakenwald School. In
                2003, the child care Co-op started to prepare for relocation due to the sale and planned
                demolition of the building at 757 Lyon Street. In August 2006, the new 4,100 square foot
                space opened its doors in the newly renovated space at Manitoba Institute of Trades and
                Technology (MITT) (formerly Winnipeg Technical College) where it continues to serve
                the Fort Garry area.
            </p>
            <p>
                In 2009, a school-age satellite program opened in Henry G. Izatt Middle School. In fall of
                2010 we relocated our 15 space school-age program operating out of Manitoba Institute
                of Trades and Technology (MITT) into Ecole Viscount Alexander and expanded the
                program to accommodate up to 45 children.
            </p>
        </div>
    </div>

    <div class="philosophy mt-4 container">
        <!--title-->
        <h1 class="text-center">Philosophy</h1>
        <!--subtitle-->
        <div class="h4 text-center">Our Philosophy and Objectives are to...</div>
        <div class="jumbtron mt-4">
            <!--row -->
            <div class="list-inline text-center" style="overflow:auto; white-space: nowrap; padding: 10px;">
                <!--cols -->
                <div class="list-inline-item text-center h6 p-2">
                    <i class="fa fa-apple-alt h1 m-2"></i>
                    <p>Grow Well-Balanced</p>
                </div>
                <!--cols -->
                <div class="list-inline-item text-center h6 p-2">
                    <i class="fa fa-users h1 m-2"></i>
                    <p>Provide Friendly Atmosphere</p>
                </div>
                <!--cols -->
                <div class="list-inline-item text-center h6 p-2">
                    <i class="fa fa-heart h1 m-2"></i>
                    <p>Respect Each Other</p>
                </div>
                <!--cols -->
                <div class="list-inline-item text-center h6 p-2">
                    <i class="fa fa-hands-helping h1 m-2"></i>
                    <p>Assist Children</p>
                </div>
                <!--cols -->
                <div class="list-inline-item text-center h6 p-2">
                    <i class="fa fa-sun h1 m-2"></i>
                    <p>Fostering Independence</p>
                </div>
                <!--cols -->
                <div class="list-inline-item text-center h6 p-2">
                    <i class="fa fa-question h1 m-2"></i>
                    <p>Create Children Interest</p>
                </div>
            </div>
        </div>
        <!--title-->
        <h1 class="text-center mt-4">Our Child Care Centers</h1>
        <p class="lead">Our Child Care Centers will provide your child(ren) with an environment where they can develop a
            positive self-image and grow to become independent by improving their imagination,
            creativity, and resourcefulness. In addition:</p>
        <dl class="ml-4">
            <dd><i class="fa fa-check-square"></i> We strive to develop each child’s skills in areas of listening, speech,
                hygiene, large/small muscles, and self-help</dd>
            <dd><i class="fa fa-check-square"></i> We hope to create the basis for an appreciation of arts,
                sciences, music, and literature while the children learn to function within their environment and
                their community</dd>
        </dl>

        <p class="lead">Respect is a big part of the day:</p>
        <dl class="ml-4">
            <dd><i class="fa fa-check-square"></i> Respect for themselves - with a positive attitude towards their
                skills and their bodies</dd>
            <dd><i class="fa fa-check-square"></i> Respect for others – learning to share and take turns, accepting
                everyone’s similarities and differences, and listening to others</dd>
            <dd><i class="fa fa-check-square"></i> Respect for property - keeping the Co-op safe and looking after
                our toys</dd>
        </dl>
    </div>
</div>

<?php
    include_once 'components/footer.php';
?>