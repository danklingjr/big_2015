<?php
//Remove Header Information
// remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_header', 'genesis_do_header' );



//Primary Header
add_action( 'genesis_before_header', 'big_search' );
function big_search()
{
?>


<?php 
}
//Primary Header
add_action( 'genesis_header', 'big_do_header' );
function big_do_header()
{
?>


<div class="branding <?php if(!is_page('4')){ ?>branding--page<?php } ?> clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 155.8 60" enable-background="new 0 0 155.8 60" xml:space="preserve">
    <g>
        <path fill="#FFFFFF" d="M125.6,0H29.9C13.3,0,0,13.5,0,30c0,16.5,13.3,30,29.9,30h95.8c16.6,0,30.1-13.5,30.1-30
            C155.8,13.5,142.2,0,125.6,0L125.6,0z"/>
        <path fill="#010101" d="M125.6,0H29.9C13.3,0,0,13.5,0,30c0,16.5,13.3,30,29.9,30h95.8c16.6,0,30.1-13.5,30.1-30
            C155.8,13.5,142.2,0,125.6,0L125.6,0z"/>
        <polygon fill="#FFFFFF" points="13.7,23.5 13.7,17.7 12.3,17.7 12.3,15.8 17.6,15.8 17.6,17.7 16.1,17.7 16.1,23.5 13.7,23.5   "/>
        <polygon fill="#FFFFFF" points="22.8,23.5 22.8,20.4 21.7,20.4 21.7,23.5 19.2,23.5 19.2,15.8 21.7,15.8 21.7,18.5 22.8,18.5 
            22.8,15.8 25.3,15.8 25.3,23.5 22.8,23.5     "/>
        <polygon fill="#FFFFFF" points="27.5,23.5 27.5,15.8 29.9,15.8 29.9,23.5 27.5,23.5   "/>
        <path fill="#FFFFFF" d="M32,15.8h2.3l2,4.6l0,0c0-0.5-0.1-0.9-0.2-1.3c-0.1-0.4-0.1-0.9-0.1-1.3v-2h2.4v7.7h-2.4L34.3,19l0,0
            c0,0.4,0.1,0.7,0.1,1.1c0,0.4,0.1,0.7,0.1,1.1v2.3H32V15.8L32,15.8z"/>
        <polygon fill="#FFFFFF" points="47,15.8 45,19.5 47.2,23.5 44.6,23.5 43.1,20 43,20 43,23.5 40.6,23.5 40.6,15.8 43,15.8 43,19.1 
            43.1,19.1 44.4,15.8 47,15.8     "/>
        <path fill="#89C541" d="M125.6,2.8H47.1v13h15.5c7.9,0,14.1,1.9,14.1,10c0,5.1-3.9,7.1-4,7.6c-0.1,0.5,0.3,0.7,1.8,2.1
            c1.5,1.4,4.8,4.9,4.8,11.1c0,4.3-2.8,8.3-6.3,10.6h8.6V15.6h14.5v41.6h14.4c-6.7-3-12.1-10.5-12.1-19.4c0-11.5,5.8-22.2,22-22.2
            c6,0,9.2,0,9.2,0c0.6,0,0.7,0,0.7,0.8v5.2c0,1.4-0.7,1.1-3.3,1.1c-2.6,0-5.7,0-8.4,1.1c-2.6,1.1-6.6,4.7-6.6,14.1
            c0,9.4,4.8,13.5,6.6,13.7c0.8,0.1,1.3-0.3,1.6-0.7v-7.9h-3.1V36h16.1v20.1C144.7,52.8,153,42.4,153,30C153,15,140.7,2.8,125.6,2.8
            L125.6,2.8z M60.9,41c0,0,0,7.9,0,9.4c0,1.5,1.9,2.2,3.4,0.7c1.5-1.5,3.2-7.3,0.6-10.3C62.4,37.8,60.9,39.5,60.9,41L60.9,41z
             M64.8,29.8c1.2-2.2,1.2-5.7-0.9-7c-2.1-1.3-2.6-0.7-2.6,0.4c0,0,0,5.6,0,7.3C61.3,32.1,63.6,32,64.8,29.8L64.8,29.8z"/>
    </g>
    </svg></a>
    <p>Business Information Group, Inc.<br>BIG Wireless, LLC</p>

</div>
<?php if(is_page('4')){ ?><a href="" class="gateway__remote">Remote Support</a><?php } ?>


<nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

    <?php if (is_tree(6)) {?>
    <?php wp_nav_menu( array( 'theme_location' => 'wireless-sub' ) ); ?>
    <?php } else if (is_tree(8)) {?>
    <?php wp_nav_menu( array( 'theme_location' => 'networking-sub' ) ); ?>
    <?php } else if (is_tree(10)) {?>
    <?php wp_nav_menu( array( 'theme_location' => 'software-sub' ) ); ?>
    <?php } ?>
    <?php if(!is_page('4')){ ?>
    <a href="" class="nav__actions action--careers">Careers</a>
    <a href="" class="nav__actions action--help-desk">Help<br>Desk</a>
    <a href="" class="nav__actions action--remote">Remote<br>Support</a>
    <?php } ?>
</nav>


<?php
}

add_action('genesis_after_header', 'big_mobile_nav');
function big_mobile_nav()
{
?>



<?php
}