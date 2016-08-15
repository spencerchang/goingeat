$(function () {
    // init Masonry
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer'
    });

    // layout Isotope after each image loads
    $('.grid,.food_grid').imagesLoaded().progress(function () {
        $('.grid,.food_grid').masonry();
    });

    var $food_grid = $('.food_grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });


    // init Isotope
    var $food_grid = $('.food_grid').isotope({
        // options
    });
    // filter items on button click
    $('.filter-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $food_grid.isotope({filter: filterValue});
    });


});