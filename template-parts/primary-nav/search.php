<?php
/**
 * Navbar Search Form
 *
 * @package WordPress
 * @subpackage Secretum
 */
if (secretum_mod('primary_nav_search_status')) {
?>
<form method="get" class="navbar-form navbar-right" id="navbar-searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
    <div class="input-group">
        <input type="text" class="form-control" name="s" placeholder="<?php echo secretum_text('navbar_search_button_text'); ?>" value="<?php echo the_search_query(); ?>" title="<?php echo secretum_text('navbar_search_button_title'); ?>" /><button type="submit" class="btn btn-default icon-search"></button>
    </div>
</form>
<?php
}