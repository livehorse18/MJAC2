
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>麻雀点数計算</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>

</head>
<body>
        
    
    <div class="form-group">
        <label>あがり方</label>
        <div>
            <label class="radio-inline">
                <input type="radio" name="あがり方" value="RON">ロン
            </label>
            <label class="radio-inline">
                <input type="radio" name="あがり方" value="TSUMO">ツモ
            </label>   
        </div>

        <label>立直</label>
        <div>
            <label class="radio-inline">
                <input type="radio" name="立直" value="NONE">なし
            </label>
            <label class="radio-inline">
                <input type="radio" name="立直" value="RIICHI">立直
            </label>  
            <label class="radio-inline">
                <input type="radio" name="立直" value="DOUBLE-RIICHI">W立直
            </label>    
        </div>

        <label>一発</label>
        <div>
            <label class="radio-inline">
                <input type="radio" name="一発" value="なし">なし
            </label>
            <label class="radio-inline">
                <input type="radio" name="一発" value="あり">あり
            </label>   
        </div>
    </div>

    <form>
        ドラ<br>
        <input type="button" value="－" onClick="javascript:this.form.DORA.value--;">
        <input type="text" name="DORA" value="0">
        <input type="button" value="＋" onClick="javascript:this.form.DORA.value++;"> 
    </form>

    <form>
        本場<br>
        <input type="button" value="－" onClick="javascript:this.form.HONBA.value--;">
        <input type="text" name="HONBA" value="0">
        <input type="button" value="＋" onClick="javascript:this.form.HONBA.value++;"> 
    </form>

    <a href="index.html">戻る</a>

</body>
</html>