<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coming SOON</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body,h1 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
    background-image: url('https://raw.githubusercontent.com/rivaldomrtd/rivaldomrtd/main/3.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
    }
    </style>
<body>

    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge">Valdoos</div>
        <div class="w3-display-topright w3-padding-large w3-xlarge">
            <button type="button" class="btn btn-success">
                <a style="color: white" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </button>

        </div>

    <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top">COMING SOON</h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%">
        <p class="w3-large w3-center">82 days left</p>
    </div>
    <div class="w3-display-bottomleft w3-padding-large">Powered by
        <a href="https://github.com/Vald00s" target="_blank">vald00s.org</a>
    </div>
    </div>

</body>
</html>
