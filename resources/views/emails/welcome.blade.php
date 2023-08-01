<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
    @vite('resources/css/app.css')
</head>
<body>
  {{-- style="background-color: red;"style="text-align: center; --}}
    <div class="bg-red-200">
      <h1 ">Welcome to our application!</h1>
      <p>This is a welcome email from Laravel.</p>

      <a href="/sendmail">send</a>
    </div>
</body>
</html>