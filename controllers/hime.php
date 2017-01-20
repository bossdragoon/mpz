<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Administrator
 */
class Hime extends Controller {

    public $hime = []; //array

    public function __construct() {
        parent::__construct();

        $this->view->js = array('hime/js/default.js'
            , '../public/bootstrap-tagsinput/bootstrap-tagsinput.min.js'
        );
        $this->view->css = array('hime/css/default.css'
            , '../public/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css'
            , '../public/awesome-bootstrap-checkbox/Font-Awesome/css/font-awesome.min.css'
            , '../public/bootstrap-tagsinput/bootstrap-tagsinput.css'
        );

        $this->initializeData();
    }

    public function index() {

        $this->view->hime = $this->hime;

        $this->view->rander('hime/index');
    }

    private function initializeData() {
        $this->hime = [
            "Attribute" => $this->getAttributeData(),
            "Rarity" => $this->getRarityData(),
            "Princess Magic: Attack" => $this->getMAtkData(),
            "Princess magic: Recovery Support" => $this->getMRData(),
            "Leader Skills" => $this->getLsData()
        ];
    }

    private function getAttributeData() {
        $arr = [
            "light" => "光",
            "darkness" => "闇",
            "fire" => "火",
            "water" => "水",
            "Wind" => "風"
        ];
        return $arr;
    }

    private function getRarityData() {
        $arr = [
            "UR" => "UR",
            "UR +" => "UR+",
            "UR ++" => "UR++",
            "UR + 3 ~" => "UR+3~",
            "UR (Awaken)" => "UR++(覚醒)",
            "UR (Awaken)(2)" => "UR++(覚醒）",
            "SR" => "SR",
            "SR +" => "SR+",
            "SR ++" => "SR++",
            "HR" => "HR",
            "HR +" => "HR+",
            "HR ++" => "HR++",
            "R" => "R",
            "R +" => "R+",
            "R ++" => "R++",
            "N" => "N",
            "N +" => "N+",
        ];
        return $arr;
    }

    private function getLsData() {
        $arr = [
            "Attack power up" => "攻撃力アップ",
            "Combo damage up" => "コンボダメージアップ",
            "Banana invalid" => "バナナ無効",
            "HP up" => "HPアップ",
            "Damage reduction" => "ダメージ軽減",
            "Thorns invalid" => "トゲ無効",
            "Princess magic actuation possible" => "姫魔法発動可能",
            "Extension attack time" => "攻撃時間延長",
            "recovery" => "回復",
            "Princess magic shortening" => "姫魔法短縮",
            "Offensive power up and attack time extension" => "攻撃力アップ&amp;攻撃時間延長",
            "Offensive power up &amp; HP up" => "攻撃力アップ&amp;HPアップ",
            "critical" => "クリティカル",
            "HP up &amp; banana invalid" => "HPアップ&amp;バナナ無効",
            "Other" => "その他",
        ];
        return $arr;
    }

    private function getMAtkData() {
        $arr = [
            "Alter Ego" => "分身",
            "Additional damage" => "追加ダメージ",
            "Attack power up" => "攻撃力アップ",
            "Enemy through" => "敵貫通",
            "speed up" => "スピードアップ",
            "critical" => "クリティカル",
            "The entire attack" => "全体攻撃",
            "Extension attack time" => "攻撃時間延長",
            "Extension speed up and attack time" => "スピードアップ＆攻撃時間延長",
            "Hits up" => "ヒット数アップ",
            "Giant Size" => "巨大化",
            "Mini Size" => "ミニ化",
            "Speed UP + Attack UP" => "スピードアップ＆攻撃力アップ",
            "Penetration and attack time extension" => "貫通＆攻撃時間延長",
            "Other" => "その他",
        ];
        return $arr;
    }

    private function getMRData() {
        $arr = [
            "recovery" => "回復",
            "Princess magic turn shortening" => "姫魔法ターン短縮",
            "Damage reduction" => "ダメージ軽減",
            "Combo continues" => "コンボ継続",
            "Attack after recovery" => "攻撃後回復",
            "Recovery and the entire attack" => "回復&amp;全体攻撃",
            "barrier" => "バリア",
            "Recovery + barrier" => "回復&amp;バリア",
            "Damage + all recovery" => "ダメージ&amp;全回復",
            "Alter Ego &amp; recovery" => "分身&amp;回復",
            "Alter Ego" => "分身",
            "Enemy attack invalid" => "敵攻撃無効",
            "The entire attack and damage mitigation" => "全体攻撃&amp;ダメージ軽減",
            "Attack power up and enemy attack invalid" => "攻撃力アップ&amp;敵攻撃無効",
            "Other" => "その他",            
        ];
        return $arr;
    }
    
    public function test($param) {
        return $param;
    }

}
