<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row p-5">
            <div class="col-10">
                <h1>Supllier</h1>
            </div>
            <div class="col-2">
                <a href="/supplier" class="btn btn-success">Add New</a>
            </div>
            <!-- search box -->
            <div class="col-12">
                <form action=""> 
                    <input type="search" name="search" class="form-controls" required>
                    <input required type="radio" name="by" value="name"> Name
                 
                
                 

               
 
                    <button>Search</button>

                
               
                </form>
            </div>
            <!-- end of search box -->
            <div class="col-12 mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>  
                            <th scope="col">Name</th>
                            <th scope="col">Contact</th> 
                            <th scope="col">Address</th>
                            <th scope="col">Contact person</th>
                            <th scope="col">Category</th>
                            <th scope="col"></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <!-- loop the data from the table -->
                        @foreach($data as $x)
                            <!-- $x is the iteration variable -->
                            <tr> 
                                <th scope="row">{{ $x->id }}</th> 
                                <th scope="row">{{ $x->name }}</th>  
                                <th scope="row">{{ $x->contact }}</th>  
                                <th scope="row">{{ $x->address }}</th>  
                                <th scope="row">{{ $x->contact_person }}</th>  
                                <th scope="row">{{ $x->category }}</th>
                                <th scope="row">{{ $x->ratings }}</th>
                               
                                <th scope="row" style="width:15%;">
                                    <a href="{{ URL::route('update', $x->id) }}" class="btn btn-success btn-sm">Update</a>
                                    <a href="{{ URL::route('delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </th> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>