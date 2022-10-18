@extends('posts.layout.master')
@section('content')




    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>


                        
                        @foreach ($posts as $post)
                        <div class="row ">
                            <div class="col col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg">
                                        {{-- <div class="ep">18 / 18</div> --}}
                                        <a href=""><img src="{{ Storage::url($post->image) }}" height="290" width="200" alt="" /></a>
                                        {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                    </div>
                                    <div>
                                        <h5><a href="#">{{ $post->title }}</a></h5>
                                        <ul class="text-white">{{ $post->description }}</ul>
                                    </div>
                                </div>
                            </div>                                                                                              
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    @endsection