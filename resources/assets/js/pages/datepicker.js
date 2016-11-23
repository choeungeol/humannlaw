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


/*
$("#a_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//B

$("#b_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//C

$("#c_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//d
$("#d_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//e

$("#e_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//f

$("#f_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//g
$("#g_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//h
$("#h_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//i
$("#i_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//j

$("#j_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");


//휴게시간

$("#a_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#a_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//B

$("#b_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#b_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//C

$("#c_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#c_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//d
$("#d_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#d_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//e

$("#e_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#e_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//f

$("#f_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#f_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//g
$("#g_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#g_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//h
$("#h_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#h_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//i
$("#i_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#i_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//j

$("#j_timese1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timese2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timese3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timese4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timese5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timese6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timese7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timeee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timeee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timeee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timeee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timeee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timeee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timeee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$(".date").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

// 휴게시간2

$("#aa_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#aa_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//B

$("#bb_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#bb_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//C

$("#cc_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#cc_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//d
$("#dd_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#dd_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//e

$("#ee_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ee_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//f

$("#ff_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ff_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//g
$("#gg_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#gg_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//h
$("#hh_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#hh_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//i
$("#ii_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#ii_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

//j

$("#jj_times1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_times2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_times3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_times4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_times5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_times6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_times7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_timee1").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_timee2").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_timee3").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_timee4").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_timee5").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#jj_timee6").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");

$("#j_timee7").datetimepicker({
    format: 'HH:mm'
}).parent().css("position :relative");
*/
