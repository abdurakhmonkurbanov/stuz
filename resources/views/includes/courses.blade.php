<div class="sptb section bg-white" id="Features">
    <div class="container">
        <div class="row">
            <h2 class="text-center fw-semibold">{{$subject->subject_name}} fanidan kurslar
                <a class="btn btn-sm btn-outline-info" data-bs-target="#course-selector" data-bs-toggle="modal"><i class="fe fe-settings"></i></a></h2>

            <span class="landing-title"></span>
                <div class="row">
                    @foreach ($courses as $item)
                        <div class="col-lg-6 col-md-12">
                            <div class="card features main-features main-features-1 wow fadeInUp reveal revealleft"
                                data-wow-delay="0.1s">
                                <div class="bg-img mb-2 text-left">
                                    <img src="/assets/images/ang.png" class="rounded">
                                </div>
                                <div class="text-left">
                                    <a > <h4 class="fw-bold">{{$item->course_name}} kursi</h4></a>
                                    <p class="mb-0">
                                        <a href="" class="btn btn-sm btn-outline-info">Kursga kirish  <i class="fa fa-forward"></i> </a>
                                        </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


        </div>
    </div>
</div>

<!-- Course form-selector modal-->
<div class="modal fade" id="course-selector" style="">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h6 class="modal-title">Kursni sozlash</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                            <div class="text-center">
                                    <b>  Yangi kurs qo'shish</b>
                            </div>
                            <form action="{{route('courses.store')}}" method="POST" class="">
                                @csrf
                                <input type="hidden" name="subject_id" value="{{$subject->id}}">
                                <div class="input-group form-floating">
                                    <input class="form-control" id="floatingInput" placeholder="Email" name="newcourse">
                                    <label for="floatingInput">Yangi kurs nomi</label>
                                    <button class="btn btn-outline-success" type="submit">Qo'shish</button>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                            <div class="text-center">
                                <b> Kursni o'chirish</b>
                            </div>
                            <form action="" class="">
                                @csrf
                            <input type="hidden" name="subject_id" value="{{$subject->id}}">
                                <div class="form-group m-0">
                                    <div class="custom-controls-stacked">
                                        @foreach ($courses as $item)
                                            <label class="custom-control custom-checkbox-md">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="{{$item->id}}">
                                                    <span class="custom-control-label">{{$item->course_name}}</span>
                                                </label>
                                        @endforeach
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-outline-success">O'chirish</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


