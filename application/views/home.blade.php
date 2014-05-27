@layout('templates.main')
@section('content')
	
 	@if (Session::has('success_message'))
 		<div class="span8">
        {{ Alert::success("Başarılı!") }}
    	</div>
    @endif


    @foreach ($posts -> results as $post)
        <div class="span8">
            <h1>{{ $post->post_title }}</h1>
            <p>{{ $post->post_body }}</p>
            <span class="badge badge-success">Tarih {{$post->updated_at}}</span>
         
                @if ( !Auth::guest())
                <p><table>
              	{{ Form::open('post/'.$post->id, 'DELETE')}}
	        	{{ Form::submit('Sil', array('class' => 'btn-small')) }}
                        {{ Form::close() }}&nbsp;
                    {{ Form::open('post/'.$post->id, 'get')}}
	        	{{ Form::submit('Değiştir', array('class' => 'btn-small')) }}
                {{ Form::close() }} 
                </table></p>
                @endif
    		<hr />
		</div>
        
    @endforeach
@endsection

@section('pagination')
    	<div class="row">
    		<div class="span8">
	    		{{ $posts -> links(); }}
	   		 </div>
		</div>
@endsection