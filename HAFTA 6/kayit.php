<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Kayıt Oluşturma</title>
  </head>
  <body>
	<?php
		include "baglan.php";
		if(isset($_POST["kaydet"]))
		{
			$sorgu="
				INSERT INTO `kullanici` 
					(`id`, `ad`, `soyad`, `numara`) 
				VALUES 
					(NULL, '".$_POST['ad']."', '".$_POST['soyad']."', '".$_POST['numara']."');
				";
			if($baglanti->query($sorgu))
				echo "Kayıt başarıyla oluşturuldu";
			else
				echo "Kayıt sırasında hata meydana geldi : ".$baglanti->error;
			
		}
		
		if(isset($_POST["degistir"]))
		{
			$sorgu = "UPDATE `kullanici` SET 
				`ad` = '".$_POST['ad']."', 
				`soyad` = '".$_POST['soyad']."', 
				`numara` = '".$_POST['numara']."' 
				WHERE 
					`kullanici`.`id` = ".$_POST['id'].";";
			if($baglanti->query($sorgu))
				echo "Kayıt başarıyla güncellendi";
			else
				echo "Kayıt sırasında hata meydana geldi : ".$baglanti->error;
			
		}
		
		if(isset($_POST["sil"]))
		{
			
			$sorgu="DELETE FROM `kullanici` WHERE `kullanici`.`id` = ".$_POST["silinecek"];
			
			if($baglanti->query($sorgu))
				echo "Kayıt başarıyla silindi";
			else
				echo "Kayıt silme sırasında hata meydana geldi : ".$baglanti->error;
			
		}
		
		if(isset($_POST["duzenle"]))
		{
			
			$sorgu="SELECT * FROM `kullanici` WHERE `id` = ".$_POST["silinecek"];
			
			if($kayit_nesne = $baglanti->query($sorgu))
			{
				$kayit = $kayit_nesne->fetch_array();
			}
			else
				echo "Kayıt silme sırasında hata meydana geldi : ".$baglanti->error;
			
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Kullanıcı Kayıt</h1>
				<hr>
			</div>
			
			<div class="col-md-12">
			<?php
				if(!isset($_POST["duzenle"])) 
				{
			?>
				<form action="" method="POST">
				  <div class="form-group">
					<label for="exampleInputEmail1">Kullanıcının Adı</label>
						<input type="text" class="form-control" name="ad">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Kullanıcının Soyadı</label>
						<input type="text" class="form-control" name="soyad">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Numarası</label>
						<input type="number" class="form-control" name="numara" min="0">
				  </div>
				  <button type="submit" class="btn btn-primary" name="kaydet">Kaydet</button>
				</form>
				<?php 
				}
				else
				{
					?>
					<form action="" method="POST">
					<input type="hidden" name="id" value="<?=$kayit["id"]?>">
				  <div class="form-group">
					<label for="exampleInputEmail1">Kullanıcının Adı</label>
						<input type="text" class="form-control" name="ad" value="<?=$kayit["ad"]?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Kullanıcının Soyadı</label>
						<input type="text" class="form-control" name="soyad" value="<?=$kayit["soyad"]?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Numarası</label>
						<input type="number" class="form-control" name="numara" min="0" value="<?=$kayit["numara"]?>">
				  </div>
				  <button type="submit" class="btn btn-primary" name="degistir">Değiştir</button>
				</form>
					<?php
				}
				?>
				<hr>
			</div>
			<div class="col-md-12">
	
<form action="" method="POST">	
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Numara</th>
      <th scope="col">Seç</th>
    </tr>
  </thead>
  <tbody>
	<?php
		$sorgu = "select * from kullanici";
		$kayitlar = $baglanti->query($sorgu);
		if($kayitlar->num_rows > 0)
		{	
			while($kayit = $kayitlar->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$kayit["id"]."</td>";
				echo "<td>".$kayit["ad"]."</td>";
				echo "<td>".$kayit["soyad"]."</td>";
				echo "<td>".$kayit["numara"]."</td>";
				?>
				<td>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="silinecek" value="<?=$kayit["id"]?>">
					</div>
				</td>
				<?php
				echo "</tr>"; 
			}	
		}
	?>
  </tbody>
</table>
<button type="submit" class="btn btn-success" name="duzenle">Düzenle</button>
<button type="submit" class="btn btn-danger" name="sil">Sil</button>


</form>
			</div>
		</div>
	</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>



















