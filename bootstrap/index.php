<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Обработка формы методом POST</title>
</head>


<body>
    <div class="container">
        <div class="row">
            <h1>Обработка формы методом POST</h1>
                <form action="function.php" method="post">
                    <div class="mb-3">
                        <label for="fname" class="form-label">Как вас зовут?</label>
                        <input type="text" required="require" class="form-control" id="fname" placeholder="Напишите ваше имя" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="fname" class="form-label">Введите Email</label>
                        <input type="email"   class="form-control" id="fmail" placeholder="Введите ваш Email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="fmessage" class="form-label">Напишите ваше сообщение</label>
                            <textarea class="form-control" required="require" id="fmessage" rows="3" name="message"></textarea>
                        </div>
                    <button type="submit" class="btn btn-primary" name="submit">Отправить форму</button>
                </form>  
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>