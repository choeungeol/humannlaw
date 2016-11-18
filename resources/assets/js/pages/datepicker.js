$("#daterange1").daterangepicker({
    locale: {
        format: 'MM/DD/YYYY'
    }
});
$("#daterange2").daterangepicker({
    timePicker: true,
    timePickerIncrement: 1,
    locale: {
        format: 'MM/DD/YYYY h:mm A'
    }
});

function cb(start, end) {
    $('#daterange3 span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
}
cb(moment().subtract(29, 'days'), moment());

$('#daterange3').daterangepicker({
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment()],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
}, cb);

$("#rangepicker4").daterangepicker({
    singleDatePicker: true,
    showDropdowns: true
});


//datetimepicker

$("#datetime1").datetimepicker().parent().css("position :relative");
$("#datetime2").datetimepicker({
    format: 'LT'
}).parent().css("position :relative");
$("#datetime3").datetimepicker({
    viewMode: 'years'
}).parent().css("position :relative");
$("#datetime4").datetimepicker({
    viewMode: 'years',
    format: 'MM/YYYY'
}).parent().css("position :relative");
$("#datetime5").datetimepicker({
    inline: true,
    sideBySide: true
});
//dtetime picker end

//clockface picker
$("#clockface1").clockface();

$("#clockface2").clockface();

$("#clockface3").clockface({
    format: 'H:mm'
}).clockface('show', '14:30');
//clockface picker end


$("#time1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time11").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time12").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time13").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time14").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time15").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time16").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time17").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time21").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time22").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time23").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time24").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time25").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time26").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time27").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time31").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time32").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time33").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time34").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time35").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time36").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time37").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time41").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time32").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time33").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time34").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time35").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time36").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time37").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time41").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time42").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time43").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time44").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time45").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time46").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time47").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time51").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time52").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time53").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time54").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time55").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time56").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time57").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time61").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time62").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time63").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time64").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time65").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time66").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time67").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time71").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time72").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time73").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time74").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time75").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time76").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time77").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time81").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time82").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time83").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time84").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time85").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time86").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time87").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time91").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time92").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time93").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time94").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time95").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time96").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#time97").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");