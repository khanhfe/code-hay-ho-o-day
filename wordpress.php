<?php
/**
 * NOTIFICATION ----------- ----------- -----------
 */
add_action('admin_menu', 'tu_contact_admin_menu_notification');
function tu_contact_admin_menu_notification() {
    global $menu;
    $contacts = get_posts(array('post_type' => 'contact', 'posts_per_page' => -1, 'post_status' => 'pending'));
    $menu[9][0] .= $contacts ? '&nbsp;<span class="update-plugins count-1" title="' ._('Bạn có', TEXT_DOMAIN).' '. count($contacts) .' '. _('thư chưa trả lời', TEXT_DOMAIN).'"><span class="update-count">' . count($contacts) . '</span></span>' : '';
}
