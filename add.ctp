<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>入力フォーム</title>
</head>
<?= $this->Html->css('style') ?><!--style.cssを設定-->
<body>
    <?php echo $this->Form->create("Inputform",array("url" => array("action" => "save"))); ?>
    <div class="wrapper"><!--まとめる-->
        <table class="table"><!--テーブル作成開始-->
        <tr>
            <th>教会名</th>
            <td><input type="text" name="churchname" style="width:700px" placeholder="教会名を入力してください"></td>
        </tr>
        <tr>
            <th>牧師名</th>
            <td><input type="text" name="pastor's name" style="width:700px" placeholder="牧師名を入力してください"></td>
        </tr>
        <tr>
            <th>フリガナ</th>
            <td><input type="text" name="phonetic" style="width:700px" placeholder="フリガナを入力してください"></td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td><input type="text" name="postal code" style="width:700px" placeholder="郵便番号を入力してください"></td>    
        </tr>
        <tr>
            <th>住所</th>        
            <td><input type="text" name="prefectures" style="width:700px" placeholder="都道府県を入力してください"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="text" name="city" style="width:700px" placeholder="市区町村を入力してください"></td>
        </tr>  
        <tr> 
            <th></th>
            <td><input type="text" name="address" style="width:700px" placeholder="番地以降を入力してください"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="text" name="condominiumname" style="width:700px" placeholder="マンション名を入力してください"></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><input type="text" name="phone number" style="width:700px" placeholder="電話番号を入力してください"></td>
        </tr>
        </table>
        <div class="btn">
            <?= $this->Form->submit('保存');?>
        </div>
    </div>
   
</body>
</html>
<?php
/**
 * /app/View/Hello/index.ctp
 */
?>
 
        <?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->end(); ?>