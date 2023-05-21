
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>2016-21 - sefa er</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>
  <?php
include ("baglan.php");
  if (isset ($_POST ["kaydet"]))
	{
		$ad_soyad = $_POST["ad"]." ".$_POST["soyad"];
		$sk=@($_POST["sk"]=="on"?1:0);
		$ifsa=@($_POST["ifsa"]=="on"?1:0);
		
		$sorgu="INSERT INTO `musteri` 
		(`idmusteri`, `ad_soyad`, `kod`, `telefon`, `adres`, `ilçe`,
		`il`, `sozlesme_kabul`, `ifsa_hakkı`, `odeme_yontemi`)
		VALUES 
		(NULL,
		'".$ad_soyad."',
		'".$_POST['kod']."',
		'".$_POST['tel']."',
		'".$_POST['adres']."',
		'".$_POST['ilce']."',
		'".$_POST['il']."',
		'$sk', '$ifsa', '".$_POST['pm']."');";
		
		$baglanti->query($sorgu);
	   
	}
  
  ?>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Sabuha SU</h2>
        <p class="lead">Sucu Takip Sistemi</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Kampanyalar</span>
            
          </h4>
          <ul class="list-group mb-3">
		  <?php
			$sonuc=$baglanti->query("select * from kampanya");
			if($sonuc ->num_rows>0)
			{
				while($kayit = $sonuc->fetch_assoc())
				{
				
			
		  ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?=kayit["slogan"]?></h6>
                <small class="text-muted"><?=kayit["icerik"]?> </small>
              </div>
              <span class="text-muted"><?=$kayit["fiyat"]?>₺</span>
            </li>
			<?php
				}
				
			}
			?>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-danger">
                <h6 class="my-0">Süresi Geçmiş</h6>
                <small>Kampanya Bilgisi Kırmızı Olacak</small>
              </div>
              <span class="text-danger">-$5</span>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="musteri@balikesir.edu.tr">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Kaydet</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Otomatik Su Siparişi İçin Müşteri Kaydı</h4>
          <form class="needs-validation" action="" method="post" >
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Adınız</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value=""  name="ad">
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName" name="soyad">Soyadınız</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value=""  name="soyad">
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Kod</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">#sab_</span>
                </div>
				<?php
				$sorgu ="SELECT kod FROM `musteri` ORDER BY `idmusteri` DESC LIMIT 1";
				$sonuc = mysqli_fetch_assoc ($baglanti->query($sorgu));
				$yeni_id = $sonuc["kod"]+1;
				?>
				
				
                <input type="text" class="form-control" id="username" placeholder="<?=$yeni_id?>" style="text-align:center" name ="kod">
  <div class="input-group-prepend">
                  <span class="input-group-text">_uha#</span>
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Telefon <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="email" placeholder="0 505 888 99 33" name="tel">

            </div>

            <div class="mb-3">
              <label for="address">Adres</label>
              <textarea class="form-control" id="address" placeholder="Çağış Kampüsü" name="adres"> </textarea>

            </div>

            <div class="row">
              <div class="col-md-5 mb-6">
                <label for="country">İlçe</label>
                <select class="custom-select d-block w-100" id="country" name="ilce">
                  <option value="">Choose...</option>
                  <option>Karesi</option>
                  <option>Altıeylül</option>
                </select>

				   </div>
				<div class="col-md-5 mb-6">
                <label for="country">İl</label>
                <select class="custom-select d-block w-100" id="country" name="il" >
                  <option value="">Choose...</option>
                  <option>Balıkesir</option>
                  <option>İstanbul</option>
                </select>

              </div>

         
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address" name="sk">
              <label class="custom-control-label" for="same-address">Sözleşmeyi kabul ediyorum...</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info" name="ifsa">
              <label class="custom-control-label" for="save-info">Tüm bilgilerimi ifşa edebilirsiniz...</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Ödeme Yöntemi</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="pm" type="radio" class="custom-control-input" checked  value="1">
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="pm" type="radio" class="custom-control-input"  value="2">
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="pm" type="radio" class="custom-control-input" value="3">
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
            </div>
           
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="kaydet">Bilgilerimi Kaydet</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 YarısıBurada Kodlama Merkezi</p>
        <ul class="list-inline">
        </ul>
      </footer>
    </div>

  </body>
</html>













