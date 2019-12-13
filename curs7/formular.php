<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curs 7 Formular.PHP</title>
</head>
<body>
    <form action="post.php" method="post">
    <fieldset>
        <legend><strong>Formular de introducere</strong></legend>
        
        <label id="nume-label" class="nume">
            <strong>Nume</strong><br>
            <input type="text" value="" name="nume" id="nume" required/>
        </label>
        <br>
        
        <label id="prenume-label" class="prenume">
            <strong>Prenume</strong><br>
            <input type="text" value="" name="prenume" id="prenume" oninvalid="this.setCustomValidity('Acest camp este obligatoriu!')" required />
        </label>
        <br>
        
        <label id="email-label" class="email">
            <strong>Email</strong><br>
            <input type="email" value="" name="email" id="email"  required/>
        </label>
        <br>
        
        <label id="parola-label" class="parola">
            <strong>Parola</strong><br>
            <input type="password" value="" name="parola" id="parola" required/>
        </label>
        <br>
        <br>

        <label for="">Termeni de utilizare</label>
        <input type="checkbox" name="status" value="1">
        <br>   
        <br>

        <label  class="submit">
            <input type="submit" value="Trimite" name="submit"/>
        </label>
        <input type="reset">
        <input type="hidden" name="hash" value="cheie_secreta_generata_pe_sesiune"  />

    </fieldset>
    </form>

</body>
</html>