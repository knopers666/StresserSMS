{config_load file="lang_`$lang`.conf" section="head"}
<!DOCTYPE html>
<html lang="pl">
  <head>
	<!-- Meta Tagi -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{#desc#}">
	<meta name="keywords" content="{#keywords#}">
	<meta name="author" content="knopers">
	<title>{#title#}</title>

    <!-- Style -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link href="http://{$smarty.server.SERVER_NAME}/assets/css/main.css" rel="stylesheet">
	<link href="http://{$smarty.server.SERVER_NAME}/assets/img/favicon.ico" rel="icon" type="image/x-icon" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>