@extends('posts.layout.master')
@section('content')

<div class="container mt-2 ">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 Post CRUD Tutorial</h2>
            </div>
            <div class="pull-right mb-2 ">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered text-white">
        <tr>
            {{-- <th>S.No</th> --}}
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            {{-- <td>{{ $post->id }}</td> --}}
            {{-- <td><img src="{{ Storage::url($post->image) }}" height="150" width="120" alt="" /></td> --}}
            <td><a href="#view-{{ $post->id }}"><img src="{{ Storage::url($post->image) }}" height="150" width="120" alt="" /></a></td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $posts->links() !!}



    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h2 class="text-white" >View</h2>
                                </div>
                            </div>
                        </div>


                        @foreach ($posts as $post)
                        <div class="row">
                            <div class="col col-lg-4 col-md-6 col-sm-6" >
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" id="view-{{ $post->id}}">
                                        {{-- <div class="ep">18 / 18</div> --}}
                                        <a href=""><img src="{{ Storage::url($post->image) }}" height="500" width="450" alt=""  style="padding-bottom: 220px" /></a>
                                        {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                    </div >
                                    {{-- style="display: flex" --}}
                                    <div >
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


</body>
</html>
@endsection