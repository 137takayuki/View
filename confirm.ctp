<style type="text/css">
/*
ul li {
    display: inline;
}
*/
#contents {
    text-align: center;
}
</style>
<div id="contents">
<h3>登録確認内容</h3>
    <table align="center">
        <tbody>
        <?php
        /**
         * /app/View/Hello/other.ctp
         */
        //「post」 という名前の変数がセットされていたら値を表示
        $title = array(
            "churchname" => "教会名",
            "pastor's_name" => "牧師名",
            "phonetic" => "フリガナ",
            "postal_code" => "郵便番号",
            "prefectures" => "住所",
            "city" => "",
            "address" => "",
            "condominiumname" => "",
            "phone_number" => "電話番号",
        );
        if(isset($post)) {
            foreach ($post as $key => $value) {
                if (!empty($value)) {
                    echo "<tr>";
                    echo "<th>" . $title[$key] . ": </th><td>" . $value . "</td>";
                    echo "</tr>";
                }
            }
        }
        ?>
        </tbody>
    </table>
    <div class="save">
        <input type="submit" value="保存">
    </div>
</div>
