
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Darrebni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Darrebni</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-shadow: red;
        }
        th, td {
            padding: 10px;
            border: 1px solid #dddddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<main>
    <br>
    <section class="d-flex flex-column align-items-center justify-content-center">

        <img src="assets/img/script_192246.png"  height="70px" height="70px" >
    </section>

    <br>
    {{--                            <img src="assets/img/script_192246.png"  height="70px" height="70px" >--}}
    <br>
    <div class="container">
    <table >
        <thead>
        <tr>
            <th>Type Description</th>
            <th>Doing More Tasks</th>

        </tr>
        </thead>

        @foreach($types as $type)
                <tr>
                    <td>{{$type->name}}</td>
                     <td></td>
                </tr>
        @endforeach
        <td><a href="{{route('types.create')}}" style="background-color: red" class="btn btn-danger" type="submit" >Add More</a></td>
     <td>
            <div> <a type="button" class="btn btn-danger" style="background-color: red" href="{{route('create')}}">Add Tasks</a></div>
     </td>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- Additional rows can be added here -->
    </table> </div>
    <br>
    <div class="credits" style="justify-content: center;display: flex" name="darrebni">
        Designed by <a href="https://platform.darrebni.net/" style="color: red"> Darrebni</a>
    </div>
</main>



<div class="container-fluid">
    <div class="row-fluid" style="padding: 10px">

        <button type="button" style=" position:absolute;top:100px;right:40px;float: right;background-color: red" class="btn btn-danger dropdown-toggle  " data-bs-toggle="dropdown" aria-expanded="false">
            About
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('logout')}}">Log Out</a></li>
        </ul>
    </div>

</div>

</body>
</html>

