@extends('layouts.impact')
@section('title')
Staff
@endsection

@section('mota')
Create a new staff info
I think it's ok
@endsection
@section('content')

    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
            	 <div class="row">
                    <div class="col-md-12 fade-up">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                    </div>
                    <div class="col-md-4 fade-up">

                    </div>
                </div>
                <!-- Gioi thieu cty -->
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Works to do now</h2>
                    <hr>
                    <p>List of work to do or create a new post to do if you see something doesn't in true localtion.</p>
                    <a class="btn btn-outlined btn-primary active" href="{{route('post.create')}}" >Create new post</a>
                </div> 
                <div class="gap"></div>

                <div id="meet-the-team" class="row">
                	@foreach($postDo as $post)
                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <img height="400" width="400"class="img-responsive img-thumbnail bounce-in" src="{{asset($post->file->url)}}" alt="">
                            <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="{{asset($post->file->url)}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>             
                            </div>
                            <div class="team-content fade-up">
                                <h5>{{$post->staff['name']}}<small class="role muted">{{$post->item['name']}}</small></h5>
                                <p>Localtion now:{{$post->localtion}}</p>
                                <div class="entry-meta"><span><i class="fa fa-clock-o"></i> {{$post->created_at}}</span></div>
                                <a class="btn btn-social btn-google-plus" href="#">Do now!</a> 
                            </div>
                        </div>
                    </div>
                    @endforeach
                            @include('layouts.pagination', ['result'=>$postDo])
                    
                </div><!--/#meet-the-team-->      
        </section>
    </div>          
                    
        @endsection