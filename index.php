<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css' integrity='sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==' crossorigin='anonymous' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>


<?php include __DIR__ . '/tamplate/header.php'; ?>


<body>


    <?php require __DIR__ . '/login/login.php'; ?>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js' integrity='sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js' integrity='sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.js' integrity='sha512-8XtSBQOB+R4dpcpQBpYC5Q7ti7y/MjIF0l/1ZiSd4xM04Dr052S/Py981Pzmwo2HrXCR2JhYE1MYR15aZGMnig==' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $('#submit-form-login').on('click', function() {
                $('#password').attr('type', 'password');
            });

            // Click event of the showPassword button
            $('#showSenha').on('click', function() {

                // Get the password field
                var passwordField = $('#password');

                // Get the current type of the password field will be password or text
                var passwordFieldType = passwordField.attr('type');

                // Check to see if the type is a password field
                if (passwordFieldType == 'password') {
                    // Change the password field to text
                    passwordField.attr('type', 'text');

                    // Change the Text on the show password button to Hide
                    $(this).val('Ocultar senha');
                } else {
                    // If the password field type is not a password field then set it to password
                    passwordField.attr('type', 'password');

                    // Change the value of the show password button to Show
                    $(this).val('Mostrar senha');
                }
            });
        });
    </script>
</body>


<?php require __DIR__ . '/tamplate/footer.php'; ?>


</html>