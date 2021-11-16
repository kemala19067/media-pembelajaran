@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html>

<head>
    <title>Kuis Pembelajaran TIK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/kuis.css">
    <link rel="stylesheet" href="js/Pertanyaan4.js">
    <link rel="stylesheet" href="js/appkuis.js">
</head>
<body>
    <div class="home-box custom-box">
	<center>
<img src="data:image/jpeg;base64,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" alt="" width="520" height="350">
</center>

        <h2>KUIS 4</h2>
        <br></br>
        <h4>Intruksi:</h4>
        <p>Total pertanyaan: <span class="total-pertanyaan">10</span></p>
        <button type="button" class="btn" onclick="starQuiz()">Mulai</button>
        <button type="button" class="btn" style="background-color: red;"><a href="/topik" style="color: #FFF;text-decoration: none;">Kembali</a></button>
    </div>

    <div class="quiz-box custom-box hide">
        <div class="question-number">

        </div>
        <div class="question-text">

        </div>
        <div class="option-container">

        </div>
        <div class="next-question-btn">
            <button type="buttton" class="btn" onclick="next()">Selanjutnya</button>
            <button type="button" class="btn" onclick="window.location.href='/topik'">Keluar</button>
        </div>
        <div class="answer-indicator">

        </div>
    </div>

    <div class="result-box custom-box hide">
        <h1>Hasil Kuis</h1>
        <table>
            <tr>
                <td>Total Pertanyaan</td>
                <td><span class="total-question"></span></td>
            </tr>
            <tr>
                <td>Mengisi</td>
                <td><span class="total-attempt"></span></td>
            </tr>
            <tr>
                <td>Benar</td>
                <td><span class="total-correct"></span></td>
            </tr>
            <tr>
                <td>Salah</td>
                <td><span class="total-wrong"></span></td>
            </tr>
            <tr>
                <td>Presentase</td>
                <td><span class="total-percentage"></span></td>
            </tr>
            <tr>
                <td>Total Skor kamu</td>
                <td><span class="total-score"></span></td>
            </tr>
        </table>
        <button type="button" class="btn" onclick="tryAgainQuiz()">Coba Lagi</button>
        <button type="button" class="btn" onclick="window.location.href='/topik'">Kembali Ke Menu</button>
    </div>



<script src="/js/Pertanyaan4.js"></script>
<script src="/js/appkuis.js"></script>
</body>
</html>
@endsection
