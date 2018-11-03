<?php
	function prima($x, $y){
		echo PHP_EOL;
		$a = 0;
		$i = 0;
		$j = 0;
		while (true) {
			$b = 0;
			for ($c=1; $c <= $a; $c++) { 
				if ($a % $c == 0){
					$b++;
				}
			}
			if ($b == 2){
				echo $a.',';
				$i++;
				if ($i % $x == 0) {
					echo PHP_EOL;
					$j++;
				}
			}
			
			if ($y == $j){
				break;
			}
			$a++;
		}
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>3. Bilangan Prima</title>
  </head>
  <body>
    <div class="container" style="padding:100px">
			</form>
			<div class="row justify-content-md-center">
				<div class="col-md-6">
					<form>
						<div class="form-group">
							<label for="a">Kolom</label>
							<input type="text" class="form-control" id="a" placeholder="Masukkan Kolom" name="a">
						</div>
						<div class="form-group">
							<label for="b">Baris</label>
							<input type="text" class="form-control" id="b" placeholder="Masukkan Baris" name="b">
						</div>
						<button type="submit" class="btn btn-primary">Hitung</button>
						<?php
							if (!empty($_GET['a']) && !empty($_GET['b'])) {
						?>
						<div class="form-group">
							<label for="Hasil">Hasil :</label>
							<textarea class="form-control" id="Hasil" rows="<?php echo $_GET['b']+2;?>" wrap="hard">
							<?php echo prima($_GET['a'], $_GET['b']); ?>
							</textarea>
						</div>
						<?php } ?>	
					</form>
				</div>
			</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>