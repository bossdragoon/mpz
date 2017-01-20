<form name="frm" id="frm" method="post" action="">
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">Mode:</div>
            <div class="panel-body">
                <div class="radio radio-success">
                    <input type="radio" name="cmode" id="cmode1" value="rq2nq" checked>
                    <label for="cmode1">&nbsp;HOSxP Report Query => Navicat Query (delphi)</label>                                
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="radio radio-success">
                            <input type="radio" name="cmode" id="cmode2" value="nq2rq" >
                            <label for="cmode2">&nbsp;Navicat Query => HOSxP Report Query (delphi)</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="checkbox checkbox-info">
                            <input type="checkbox" id="del_comment_sql" name="del_comment_sql" checked/>
                            <label for="del_comment_sql">
                                &nbsp;ลบ Comment ออก  
                            </label>
                        </div>
                    </div>
                </div>                
                <div class="radio radio-success">
                    <input type="radio" name="cmode" id="cmode3" value="nqAdv" disabled>
                    <label for="cmode3">&nbsp;Navicat Query to PROCEDURE MODE</label>                                
                </div>
                <div class="radio radio-success">
                    <input type="radio" name="cmode" id="cmode4" value="instquote" disabled>
                    <label for="cmode4">&nbsp;Insert Quotation</label>                                
                </div>
                <div class="radio radio-success">
                    <input type="radio" name="cmode" id="cmode5" value="nq2vb" disabled>
                    <label for="cmode5">&nbsp;MySQL -> VB.NET</label>
                    <select id="vbconcat" disabled>
                        <option value='+' selected>+</option>
                        <option value='&' >&</option>
                    </select>
                </div>
                <div class="radio radio-success">
                    <input type="radio" name="cmode" id="cmode6" value="vb2nq" disabled>
                    <label for="cmode6">&nbsp;VB.NET -> MySQL</label>
                </div>
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Begin Convertion" id="btsubmit" name="btsubmit" />
    </div>
    <hr>
    <div id="myContainer" class="container-fluid">
        <div class="textareacontainer">
            <div class="form-group">
                <label for="txt">ใส่ข้อความ:</label>
                <textarea class="form-control" rows="5" name="txt" id="txt"></textarea>
            </div>
        </div>
        <div class="textareacontainer">
            <div class="form-group">
                <label for="txtresult">ผลลัพธ์:</label>
                <textarea class="form-control" rows="5" name="txtresult" id="txtresult"></textarea>
            </div>
        </div>
    </div>
</form>
