@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html>

<head>
    <title>Kuis 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/kuis.css">
    <link rel="stylesheet" href="js/Pertanyaan2.js">
    <link rel="stylesheet" href="js/appkuis.js">
</head>
<body>
    <div class="home-box custom-box">
	<center>
<img src="https://static.vecteezy.com/system/resources/previews/001/993/295/non_2x/online-test-and-exam-with-people-filling-answer-vector.jpg" alt="" width="520" height="350" alt="">
</center>

        <h2>KUIS 2</h2>
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



<script src="/js/Pertanyaan2.js"></script>
<script src="/js/appkuis.js"></script>
</body>
</html>
@endsection
