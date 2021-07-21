<!DOCTYPE html>
<html>

<head>
    <title>Azkar SIgnature pad Learning test</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    {{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>

<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Azkar Signature pad</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Signature</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($signatures as $item)

                                  <tr>
                                      <td>{{$item->id}}</td>
                                      <td>{{$item->name}}</td>
                                      <td><img src="{{ url('/upload/'.$item->signature)}}" style="width:30%;"></td>
                                      <td></td>
                                  </tr>
                                  @endforeach
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
