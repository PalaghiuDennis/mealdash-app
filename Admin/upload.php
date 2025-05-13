<?php
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_conn.php";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 12500000) {
			$em = "Fisierul incarcat este prea mare!";
			header("Location: add_products.php?error=$em");
		} else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png");

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
				$img_upload_path = 'uploads/' . $new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$nume = $_POST['nume'];
				$descriere = $_POST['descriere'];
				$categorie = $_POST['categorie'];
				$pret = $_POST['pret'];

				$sql = "INSERT INTO mancare (imagine, nume, descriere, categorie, pret) 
						VALUES ('$new_img_name', '$nume', '$descriere', '$categorie', '$pret')";
				mysqli_query($connection, $sql);
				$em = "Datele au fost adăugate cu succes!";
				header("Location: add_products.php?error=$em");

			} else {
				$em = "Formatul imaginii este incorect!";
				header("Location: add_products.php?error=$em");
			}
		}
	} else {
		$em = "Eroare necunoscută, vă rugăm să încercați din nou!";
		header("Location: add_products.php?error=$em");
	}
} else {
	header("Location: add_products.php");
}
?>