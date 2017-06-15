$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function() {
    $(document).on("change", "#cert", function() {
        $("#certification").val( this.value ); // this.value is enough for you
    }).val( $('#certification').val() ).change(); // for pre-selection trigger
});
