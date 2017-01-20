<?php
?>
<form id="form1" name="form1" method="get" action="" role="form">
    <div id="wrapper">
        <div id="section_header">
            <h1>[Uchi-Hime]Princess Picture Books</h1>
            <hr>
        </div>
        <br/>
        <div id="section_body">
            <table>
                <tr>
                    <th class="col-lg-4">Keyword</th>
                    <td class="col-lg-8">
                        <div class="p-dictionary__filter__search">
                            <div class="col-md-6">
                                <div class="form-group row">

                                </div>
                            </div>
                            <input type="text" id="keyword" name="keyword" class="form-control p-dictionary__filter__search__text" value="">
                            <span class="txtRed">*JP text only.</span>
                            <br />
                            <select id="keyword2" class="p-dictionary__filter__search__list selectpicker">
                                <option value="">-</option>
                                <optgroup label="Main Princess">
                                    <option value="リィナ・プリンセラ" data-content="<img src='views/hime/images/ryna.png' style='width:50px;'>  <span style='display:inline-block; width:50px;'>  Ryna Princesa</span>">Ryna Princesa</option>;
                                    <option value="アカネ・ガーネット" data-content="<img src='views/hime/images/agane.png' style='width:50px;'>  <span style='display:inline-block; width:50px;'>  Agane Garnetto</span>">Agane Garnetto</option>;
                                    <option value="スフィア・エメラルド" data-content="<img src='views/hime/images/sphere.png' style='width:50px;'>  <span style='display:inline-block; width:50px;'>  Sphere Emarald</span>">Sphere Emarald</option>;
                                    <option value="クラリス・ラピス" data-content="<img src='views/hime/images/claris.png' style='width:50px;'>  <span style='display:inline-block; width:50px;'>  Claris Lapis</span>">Claris Lapis</option>;
                                </optgroup>
                                <optgroup label="God Ruin"></optgroup>
                                <optgroup label="God Ruin JP"></optgroup>
                                <optgroup label="Other">
                                    <option value="アスタロット" data-content="<img src='views/hime/images/astaraus.png' style='width:50px;'>  <span style='display:inline-block; width:50px;'>  Astaraus</span>">Astaraus</option>;
                                    <option value="ティンクル" data-content="<img src='views/hime/images/tinkle.png' style='width:50px;'>  <span style='display:inline-block; width:50px;'>  Tinkle</span>">Tinkle</option>;
                                </optgroup>
                            </select>


                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div id="hime-attr" class="panel-group">
                <?php
                foreach ($this->hime as $key => $arr) {
                    $i++;
                    $i_name = "group" . $i;
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-target="#collapse-<?= $i_name ?>" style='cursor: pointer;'>
                            <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse-<?= $i_name ?>"></a><?= $key ?></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse-<?= $i_name ?>">
                            <div class="panel-body">
                                <?php
                                foreach ($arr as $k => $v) {
                                    $j++;
                                    ?>
                                    <div class="<?=($key=="Attribute"?"col-md-2":"col-md-3")?>">
                                        <div class="radio radio-success">
                                            <!--<li>-->
                                            <input type="radio" name="<?= $i_name ?>" id="<?= $i_name . $j ?>" value="<?= $v ?>" >
                                            <label for="<?=$i_name . $j?>">&nbsp;<?= $k ?></label>                                
                                            <!--</li>-->
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <br>
            <button class="btn btn-default btn-lg myBtn" id="submitBt" >Search&nbsp;<span class="glyphicon glyphicon-search"></span></button>
            <button class="btn btn-danger myBtn" id="clearBt" ><span class="glyphicon glyphicon-refresh"></span></button>
            <br>   
        </div>
    </div>
</form>
