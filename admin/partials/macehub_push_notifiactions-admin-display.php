<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.shameelsadaka.github.io
 * @since      1.0.0
 *
 * @package    Macehub_push_notifiactions
 * @subpackage Macehub_push_notifiactions/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="macehub_options" action="options.php">

        <fieldset>
            <p>
                <b>Macehub API Key : </b>
                <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-api_key" name="<?php echo $this->plugin_name; ?>[api_key]" value=""/>
            </p>
        </fieldset>

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>
