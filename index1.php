<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>PHP Basit Crud Örneği</title>
  </head>
  <body>
  <?php
  include("baglan.php");
  if(isset($_POST["kaydet"]))
  {		
	$sozlesme_kabul=(isset($_POST['sozlesme_kabul']))?1:0;
	$sql = "INSERT INTO 
			`kisisel_bilgiler` (`id`, `ad`, `soyad`, `numara`, `eposta`, `cinsiyet`, `sehir`, `sozlesme_kabul`) 
			VALUES (NULL, '".$_POST['ad']."', '".$_POST['soyad']."', '".$_POST['numara']."', 
			'".$_POST['eposta']."', '".$_POST['cinsiyet']."', '".$_POST['sehir']."', '".$sozlesme_kabul."')";
 

// echo $sql."<hr>";
$baglanti->query($sql);
  }
  else if(isset($_POST["guncelle"]))
  {		
	$sozlesme_kabul=(isset($_POST['sozlesme_kabul']))?1:0;
	$sorgu = "UPDATE `kisisel_bilgiler` SET `ad` = '".$_POST['ad']."', `soyad` = '".$_POST['soyad']."', `numara` = '".$_POST['numara']."', 
	`eposta` = '".$_POST['eposta']."', `cinsiyet` = '".$_POST['cinsiyet']."', `sehir` = '".$_POST['sehir']."', `sozlesme_kabul` = '".$sozlesme_kabul."'
	WHERE `kisisel_bilgiler`.`id` = ".$_POST['kayit_no'].";";
 

// echo $sql."<hr>";
$baglanti->query($sorgu);
  }
  else if(isset($_POST["sil"]))
  {
	  $sorgu1="DELETE FROM `kisisel_bilgiler` WHERE `kisisel_bilgiler`.`id` = ".$_POST['kayit_no'];
	  $baglanti->query($sorgu1);
  }
   else if(isset($_POST["duzenle"]))
  {
	  $sorgu="SELECT * FROM `kisisel_bilgiler` WHERE `id` = ".$_POST['kayit_no'];
	  $sonuc= $baglanti->query($sorgu);
	  $kayit=$sonuc->fetch_assoc();
	  //var_dump($kayit);
	  
  }
  ?>
    <h1>PHP CRUD İSLEMLERİ</h1>

	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php
			if(!isset($_POST["duzenle"]))
				{
			
			?>
			<form action="" method="POST">
  <div class="form-group row">
    <label for="ad" class="col-sm-2 col-form-label">Ad</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="ad" name="ad">
    </div>
  </div>
  
   <div class="form-group row">
    <label for="soyad" class="col-sm-2 col-form-label">Soyad</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="soyad" name="soyad">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="soyad" class="col-sm-2 col-form-label">Numara</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="numara" name="numara">
    </div>
  </div>
  
   <div class="form-group row">
    <label for="eposta" class="col-sm-2 col-form-label">Eposta</label>
	<div class="col-sm-10">
    <input type="email" class="form-control" id="eposta" name="eposta">
  </div>
  </div>
     <div class="form-group row">
		<label for="cinsiyet" class="col-sm-2 col-form-label">Cinsiyet</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet" value="kadin" >
  <label class="form-check-label" for="exampleRadios1">
    Kadın
  </label>
</div>&nbsp &nbsp &nbsp
<div class="form-check">
  <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet" value="erkek" >
  <label class="form-check-label" for="exampleRadios1">
    Erkek
  </label>
</div>
</div>
  <div class="form-group row">
    <label for="eposta" class="col-sm-2 col-form-label">Şehir</label>
	<div class="col-sm-10">
    <select id="inputState" class="form-control" name="sehir">
        <option selected>Balikesir</option>
        <option>Kocaeli</option>
        <option>İstanbul</option>
      </select>
  </div>
  </div>
  
  <div class="form-group row">
    <label for="eposta" class="col-sm-2 col-form-label">Eposta</label>
	<div class="col-sm-10">
    <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1" name="sozlesme_kabul">
  <label class="custom-control-label" for="customCheck1">Kabul Ediyorum</label>
</div>
  </div>
  </div>
  
   <div class="form-group row">
    <label for="eposta" class="col-sm-2 col-form-label"></label>
	<div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="kaydet" value="Kaydet">Kaydet</button> 
	<button type="reset" class="btn btn-danger" name="reset" value="reset">Temizle</button>
  </div>
  </div>
  
</form>

				<?php


				}
				else
				{	

					
					?>
					
					

		<form action="" method="POST">
  <div class="form-group row">
    <label for="ad" class="col-sm-2 col-form-label">Ad</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="ad" name="ad" value="<?=$kayit["ad"]?>">
    </div>
  </div>
  
   <div class="form-group row">
    <label for="soyad" class="col-sm-2 col-form-label">Soyad</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="soyad" name="soyad" value="<?=$kayit["soyad"]?>">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="soyad" class="col-sm-2 col-form-label">Numara</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="numara" name="numara" value="<?=$kayit["numara"]?>">
    </div>
  </div>
  
   <div class="form-group row">
    <label for="eposta" class="col-sm-2 col-form-label">Eposta</label>
	<div class="col-sm-10">
    <input type="email" class="form-control" id="eposta" name="eposta" value="<?=$kayit["eposta"]?>">
  </div>
  </div>
     <div class="form-group row">
		<label for="cinsiyet" class="col-sm-2 col-form-label">Cinsiyet</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet" value="kadin"
  <?=($kayit["cinsiyet"]=="kadin")?"checked":""?>
  >
  <label class="form-check-label" for="exampleRadios1">
    Kadın
  </label>
</div>&nbsp &nbsp &nbsp
<div class="form-check">
  <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet" value="erkek" 
  <?=($kayit["cinsiyet"]=="erkek")?"checked":""?>
  >
  <label class="form-check-label" for="exampleRadios1">
    Erkek
  </label>
</div>
</div>
  <div class="form-group row">
    <label for="eposta" class="col-sm-2 col-form-label">Şehir</label>
	<div class="col-sm-10">
    <select id="inputState" class="form-control" name="sehir">
        <option value="balikesir" <?=($kayit["sehir"]=="balikesir")?"selected":""?>>Balikesir</option>
        <option value="kocaeli" <?=($kayit["sehir"]=="kocaeli")?"selected":""?>>Kocaeli</option>
        <option value="istanbul" <?=($kayit["sehir"]=="istanbul")?"selected":""?>>İstanbul</option>
      </select>
  </div>
  </div>
  
  <div class="form-group row">
    <label for="eposta" class="col-sm-2 col-form-label">Eposta</label>
	<div class="col-sm-10">
    <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1" name="sozlesme_kabul"
  <?=($kayit["sozlesme_kabul"]=="1")?"checked":""?>
  >
  <label class="custom-control-label" for="customCheck1">Kabul Ediyorum</label>
</div>
  </div>
  </div>
  
   <div class="form-group row">
    <label for="eposta" class="col-sm-2 col-form-label"></label>
	<div class="col-sm-10">
	<input type="hidden" name="kayit_no" value="<?=$kayit['id']?>">
    <button type="submit" class="btn btn-warning" name="guncelle" value="guncelle">Güncelle</button> 
	<button type="reset" class="btn btn-danger" name="temizle" value="temizle">Temizle</button>
  </div>
  </div>
  
</form>

<?php
} 
?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Ad</th>
						  <th scope="col">Soyad</th>
						  <th scope="col">Numara</th>
						  <th scope="col">E-posta</th>
						  <th scope="col">Cinsiyet</th>
						  <th scope="col">Şehir</th>
						  <th scope="col">Sözleşme Durumu</th>
						  <th scope="col">işlem</th>
						</tr>
				    </thead>
				    <tbody>
					<?php
					$sorgu="SELECT * FROM `kisisel_bilgiler`";
					$sonuc= $baglanti->query($sorgu);
					$i=0;
					while($kayit=$sonuc->fetch_assoc())
					{
						$i++;
					?>
						<tr>
						  <th scope="row"><?=$i?></th>
						  <td><?=$kayit["ad"]?></td>
						  <td><?=$kayit["soyad"]?></td>
						  <td><?=$kayit["numara"]?></td>
						  <td><?=$kayit["eposta"]?></td>
						  <td><?=$kayit["cinsiyet"]?></td>
						  <td><?=$kayit["sehir"]?></td>
						  <td><?=($kayit["sozlesme_kabul"])?"Kabul":"Red"?></td>
						  <td>
							<form action="" method="post">
								<input type="hidden" name="kayit_no" value="<?=$kayit['id']?>">
						  <button type="submit" class="btn btn-success" name="duzenle" value="duzenle" >düzenle</button> 
						  <button type="submit" class="btn btn-danger" name="sil" value="sil" >sil</button> 
						  </form>
						  </div>
						  </td>
						</tr>
					<?php
					}
					?>
					</tbody>	
				</table>
			</div>
		</div>	
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>