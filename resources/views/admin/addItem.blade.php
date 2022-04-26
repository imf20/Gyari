@extends('includes.admin')

@section('title')
    Admin Home
@endsection

@section('style')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection

@section('content')

    <div id="main">



        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red">{{$error}}</li>
                @endforeach
            </ul>
        @endif

        @if (session()->has('success'))
            <div style="color: green">{{session()->get('success')}}</div>
        @endif
        @if (session()->has('fail'))
            <div style="color: red">{{session()->get('fail')}}</div>
        @endif

        <form action="{{route('addItem')}}" method="post" class="login-email">
            @csrf
            <div class="container rounded bg-white mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                    <h6>Back to home</h6>
                                </div>
                                <h6 class="text-right">Add Item</h6>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><input type="text" class="form-control" name="name" placeholder="Name" value="" required></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><input type="text" class="form-control" name="price" placeholder="Price" value="" required></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><input type="text" class="form-control" name="category" placeholder="Category" value="" ></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><input type="text" class="form-control" name="quantity" placeholder="Quantity" value="" ></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><input type="file" class="form-control" name="image" placeholder="Image" value="" ></div>
                            </div>
                            <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Add Item</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div> {{-- end main --}}

@endsection  {{-- End content --}}

@section('scripts')
    
@endsection
