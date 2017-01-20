$(document).ready(function () {


//    var regReport2MySQL = /('\s?\+?)|(\s)|((\{([\s\S]*?)\})|(\/\/(.*)$))/g;
    var regReport2MySQL = /('\s?\+?)|((\{([\s\S]*?)\})|(\/\/(.*)$))/g;
    var regVbnet2MySQL = /("\s?(\+|\&)?)|((\{([\s\S]*?)\})|(\/\/(.*)$))/g;
    var regMySQL2Report = /\'\s*((\/\*([\s\S]*?)\*\/)|(\-\-(.*))|(\#(.*)))/g;

    function clearResult() {
        $("#txtresult").empty().val("");
    }

    $("form").on("submit", function () {

        var cmode = $('input[name=cmode]:checked').val();

        clearResult();
        var resultConvert = '';
        switch (cmode) {
            case 'rq2nq':
                resultConvert = convertReport2MySQL();
                break;
            case 'nq2rq':
                resultConvert = convertMySQL2Report();
                break;
            case 'nqAdv':
                resultConvert = convertMySQLProd();
                break;
            case 'instquote':
                resultConvert = insertQuotation();
                break;
            case 'nq2vb':
                resultConvert = convertMySQL2Vbnet();
                break;
            case 'vb2nq':
                resultConvert = convertVbnet2MySQL();
                break;
            default:
                break;
        }

        $("#txtresult").val(resultConvert);
        return false;
    });


    function convertReport2MySQL() {
        var txt = $("#txt").val();
        var result = txt.replace(regReport2MySQL, ' ');

        var todayDate = todayYMD();
        todayDate = todayDate.substring(0, todayDate.indexOf(" "));
        var txtVar = 'SET @ds1 := "' + todayDate + '";' + "\n" + 'SET @ds2 := "' + todayDate + '";' + "\n\n";
        result = result.replace(/['"]?\s?\+?ds\d\+?\s?['"]?/g, function (i) {
            var datetext = i.replace(/['"+]|\s/g,'');
            return '@' + datetext;
        });

        result = result.trim();

        return txtVar + result + ";";

    }


    function convertMySQL2Report() {
        var del_comment_sql = $('input[name=del_comment_sql]:checked').val();
        console.log(del_comment_sql);
        var txt = $("#txt").val();

        var result = txt.replace(/[Ss][Ee][Tt].+/g,'').replace(';','').trim();
        
        result = result
                .replace(/'/g, '"')
                .replace(/\r\n|\r|\n/g, " \'\+\n\'");
             
        result = result.replace(regMySQL2Report, function (i) {
            if (del_comment_sql === "on") {
                return "";
            }
            return '{' + i + '}';
        });
        
        result = result.replace(/\@\w+/g, function (i) {
            var vText = i.replace('@','');
            return '\"\'+' + vText + '+\'\"';
        });


        result = result.trim();

        return "\'" + result + "\'";
    }

    function convertMySQLProd() {
        var txt = $("#txt").val();

        var result = txt.replace(regMySQL2Report, "");

        result = result
                .replace(/'/g, '"')
                .replace(/\r\n|\r|\n/g, " \'\,\n\'")
                .trim();

        return "CONCAT(\'" + result + "\')";
    }
    
    function insertQuotation() {
        var txt = $("#txt").val();

        var result = txt.replace(/([^\s]+)/g, function(i){
            return '"' + i + '"' + ",";
        });
        result = result.slice(0, -1);       

        return result;
    }


function convertMySQL2Vbnet() {
        var txt = $("#txt").val();

        var result = txt.replace(/[Ss][Ee][Tt].+/g,'').replace(';','').trim();
        
        result = result
                .replace(/\r\n|\r|\n/g, ' " ' + $('#vbconcat').val().toString() + '\n"');

        result = result.replace(regMySQL2Report, function (i) {
            return '{' + i + '}';
        });

        result = result.replace(/\@ds\d/g, function (i) {
            var dateText = i.replace('@','');
            return '\'\"+' + dateText + '+\"\'';
        });


        result = result.trim();

        return "\"" + result + "\"";
    }


    function convertVbnet2MySQL() {
        var txt = $("#txt").val();
        var result = txt.replace(regVbnet2MySQL, ' ');

        var todayDate = todayYMD();
        todayDate = todayDate.substring(0, todayDate.indexOf(" "));
        var txtVar = 'SET @ds1 := "' + todayDate + '";' + "\n" + 'SET @ds2 := "' + todayDate + '";' + "\n\n";
        result = result.replace(/['"]?\s?\+?ds\d\+?\s?['"]?/g, function (i) {
            var datetext = i.replace(/['"+]|\s/g,'');
            return '@' + datetext;
        });

        result = result.trim();

        return txtVar + result + ";";

    }
    


//
//    var arr = {
//    "key_1": {
//    	"your_name": "jimmy",
//    	"your_msg": "hello world"
//    },
//    "key_2": {
//    	"your_name": "billy",
//    	"your_msg": "foo equals bar"
//    }
//}
//
//
//    for (var key in arr) {
//        // skip loop if the property is from prototype
//        if (!arr.hasOwnProperty(key))
//            continue;
//
//        var obj = arr[key];
//        for (var prop in obj) {
//            // skip loop if the property is from prototype
//            if (!obj.hasOwnProperty(prop))
//                continue;
//
//            // your code
//            console.log(prop + " = " + obj[prop]);
//        }
//    }
//    
//    
//    
//    
//    var numeric = [
//    ['input1','input2'],
//    ['input3','input4']
//];
//
//numeric.push(['input5','input6']);
//
//console.log(numeric);
//    
//    
//    
//    
//    

});