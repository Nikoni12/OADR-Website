(function($){
    $(function(){
        $('#id_0').datetimepicker({
            allowInputToggle: true,
            showClose: true,
            showClear: true,
            showTodayButton: true,
            minDate: new Date(),
            format: "MM/DD/YYYY hh:mm:ss A"
        }).on('dp.change', function(e) {
            $('#id_1').data("DateTimePicker").minDate(e.date)
        });
        $('#id_1').datetimepicker({
            allowInputToggle: true,
            showClose: true,
            showClear: true,
            showTodayButton: true,
            format: "MM/DD/YYYY hh:mm:ss A"
        });
    });
})(jQuery);
