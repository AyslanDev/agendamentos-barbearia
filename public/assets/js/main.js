$(function() {
 
    $('#smartwizard').smartWizard({
        theme: 'dots',
        lang: { 
            next: 'Próximo',
            previous: 'Voltar'
        }
    });

    $.datepicker.setDefaults($.datepicker.regional["pt-BR"]);
    $("#datepicker").datepicker({
        dateFormat: "dd/mm/yy",
        showAnim: "clip",
        minDate: 0 
    });

});