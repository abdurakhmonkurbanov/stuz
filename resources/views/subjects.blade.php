@extends('main')
@section('head')
    @include('parts.heads')
@endsection

@section('js')
    @include('parts.js')
@endsection

@section('menu')
    @include('parts.menus')
@endsection

@section('content')


<div class="section bg-landing" id="Blog">
    <div class="container">
        <div class="row">

            <span class="landing-title"></span>
            <h2 class="text-center fw-semibold mb-7">Fanlar majmui</h2>

            @foreach ($subjects as $item)
                <div class="col-lg-6">
                    <div class="card bg-transparent reveal">
                        <div class="card-body px-1">
                            <div class="d-flex overflow-visible">
                                <a href="blog-details.html"
                                    class="card-aside-column br-5 cover-image"
                                    data-bs-image-src="/assets/images/media/12.jpg"
                                    style="background: url(&quot;/assets/images/subjects/{{$item->subject_img}}&quot;) center center;"></a>
                                <div class="ps-3 flex-column">
                                    <span class="badge bg-primary me-1 mb-1 mt-1">Fan</span>
                                    <h3><a href="{{route('courses.show',$item->id)}} ">{{$item->subject_name}} </a></h3>
                                    <div class="">{{$item->subject_description}} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div>


@endsection

@section('footer')
    @include('parts.footer')
@endsection
