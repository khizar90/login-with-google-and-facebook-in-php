<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send email</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div class="main">
     <div class="nav">
			<div class="icon">
				<h2 class="logo">Send Email</h2>
			</div>
	</div>
    <form method="post" action="send.php">
         <input type="email" placeholder="email" name="email"></input><br>
        <input type="text" placeholder="subject" name="subject"></input><br>
        <input type="textarea"  placeholder="message" name="message"></input><br>

        <button type="submit" name="submit">Send</button>
    </form>
    </div>
</body>
</html>