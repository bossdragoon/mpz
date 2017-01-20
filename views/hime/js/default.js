$(function () {
    
    $("#submitBt").on('click', function () {
        $('form').submit();
        return false;
    });
    $("#clearBt").on('click', function () {
        $(this).closest('form').find("input[type=text], textarea").val("");
        $(this).closest('form').find("input[type=radio]").prop("checked", false);
        $(this).closest('form').find(".selectpicker").selectpicker("refresh");
        return false;
    });

    $('form').on('submit', function () {

//        $("#keyword2").attr("disabled", "disabled");
        var formData = $(this).serialize();


        opennewtab('https://gamy.jp/uchi_hime/dictionary/girls?' + formData);
        return false;
    });

    $("#keyword2").on("change", function () {
        var $search = $("#keyword");
        var hime = $("#keyword2").val();

        if ($(this).val() !== "") {
            $search.val(hime).prop("readonly", true);
        } else {
            $search.val("").prop("readonly", false);

        }

    });
    
    $("#hime-attr .collapse").collapse("show");
    

    /*=======================================================================*/
    function opennewtab(url)
    {
        var win = window.open(url, '_blank');
    }

});