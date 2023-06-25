@extends('index')
@section('content')
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100 " style=";">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;backgroumd-color:purple">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">edit data</h3>
            <form action="{{ route('update',$data->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="name" value="{{$data->name}}" placeholder="enter name" class="form-control form-control-lg mt3"/>      
                    <input type="text" name="place" value="{{$data->place}}"placeholder="enter place" class="form-control form-control-lg mt-3" />
                    <input type="nummer"name="contact"value="{{$data->contact}}" placeholder="enter contact number" class="form-control form-control-lg  mt-3" />    
                    <input type="file" name="image" value="{{$data->image}}" class="form-control">

              
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg"  name="submit" type="submit" value="update" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection