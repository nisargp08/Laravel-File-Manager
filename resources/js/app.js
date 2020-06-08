require('./bootstrap');

$(document).ready( function () {
    $('.system-file-type-selection').hide();
    //1. Datatable Initialization
    $('#file-table').DataTable();

    //2.Button Group file type selection
    $('#system-file').on('click',function(){
        $('.system-file-type-selection').show();
    });
    $('#public').on('click',function(){
        $('.system-file-type-selection').hide();
    });
} );
