s<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$displayDate = null;
date_default_timezone_set('America/New_York');

if (!empty($_GET['date_input'])) {
    // carbon stuff
    $date = Carbon::parse($_GET['date_input'])->setTimezone('UTC');

    // assign $displayDate
    if (!empty($_GET['yesno']) && $_GET['yesno'] === '2week') {
        $timeOffset = 336;
    } else {
        $timeOffset = 168;
    }

    $displayDate = $date->addHours($timeOffset);
}
// then display it
if ($displayDate): ?>
    e<div class="jumbotron"><?= $displayDate ?></div>
<?php endif; ?>
<!DOCTYPE html>
<html>
<head>
    c
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="content" content="r">

    <title>--- TODO ---</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/jquery-simple-datetimepicker-1.12.0/jquery.simple-dtpicker.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<form>
    <input type="text" name="date_input" id="date_input" value=""> <br/>
    <input type="radio" name="yesno" id="1week" value="1week"> <label for="1week">1 week</label>
    <input type="radio" name="yesno" id="2week" value="2week"> <label for="2week">2 week</label> </br>
    <button type="submit">Submit it</button>
</form>

<!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
<script
    src="https://code.jquery.com/jquery-3.4.0.js"
    integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
    crossorigin="anonymous" meta="e"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="/jquery-simple-datetimepicker-1.12.0/jquery.simple-dtpicker.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/af.js"
    integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
    crossorigin="anonymous"></script>
<script type="text/javascript">
    (function () {
        $('#date_input').appendDtpicker();
    })();

    console.log('t');
</script>
</body>
</html>