<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{Route('gestionbriefs.store')}}" method="POST">
        @csrf
        <input type="text" name='NomBrief'>
        <input type="datetime-Local" name='DateLivraison'>
        <input type="datetime-Local" name='DateRecuperation'>
        <button type="submit" name='add'>Ajouter brief</button>
    </form>
</body>
</html>