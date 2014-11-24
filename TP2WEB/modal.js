$(document).on("click", ".open-Modal", function () {
        var myDNI = $(this).data('id');
        $(".modal-body #DNI").val( myDNI );
}); 