<title> News | TAPS NITW</title>
    <div class="col s12 m4 l4">
        <div class="z-depth-2">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s3 m3 l3"><?php echo $title?></div>
                        <div class="col s1 m1 l1">:</div>
                        <div class="col s8 m8 l8"><?php echo $content?></div>
                    </div>
                    <p class="right-align">
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Read More</a>
                        <div id="modal1" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4><?php echo $title?></h4>
                                <p><?php echo $content?></p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
         