<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css" />
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">SL No</th>
                <th scope="col">Asset Name</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($assets as $asset )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="{{route('asset.details',['id'=>$asset->id])}}" target="_blank">{{$asset->name}}</a></td>
                @endforeach


            </tbody>
          </table>
    </div>



    <div class="row mt-4">
      <div>
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Requisition Table</h4>

                  <div class="table-responsive m-t-40">
                      <p class="text-center text-success"> {{Session::get('meassage')}}</p>
                      <table id="myTable" class="table table-striped border">
                          <thead>
                              <tr>
                                  <th>SL NO</th>
                                  <th>Asset Name</th>
                                  <th>Requisition Name</th>
                                  <th>Phone</th>
                                  <th>Email </th>
                                  <th>Designition</th>

                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($requisitions as $requisition)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$requisition->asset->name}}</td>
                                  <td>{{$requisition->name}}</td>
                                  <td>{{$requisition->phone}}</td>
                                  <td>{{$requisition->email}}</td>
                                  <td>{{$requisition->designation}}</td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
                  {{$requisitions->onEachSide(1)->links()}}
              </div>
          </div>
      </div>
  </div>

    <section>
        <div class="container-fluid px-4  py-4">
            <div class="row">
                <div class="col-8 col-sm-8 offset-1">
                    <h3 class="text-center m-3">Add Requisition</h3>

                    @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form action="{{route('requisition.add')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label  class="form-label">Name<span class="text-danger">*<span></label>
                          <input type="string" class="form-control" name="name" placeholder="Enter the Name ">
                          <span class="text-danger">{{$errors->has('name')? $errors->first('name'):''}}</span>
                        </div>

                        <div class="mb-3">
                            <label  class="form-label">Phone<span class="text-danger">*<span></label>
                            <input type="string" class="form-control" name="phone" placeholder="Enter the Number">
                            @error('phone')
                            <span class="text-danger">{{ $message }} </span>
                           @enderror
                        </div>

                          <div class="mb-3">
                            <label  class="form-label">Email<span class="text-danger">*<span></label>
                            <input type="string" class="form-control" name="email" placeholder="Enter the email address">
                            @error('email')
                            <span class="text-danger">{{ $message }} </span>
                           @enderror
                        </div>

                          <div class="mb-3">
                            <label  class="form-label">Asset ID<span class="text-danger">*<span></label>
                                <select class="form-control" name="asset_id" id="assetId">
                                    <option value="" disabled selected>.......Seleted Asset......</option>
                                       @foreach ($assets as $asset )
                                       <option value="{{$asset->id}}">{{$asset->name}}</option>
                                       @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('asset_id')? $errors->first('asset_id'):''}}</span>
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Designation<span class="text-danger">*<span></label>
                            <input type="string" class="form-control" name="designation" placeholder="Enter the Name of designation">
                            <span class="text-danger">{{$errors->has('designation')? $errors->first('designation'):''}}</span>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Requisition</button>
                      </form>
                </div>
            </div>
        </div>
    </section>

</div >


</body>
</html>
