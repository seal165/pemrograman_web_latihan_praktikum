<!-- <!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
	$txt="Hello world!";
	$x=5;
	$y=10.5;
?>

</body>
</html> -->

<!-- <?php
	echo"<h2>PHPisFun!</h2>";
	echo"Helloworld!<br>";
	echo"I'm_about_to_learn_PHP!<br>";
	echo"This", "string ", "was ", "made ", "with multiple parameters.";
?> -->

<!-- <?php
$t = date("H");

if ($t < "10") {
	echo "Have a good morning!";
} elseif ($t < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}
?> -->

<!-- <?php
$favcolor = "red";

switch ($favcolor) {
	case "red":
		echo "Your favorite color is red!";
		break;
	case "blue":
		echo "Your favorite color is blue!";
		break;
	case "green":
		echo "Your favorite color is green!";
		break;
	default:
		echo "Your favorite color is neither red, blue, nor green!";
}
?> -->

<!-- <?php 
$x = 1; 

while($x <= 5) {
	echo "The number is: $x <br>";
	$x++;
} 
?> -->

<!-- <?php 
$x = 1; 

do {
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);
?> -->

<!-- <?php 
for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
} 
?> -->

<!-- <?php
function writeMsg() {
	echo "Hello world!";
}
writeMsg(); 
?> -->

<!-- <?php
function sum(int $a, int $b): int {
    return $a + $b;
}

echo sum(5, 3);
?> -->

<!-- <?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> -->

<!-- <?php
$cars = ["Volvo", "BMW", "Toyota"];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> -->

<!-- <?php
$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
echo $cars[0][0] . " : Jumlah " . $cars[0][1] . ", Terjual " . $cars[0][2] . ".";
?> -->

<!-- <?php
$cars = [
	["Volvo",22,18],
	["BMW",15,13],
	["Saab",5,2],
	["Land Rover",17,15]
];
echo $cars[1][0] . " : Jumlah " . $cars[1][1] . ", Terjual " . $cars[1][2] . ".";
?> -->

<!-- <?php
  $cars = ["Volvo", "BMW", "Toyota"];
  foreach ($cars as $car) {
    echo $car . "<br>";
  }
?> -->

<!-- <?php 
// Menggunakan null safe operator
$user = null;
echo $user?->name ?? "User not found"; 

// Tanpa menggunakan null safe operator
if ($user !== null) {
    echo $user->name;
} else {
    echo "User not found";
}
?> -->

<!-- <?php
setcookie("user", "Maya", time() + 86400, "/");
?>

<html>
<body>

<?php
if (isset($_COOKIE["user"])) {
    echo "Nama pengguna: " . $_COOKIE["user"];
} else {
    echo "Cookie belum tersedia
. Refresh halaman!";
}
?>

</body>
</html> -->

<!-- <?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan Produk</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        background-color: #dde8ec;
        font-family: "Segoe UI", Arial, sans-serif;
        color: #14263a;
      }
      h1 {
        margin-bottom: 30px;
      }
      .container {
        display: flex;
        flex-direction: column;
        background-color: white;
        width: 35%;
        margin: 40px auto;
        padding: 20px;
        justify-content: center;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(20, 38, 58, 0.15);
      }
      .input {
        display: flex;
        flex-direction: column;
        margin: 10px 0;
      }
      label {
        margin-bottom: 5px;
        font-weight: 600;
      }
      input {
        width: 100%;
        padding: 8px;
        border: 2px solid #c3d1d9;
        border-radius: 8px;
      }
      input:focus {
        outline: none;
        border-color: #2457f5;
      }
      .button {
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        background: #14263a;
        border-radius: 8px;
        cursor: pointer;
        border: none;
        color: white;
        font-weight: bold;
      }
      .button:hover {
        background-color: #2457f5;
      }
      #hasil,
      #hasil-nilai {
        margin-top: 15px;
        background: #f4f8fa;
        padding: 10px;
        border: 2px dashed #c3d1d9;
        border-radius: 8px;
        text-align: left;
      }
      #hasil b,
      #hasil-nilai b {
        background: #ffd84d;
        padding: 2px 6px;
      }
    </style>
  </head>

  <body>
    <center>
      <h1>Form Pemesanan Produk</h1>
      <div class="container">
        <form id="form-pemesanan" action="" method="POST">
          <div class="input">
            <label for="produk">Nama Produk</label>
            <input type="text" name="produk" id="produk" required />
          </div>

          <div class="input">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" min="1" required />
          </div>

          <div class="input">
            <label for="harga">Harga Satuan (Rp)</label>
            <input type="number" name="harga" id="harga" min="0" required />
          </div>

          <input type="submit" class="button" name="btn_produk" value="Hitung Total" />
          <input type="reset" class="button" value="Hapus" />

          <div id="hasil">
            <?php
              if (isset($_POST['btn_produk'])) {
                  $produk = trim($_POST['produk'] ?? '');
                  $jumlah = $_POST['jumlah'] ?? '';
                  $harga = $_POST['harga'] ?? '';

                  if ($produk === '' || !is_numeric($jumlah) || !is_numeric($harga) || $jumlah < 1 || $harga < 0) {
                      echo "Mohon isi nama produk, jumlah minimal 1, dan harga yang valid.";
                  } else {
                      $total = $jumlah * $harga;
                      echo "Nama Produk: " . htmlspecialchars($produk, ENT_QUOTES, 'UTF-8') . "<br>";
                      echo "Jumlah: " . htmlspecialchars((string) $jumlah, ENT_QUOTES, 'UTF-8') . "<br>";
                      echo "Harga Satuan: Rp " . number_format((float) $harga, 0, ',', '.') . "<br>";
                      echo "Total Harga: <b>Rp " . number_format((float) $total, 0, ',', '.') . "</b>";
                  }
              } else {
                  echo "Hasil perhitungan akan tampil di sini.";
              }
            ?>
          </div>
        </form>
      </div>
    </center>
    <script>
      document.getElementById("form-pemesanan").addEventListener("reset", function () {
        document.getElementById("hasil").textContent = "";
      });
    </script>
  </body>
</html>


COBA LATIHAN 2 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nilai Mahasiswa</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        background-color: #dde8ec;
        font-family: "Segoe UI", Arial, sans-serif;
        color: #14263a;
      }
      h1 {
        margin-bottom: 30px;
      }
      .container {
        display: flex;
        flex-direction: column;
        background-color: white;
        width: 35%;
        margin: 40px auto;
        padding: 20px;
        justify-content: center;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(20, 38, 58, 0.15);
      }
      .input {
        display: flex;
        flex-direction: column;
        margin: 10px 0;
      }
      label {
        margin-bottom: 5px;
        font-weight: 600;
      }
      input {
        width: 100%;
        padding: 8px;
        border: 2px solid #c3d1d9;
        border-radius: 8px;
      }
      input:focus {
        outline: none;
        border-color: #2457f5;
      }
      .button {
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        background: #14263a;
        border-radius: 8px;
        cursor: pointer;
        border: none;
        color: white;
        font-weight: bold;
      }
      .button:hover {
        background-color: #2457f5;
      }
      #hasil,
      #hasil-nilai {
        margin-top: 15px;
        background: #f4f8fa;
        padding: 10px;
        border: 2px dashed #c3d1d9;
        border-radius: 8px;
        text-align: left;
      }
      #hasil b,
      #hasil-nilai b {
        background: #ffd84d;
        padding: 2px 6px;
      }
    </style>
  </head>

  <body>
    <center>
      <h1>Form Nilai Mahasiswa</h1>
      <div class="container">
        <form id="form-nilai" action="" method="POST">
          <div class="input">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" name="nama" id="nama" required />
          </div>

          <div class="input">
            <label for="tugas">Nilai Tugas (30%)</label>
            <input type="number" name="tugas" id="tugas" min="0" max="100" required />
          </div>

          <div class="input">
            <label for="uts">Nilai UTS (30%)</label>
            <input type="number" name="uts" id="uts" min="0" max="100" required />
          </div>

          <div class="input">
            <label for="uas">Nilai UAS (40%)</label>
            <input type="number" name="uas" id="uas" min="0" max="100" required />
          </div>

          <input type="submit" class="button" name="btn_nilai" value="Hitung Nilai" />
          <input type="reset" class="button" value="Hapus" />

          <div id="hasil-nilai">
            <?php
              if (isset($_POST['btn_nilai'])) {
                  $nama = trim($_POST['nama'] ?? '');
                  $tugas = $_POST['tugas'] ?? '';
                  $uts = $_POST['uts'] ?? '';
                  $uas = $_POST['uas'] ?? '';

                  $nilaiValid = is_numeric($tugas) && is_numeric($uts) && is_numeric($uas)
                      && $tugas >= 0 && $tugas <= 100
                      && $uts >= 0 && $uts <= 100
                      && $uas >= 0 && $uas <= 100;

                  if ($nama === '' || !$nilaiValid) {
                      echo "Mohon isi nama dan nilai antara 0 sampai 100.";
                  } else {
                      $akhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);
                      if ($akhir >= 85) {
                          $grade = 'A';
                      } elseif ($akhir >= 75) {
                          $grade = 'B';
                      } elseif ($akhir >= 60) {
                          $grade = 'C';
                      } elseif ($akhir >= 50) {
                          $grade = 'D';
                      } else {
                          $grade = 'E';
                      }
                      $status = $akhir >= 60 ? 'Lulus' : 'Tidak Lulus';

                      echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') . "<br>";
                      echo "Nilai Akhir: " . number_format($akhir, 1, ',', '.') . "<br>";
                      echo "Grade: " . $grade . "<br>";
                      echo "Status: <b>" . $status . "</b>";
                  }
              } else {
                  echo "Hasil perhitungan akan tampil di sini.";
              }
            ?>
          </div>
        </form>
      </div>
    </center>
    <script>
      document.getElementById("form-nilai").addEventListener("reset", function () {
        document.getElementById("hasil-nilai").textContent = "";
      });
    </script>
  </body>
</html>
