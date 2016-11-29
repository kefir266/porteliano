/**
 * Created by Antis on 26.11.2016.
 */
$(function(){
    $(document).on('click', '.showModalButton', function(){
        $('#modalContent').load($(this).attr('value'));
        //dynamiclly set the header for the modal
        $('#modalHeader').find('h2').text(
            $(this).attr('title')
        );  
    });
});
