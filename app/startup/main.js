//jqueryByID
JQByID = function (id) {
    return $("#"+id);
}

//format date to server
formatDateServer = function (date) {
    if (date) {
        return moment(date).format("YYYY-MM-DD");
    }

    return null;
}

// Jquery ready
$(function () {
    //Date picker
    $('.datepicker').datepicker({autoclose: true, format: "dd/mm/yyyy"});
    $('.datepickermonth').datepicker({autoclose: true, minViewMode: 1, format: "mm/yyyy"});
    $(".numberOnly").on('keypress', function (evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
            return false;
        return true;
    });

    $('.btn-preview-image').on('click', function() {
        console.log('>>', $(this).attr('src'));
        var src = $(this).attr('src');
        if (src && src.length > 0) {
            $('#imagepreview').attr('src', getURLAsset() + src);
            $('#imagemodal').modal('show');
        } else {
            alert('File tidak ditemukan.')
        }
    });

    //event upload preview
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        var input = $(this).parents('.input-group').find(':text'), log = label;
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) console.log(log);
        }

    });

});