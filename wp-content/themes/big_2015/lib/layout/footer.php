<?php

// Footer
remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_before_footer', 'big_be_footer' );
function big_be_footer() {
?>



<?php
}

add_action( 'genesis_footer', 'big_do_footer' );
function big_do_footer() {
?>
<?php if(is_page('4')){ ?>
<div class="footer__wrap group">
    <div class="call-us">
        <p>
            <b>Not sure what fits your needs?</b>
            <span>Give us a call at (877) 508-9983</span>
        </p>
    </div><!--
    --><div class="quick__find">
        <p>I am looking for</p>
        <div class="dropdown__service">
            <span>wireless installation</span>
            <ul class="dropdown__items">
                <li>Architect</li>
                <li>President of a company</li>
                <li>IT Specialist</li>
                <li>Tax Collector</li>
                <li>Construction Foreman</li>
                <li>Superintendent</li>
                <li>Healthcare IT Specialist</li>
                <li>Not Listed / Other</li>
            </ul>
        </div>
        <a href="" class="button button--qf">Send <span class="arrow">&rsaquo;</span></a>
    </div>
</div>
<?php }else{ ?>

<div class="page__footer group">
    <div class="call-today col-3">
        <h3>Call Us Today</h3>
        <p>(877) 508-9983</p><br>
        <p>Terms &amp; Privacy</p>
        <p>Site Map</p><br>
        <p class="copyright">&copy; 2015 All rights reserved.</p>
    </div>
    <div class="social__section col-4">
        <div class="social--icons">
            <span> Follow BIG</span>
            <a href="">f</a>
            <a href="">t</a>
            <a href="">in</a>
        </div>
        <div class="newsletter-signup">
            <label for="">BIG Newsletter Sign-up</label>
            <div class="input--wrap">
                <input type="text" name="" placeholder="Email" value="">
                <button type="submit">Submit <span class="arrow">&rsaquo;</span></button>
            </div>
        </div>
    </div>
    <div class="footer__address col-5">
        <div class="address--block">
            <div class="map">
                
            </div>
            <div class="address">
                <h4>Business Information Group, Inc.<br>BIG Wireless, LLC</h4>
                <p>156 N. George Street, Suite 100, York, PA 17401</p>
                <p>(877) 508-9983</p>
                <p>service@4service.net</p>
            </div>
        </div>
    </div>
</div>

<?php } ?>
<?php
}