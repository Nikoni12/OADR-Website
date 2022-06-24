(function($){
    $(function(){
        $('#id_0').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "minDate": new Date(),
            "format": "MM/DD/YYYY hh:mm:ss A",
            onClose: function(selectedDate) {
                // Set the minDate of 'to' as the selectedDate of 'from'
                $("#id_1").datetimepicker("option", "minDate", selectedDate);
            }
        });
        $('#id_1').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "MM/DD/YYYY hh:mm:ss A",
        });
    });
})(jQuery);
