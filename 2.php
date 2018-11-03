<?php
// $data = "rismn_78";

function validateUname($data)
{
	$pisahUnderscore = explode('_', $data);
	$str5 = $pisahUnderscore[0];
	$int2 = $pisahUnderscore[1];

	if ((str_word_count($str5) == 1) and (strlen((string) trim($str5)) == 5) and ((strlen((int) trim($int2)) == 2))) {
		echo "<script>alert('Terverifikasi')</script>";
	} else {
		echo "<script>alert('Coba lagi')</script>";
	}
}
if (!empty($_GET['username'])){
	validateUname($_GET['username']);
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

    <title>2. Validasi username</title>
  </head>
  <body>
    <div class="container" style="padding:200px">
			</form>
			<div class="row justify-content-md-center">
				<div class="col-md-6">
					<form>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username">
						</div>
						<button type="submit" class="btn btn-primary">Validate</button>
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