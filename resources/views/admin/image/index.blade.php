 <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <!--    Striped Rows Table  -->
                <div class="panel panel-default">

                </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product Image List</h3>
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Update</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}"  style="height:50px">
                                            @endif
                                        </td>

                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-danger btn-sm">Edit</a></td>
                                        <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-success btn-sm" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                    </tr>
                                @endforeach

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






