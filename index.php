<!DOCTYPE html>
<html lang="en">
<head>

<!-- meta -->
<meta charset="utf-8" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="How people define digital humanities." />
<meta name="author" content="Jason A. Heppler" />
<meta name="keywords" content="digital history, digital humanities" />
<meta name="copyright" content="Copyright (c) 2012 Jason Hepler" />
<title>What Is Digital Humanities?</title>

    <style type="text/css">
        body {
            color: #434343;
            background: #fff;
            font-family: Helvetica, sans;
            font-size: 12px;
            line-height: 16px;
            margin: 40px;
        }

        h1 {
            font-size: 72px;
            letter-spacing: -0.05em;
            line-height: 0;
            font-weight: 700;
        }

        #content {
            width: 800px;
            padding-top: 20px;
        }

        p, li {
            font-size: 16px;
            line-height: 22px;
        }

        p#notes {
            font-size: 13px;
            line-height: 17px;
            color: #666;
        }

        p.quote {
            font-size: 25px;
            line-height: 28px;
        }

        a {
            text-decoration: none;
            border-bottom: 1px solid #ccc;
            color: #369;
        }

        a:hover {
            color: #b5190e;
        }
    </style>

</head>
<body>

<h1>What Is Digital Humanities?</h1>

<div id="content">

<?php

define( 'HOSTNAME', 'localhost' );
define( 'USERNAME', '' );
define( 'PASSWORD', '' );
define( 'DATABASE_NAME', '' );

$db = mysql_connect(HOSTNAME, USERNAME, PASSWORD) or die ("Cannot connect.");

mysql_select_db(DATABASE_NAME);

$query = "SELECT quote, name, date FROM quotes ORDER BY RAND() LIMIT 1";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result)) {
    echo "<p class=\"quote\">" , ($row['quote']) , "</p> \n <p class=\"source\">&#8212; " , ($row['name']) , "</p>";
}

mysql_free_result($result);
mysql_close();
?>

<p id="notes"><strong>NB</strong>: Refresh the page to get a new definition. Quotes were pulled from participants from the <a href="http://twitter.com/DayofDH">Day of DH</a> between 2009-2012. As of December 2012, the database contains over 500 rows and randomly selects a quote each time the page is loaded. If you want to do something cool with the data, I am providing a download for the CSV I compiled <a href="http://jasonheppler.org/data/dayofquotes_full.csv">here</a>.</p>

<p>Made by <a href="http://jasonheppler.org">Jason Heppler</a>. Problems? Questions? I'm <a href="http://twitter.com/jaheppler">@jaheppler</a> on Twitter.</p>

</div>

</body>
</html>
