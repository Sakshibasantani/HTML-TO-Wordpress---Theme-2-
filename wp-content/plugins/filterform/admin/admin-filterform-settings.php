
<?php
add_action( 'admin_menu', 'filterform_create_menu' );
// Set Flex slider's menu.
function filterform_create_menu() {
	// create new top-level menu.
	add_menu_page( 'filterform Settings', 'filterform Settings', 'administrator', __FILE__, 'filterform_settings_page' );
}


function filterform_settings_page()
{



    $categories = get_categories();

    if ($categories) {
        echo '<form action="' . esc_url( home_url( '/' ) ) . '" method="get">';
        foreach ($categories as $category) {
            echo '<input type="checkbox" name="category[]" value="' . $category->term_id . '" id="' . $category->slug . '">';
            echo '<label for="' . $category->slug . '">' . $category->name . '</label><br>';
        }
        echo '<input type="submit" value="Filter">';
        echo '</form>';
    } else {
        echo '<p>No categories found.</p>';
    }
    
    
    

}