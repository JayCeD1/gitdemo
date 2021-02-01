@extends('app')
@section('content')

<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-dark">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4 mt-5">
                    <h1 class="display-4 py-2 text-truncate mt-5">{{ date("H:i") }} Hrs</h1>
                    <div class="px-2">
                        <form action="" class="justify-content-center" method="get">
                            
                            
                            <button type="submit" class="btn btn-success mt-5 btn-lg">Time In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
