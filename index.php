<!DOCTYPE html>

<?php
include "classe.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Conversor de Números</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="bootstrap.min.css" />
	<link rel="stylesheet" href="estilo.css">
</head>

<body>
<section class="container">	
<div class="card mt-3">
    <div class="card-header h4">Conversor de Números Inteiros e Romanos</div>
	<div class="card-body">
    <form action="index.php" method="post">
	<div class="form-group row">

        <label for="inteiro" class="col-sm-2 col-form-label"><strong>Número Inteiro </strong></label>
		<div class="col-sm-10">

        <input type="text" id="inteiro" name="inteiro" required placeholder="Insira aqui o número inteiro" value="<?php echo($_POST['inteiro']) ? ($_POST['inteiro']) : ''; ?>">
        <br> </div>
        
        <label for="roman" class="col-sm-2 col-form-label"><strong>Número Romano</label>

		<div class="col-sm-10">

        <input type="text" id="roman" name="roman" required placeholder="Insira aqui o algarismo romano" value="<?php echo($_POST['roman']) ? ($_POST['roman']) : ''; ?>"><br> <br> </div>
        

		<div class="col-sm-10">
        <input type="submit" class="form-control" name="convert" value="Converter">
</div>
    </form>

    <?php
	
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $converter = new Converter();
		?>
<br><br>
		<div>

					<label for=""> 
						<strong>Resultado:</strong>
					</label>
					
<?php
        if (!empty($_POST['inteiro'])) {
            $inteiro = intval($_POST['inteiro']);
            $roman = $converter->inteiroPRomano($inteiro);
            echo "<p class='text-success'>$inteiro = $roman</p>";

        }
        
        ?>

<?php
        if (!empty($_POST['roman'])) {
            $roman = strtoupper($_POST['roman']);
            $inteiro = $converter->RomanoPinteiro($roman);
            echo "<p class='text-success'>$roman = $inteiro</p>";
        }
    }
    ?>
	</div>
	</div>
	</div>
	</section>
</body>

</html>