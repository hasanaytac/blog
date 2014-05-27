@layout('templates.main')
@section('content')
<div class="span4 offset4 well">
    {{ Form::open('login') }}
        <!-- check for login errors flash var -->
        @if (Session::has('login_errors'))
            {{ Alert::error("Şifre ya da kullanıcı adı yanlış.") }}
        @endif
        <!-- username field -->
        <p>{{ Form::label('username', 'Kullanıcı Adı') }}</p>
        <p>{{ Form::text('username') }}</p>
        <!-- password field -->
        <p>{{ Form::label('password', 'Şifre') }}</p>
        <p>{{ Form::password('password') }}</p>
        <!-- submit button -->
        <p>{{ Form::submit('Giriş Yap', array('class' => 'btn-large')) }}</p>
    {{ Form::close() }}
</div>
@endsection