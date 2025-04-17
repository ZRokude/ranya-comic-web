$("#library").click(function() {
    const idkomik = $(this).data("id");

    $ajax({
        url:/webKomik/ranya-comic-web/Library/Library.php,
        method: "POST",
        data: {komik_id : idkomik},
        success: function(response){
            alert(response);
        }
    });
});