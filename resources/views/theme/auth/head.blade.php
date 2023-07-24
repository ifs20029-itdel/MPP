<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{config('app.name') . ': ' .$title ?? config('app.name')}}</title>
	<meta charset="utf-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> 
	<link href="{{ asset('metro/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metro/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> 
</head> 