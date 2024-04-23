<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ PWEB 1</title>
    <link rel="stylesheet" href="kuis.css">
</head>
<body>
    <div class="calculator">
        <h1>Menghitung Luas dan Volume</h1>
        
        <div>
            <label><input type="checkbox"  id="balokCheckbox"> Balok</label>
            <label><input type="checkbox"  id="kubusCheckbox"> Kubus</label>
            <label><input type="checkbox"  id="tabungCheckbox"> Tabung</label>
        </div>
        
        <div id="balok" class="hidden">
            <h2>Volume Balok</h2>
            Panjang: <input type="number" id="panjangBalok"> cm<br>
            Lebar: <input type="number" id="lebarBalok"> cm<br>
            Tinggi: <input type="number" id="tinggiBalok"> cm<br>
            <button onclick="hitungBalok()">Hitung</button>
            Hasil: <span id="hasilBalok"></span> cm<sup>3</sup>
        </div>

        <div id="kubus" class="hidden">
            <h2>Volume Kubus</h2>
            Sisi: <input type="number" id="sisiKubus"> cm<br>
            <button onclick="hitungKubus()">Hitung</button>
            Hasil: <span id="hasilKubus"></span> cm<sup>3</sup>
        </div>

        <div id="tabung" class="hidden">
            <h2>Volume Tabung</h2>
            Jari-jari: <input type="number" id="jariTabung"> cm<br>
            Tinggi: <input type="number" id="tinggiTabung"> cm<br>
            <button onclick="hitungTabung()">Hitung</button>
            Hasil: <span id="hasilTabung"></span> cm<sup>3</sup>
        </div>

        <div id="luasBalok" class="hidden">
            <h2>Luas Permukaan Balok</h2>
            Panjang: <input type="number" id="panjangLuasBalok"> cm<br>
            Lebar: <input type="number" id="lebarLuasBalok"> cm<br>
            Tinggi: <input type="number" id="tinggiLuasBalok"> cm<br>
            <button onclick="hitungLuasBalok()">Hitung</button>
            Hasil: <span id="hasilLuasBalok"></span> cm<sup>2</sup>
        </div>

        <div id="luasKubus" class="hidden">
            <h2>Luas Permukaan Kubus</h2>
            Sisi: <input type="number" id="sisiLuasKubus"> cm<br>
            <button onclick="hitungLuasKubus()">Hitung</button>
            Hasil: <span id="hasilLuasKubus"></span> cm<sup>2</sup>
        </div>

        <div id="luasTabung" class="hidden">
            <h2>Luas Permukaan Tabung</h2>
            Jari-jari: <input type="number" id="jariLuasTabung"> cm<br>
            Tinggi: <input type="number" id="tinggiLuasTabung"> cm<br>
            <button onclick="hitungLuasTabung()">Hitung</button>
            Hasil: <span id="hasilLuasTabung"></span> cm<sup>2</sup>
        </div>
    </div>

    <script src="kuis.js"></script>
</body>
</html>
