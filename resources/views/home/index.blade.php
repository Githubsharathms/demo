<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <label class="logo">BlogWeb</label>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>

                <li>
                    <a href="">Contact</a>
                </li>

                <li>
                    <a href="{{ route('register') }}" class="btn-success">Register</a>
                </li>

                <li>
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                </li>
            </ul>
        </nav>
        <div class="dev_deg">
            <labe>About us</labe>
            <p>Bootstrap (currently v3.3.7) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
            <img src="1.jpg" height="300px" width="100%">
        </div>

    </body>
</html>
