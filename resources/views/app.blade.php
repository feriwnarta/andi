<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("/assets/style.css") }}">
</head>
<body>



@yield("slot")


<footer class="footer app-footer fixed-bottom py-2" wire:ignore.self>
    <div id="buttonGroup" class="btn-group d-flex justify-content-around" role="group">
        <button id="home" type="button" class="btn d-flex flex-column align-items-center">
            <div class="selector-holder d-flex flex-column align-items-center">
                <i class="home-icon-inactive"
                   style="background-color: #9E9E9E"></i>
                <span style="color: #9E9E9E">Home</span>
            </div>
        </button>

        <button id="home" type="button" class="btn d-flex flex-column align-items-center"
                wire:click="navigateToEmployees">
            <div class="selector-holder d-flex flex-column align-items-center">
                <i class="monitoring-icon-inactive"
                   style="background-color: #9E9E9E"></i>
                <span style="color: #9E9E9E">Monitoring</span>
            </div>
        </button>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
</html>
