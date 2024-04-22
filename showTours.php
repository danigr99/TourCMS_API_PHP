<div class="row">

    <!--- Desktop version of tour HTML, shown automatically at desktop resolutions -->

    <div class="col-12" id="postsdasd-49"
        class="post-49 tour type-tour status-publish hentry tag-inline product-type-day-tours location-berlin">
        <div class="card tour-desktop">
            <div class="tourcms-card-horizontal">
                <div class="tourcms-card-horizontal-pic">

                    <div id="c-49-d" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo $tour->thumbnail_image ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo $tour->tour_url ?>"><span
                        class="dummy"></span><span class="dummy-upper-right"></span></a>
                <div class="card-body">
                    <div class="left">
                        <span class="tourcms-badge-tourtype-horizontal"><a
                                href="https://wordpress.tourcms.com/tours-by-type/day-tours/" rel="tag">Day tours</a></span><span class="tourcms-badge-location-horizontal"> <a
                                href="https://wordpress.tourcms.com/tours-by-location/berlin/" rel="tag"><?php echo $tour->location ?></a></span>
                    </div>
                    <div class="right price-panel">
                        <p class="tourcms-card-text price-label" style="">Book now</p>
                        <p class="tourcms-card-text price"><span class='fromprice'>from &#8364; <?php echo $tour->from_price ?></span></p>
                    </div>

                    <div class="card-meta-right">
                        <h5 class="tourcms-card-title"><?php echo $tour->tour_name ?></h5>
                        <p class="tourcms-card-text tourcms_wp_summary"><?php echo $tour->summary ?></p>
                        <p class="tourcms-card-text"> <b>Duration:</b> <?php echo $tour->duration_desc ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- End Desktop tour HTML -->

    <!--- Mobile version of tour HTML, shown automatically at mobile resolutions -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card tour-mobile">

            <div id="c-49-m" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $tour->thumbnail_image ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $tour->tour_name ?></h5>
                <div style="margin-top:-0.8rem;"><span class="badge badge-location"> <a
                            href="https://wordpress.tourcms.com/tours-by-location/berlin/" rel="tag"><?php echo $tour->location ?></a></span><span class="badge badge-tourtype"><a
                            href="https://wordpress.tourcms.com/tours-by-type/day-tours/" rel="tag">Day tours</a></span>
                </div>
                <!--              <p class="card-text"><i class="fas fa-history" style=""></i> <b>Duration:</b> 4 hours</p>-->
                <p class="tourcms-card-text"><?php echo $tour->summary ?></p>
            </div>
            <div class="card-footer bg-transparent">
                <p class="tourcms-card-text tour-mobile-footer-left"> <b>Duration:</b> <?php echo $tour->duration_desc ?><br></p>
                <p class="tourcms-card-text tour-mobile-footer-right" style=""><a
                        href="https://wordpress.tourcms.com/tours/day-tour-example-1-departure-a-day-inline-booking/">Book
                        now <span class='fromprice'>from &#8364;<?php echo $tour->from_price ?></span></a><br></p>
            </div>
        </div>
    </div>
    <!--- End Mobile tour HTML -->


</div>