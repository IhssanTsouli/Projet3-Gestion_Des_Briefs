<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
    <table>
        <thead>
            <tr>
                <th>Nom de Brief </th>
                <th>Date de Livraison </th>
                <th>Date de Recuperation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($briefs as $value)
            <tr> 
                 <td>{{ $value->NomBrief}}</td>
                 <td> {{ $value->DateLivraison}}</td>
                 <td>{{ $value->DateRecuperation}}</td>
                 <td><a href="{{route('gestionbriefs.edit',[$value->id])}}">modifier</a></td>
                 <td>
                    <form action="{{route('gestionbriefs.destroy',[$value->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
        
    </table>
    <a href="{{Route('gestionbriefs.create')}}">Ajouter Brief</a>

    
</body>
</html>