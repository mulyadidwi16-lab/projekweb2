<?php
// Simple Password Hash Generator
if(isset($_POST['password'])){
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Generate Password Hash</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width:400px;">
<h4 class="text-center mb-3">Password Hash Generator</h4>

<form method="POST">
<input type="text" name="password" class="form-control mb-3" placeholder="Masukkan Password" required>
<button class="btn btn-primary w-100">Generate Hash</button>
</form>

<?php if(isset($hash)): ?>
<hr>
<label class="fw-bold">Hasil Hash:</label>
<textarea class="form-control" rows="4"><?= $hash ?></textarea>
<?php endif; ?>

</div>

</body>
</html>
