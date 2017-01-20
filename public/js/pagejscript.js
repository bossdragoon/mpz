/*
 * 
 * Initialize global functions, variables or widgets
 * run at every page
 */


function todayYMD() {
    //sub function to add a zero in front of numbers<10
    function pad(s) {
        return (s < 10) ? '0' + s : s;
    }

    var d = new Date();
    var curr_day = d.getDate();
    var curr_month = d.getMonth() + 1; //'getMonth' first count at 0=January
    var curr_year = d.getFullYear();
    curr_day = pad(curr_day);
    curr_month = pad(curr_month);
    var curr_date = curr_year + '-' + curr_month + '-' + curr_day;

    var h = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds();
    m = pad(m);
    s = pad(s);
    var curr_time = h + ":" + m + ":" + s;

    var dateYMD = curr_date + " " + curr_time;
    return dateYMD.trim();
}

function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}