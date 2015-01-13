
$(document).ready(function(){
    $('.empGallery li').click(selectLI);
    
    function selectLI(){
        $('.empGallery li').removeClass('active');
        $(this).addClass('active');
        $('.empTop .mainImage img').remove();	
        $('.empTop .mainImage').append('<img src="' + $(this).data("image") + '" />');	
    }

});





