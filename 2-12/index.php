<form action="result.php" method="post">
    お名前：<input type="text" name="your_name" /><br>
    ご希望商品：<input type="radio" name="gift" value="Ａ賞" />Ａ賞
    <input type="radio" name="gift" value="Ｂ賞" />Ｂ賞
    <input type="radio" name="gift" value="Ｃ賞" />Ｃ賞<br>
    個数：<select name="number">
        <?php 
        for ($num=0;$num<=10;$num++) { 
            ?> <option value="<?php echo $num ?>"><?php echo $num; ?></option>
         <?php } ?>
        </select><br>
        <input type="submit" value="申込" />
</form>