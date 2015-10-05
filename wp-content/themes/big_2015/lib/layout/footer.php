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

<div class="footer__wrap clearfix">
    <div class="call-us">
        <p>
            <b>Not sure what fits your needs?</b>
            <span>Give us a call at (877) 508-9983</span>
        </p>
    </div><!--
    --><div class="quick__find">
        <p>I am looking for</p>
        <div>wireless installation</div>
        <a href="" class="button button--qf">Send ></a>
    </div>
</div>

<?php
}