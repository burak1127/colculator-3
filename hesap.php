<!DOCTYPE html>

    <form method="GET"> 
        <h2> Hesap Makinesi</h2>
        
        <textarea name="islem" cols="30" rows="5"></textarea><br>
        <input type="submit" value="Hesapla!"> 
    </form>
    <?php
      if (isset($_GET['islem']))
        if(!preg_match('/[^0-9 %\-\*\/\+\(\)\||\&]/', $_GET['islem'])){ 
          $sonuc = "";
          try{
            eval('$sonuc = ' . $_GET['islem'] . ";"); 
            echo "<hr>Sonuç: " . $sonuc; 
          }catch(ParseError $e){
            echo "<hr>Lütfen geçerli matematik operatörü girin!"; 
          }
        }else{
          echo "<hr>Lütfen geçerli matematik operatörü girin!"; 
        }
      
    ?>
</body>
</html>