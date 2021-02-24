<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>Exportar PDF</title>
    <style>
        .page-break {
            page-break-after: always;
        }
        .o-h{
            overflow: hidden;
        }
    </style>
</head>
<body >
    
        <section class="container">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ asset('vendor/adminlte/dist/img/Logo-gobierno-mexico.webp') }}" width="190px" height="160px" alt="">
                            <img src="{{ asset('vendor/adminlte/dist/img/logo-pemex.webp') }}" width="190px" height="130px" alt="">
                        </td>
                        <td>
                            <img src="{{ asset('vendor/adminlte/dist/img/mexico-2021-año-independencia.webp') }}" width="150px" height="160px" alt="" style="margin-left: 150px !important; margin-top: 10px !important;">
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <x-list-postulates-masive :listmodeluser="$candidatoReportPDF"></x-list-postulates-masive>

</body>
</html>