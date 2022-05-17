@extends('layouts.adminbase')

@section('title','Category List')

@section('content')
    <div id="page-wrapper">
    <div class="row">
    <div class="col-md-12">
        <!--    Striped Rows Table  -->
        <div class="panel panel-default">
            <a class="btn btn-primary btn-lg" role="button">Learn more</a>
            <div class="panel-heading">
                <p>Category List</p>
                <a href="/admin">HOME</a>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Parent</th>
                            <th>title</th>
                            <th>image</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                            <th>show</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>5</td>
                            <td>????????</td>
                            <td>*****</td>
                            <td>1111111</td>


                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>aaa</td>
                            <td>bbb</td>
                            <td>fffffff</td>
                            <td>dkjdkdl</td>


                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>şklkkl</td>
                            <td>fjhfhfj</td>
                            <td>djjdnkdd</td>
                            <td>AAAA</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  End  Striped Rows Table  -->
    </div>
    </div>
    </div>
    </div>





@endsection
