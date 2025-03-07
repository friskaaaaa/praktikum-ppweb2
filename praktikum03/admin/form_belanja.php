<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2>Belanja Online</h2>
<form action="form_belanja.php" method="post">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">Daftar Harga</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : 5.400.000</li>
                    <li class="list-group-item">KULKAS : 8.100.000</li>
                    <li class="list-group-item">MESIN CUCI : 7.800.000</li>
                </ul>
                <div class="card-footer bg-primary text-white text-center">Harga Dapat Berubah Setiap Saat</div>
            </div>
        </div>
    </div>

    <?php
$customer = "";
$produk = "";
$jumlah = "";
$total_belanja = 0;

$harga_produk = [
    "tv" => 5400000,
    "kulkas" => 8100000,
    "mesin_cuci" => 7800000
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST["customer"];
    $produk = strtolower($_POST["produk"]); 
    $jumlah = (int)$_POST["jumlah"];
    
    if (isset($harga_produk[$produk]) && $jumlah > 0) {
        $total_belanja = $harga_produk[$produk] * $jumlah;
    }
}
?>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="mt-4 p-3 border">
            <p><strong>Nama Customer :</strong> <?= htmlspecialchars($customer) ?></p>
            <p><strong>Produk Pilihan :</strong> <?= htmlspecialchars($produk) ?></p>
            <p><strong>Jumlah Beli :</strong> <?= htmlspecialchars($jumlah) ?></p>
            <p><strong>Total Belanja :</strong> Rp. <?= number_format($total_belanja, 0, ',', '.') ?>,-</p>
        </div>
    <?php endif; ?>
</body>
</html>