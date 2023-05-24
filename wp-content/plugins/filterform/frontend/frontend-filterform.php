
<?php
add_shortcode( "filterform", 'filterform_front_view' );

function filterform_front_view()
{?>

    <form id="category-checkboxes-form">
    <?php
    $categories = get_categories();
    foreach ( $categories as $category ) {
        echo '<input type="checkbox" name="category[]" value="' . $category->term_id . '" id="' . $category->slug . '">';
        echo '<label for="' . $category->slug . '">' . $category->name . '</label><br>';
    }
    ?>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('#category-checkboxes-form input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var selectedCategories = [];
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    selectedCategories.push(checkbox.value);
                }
            });
            if (selectedCategories.length > 0) {
                var selectedCategoriesText = selectedCategories.join(', ');
                alert('Selected category IDs: ' + selectedCategoriesText);
                window.location.href = '<?php echo home_url('/index.php/'); ?>/?category_ids=' + selectedCategoriesText;


            } else {
                alert('No categories selected.');
            }
        });
    });
});

</script>











<?php }?>