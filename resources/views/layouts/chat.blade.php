
<div class="card  border border-primary ">
    <div class="card-header ">
        <h3 class="card-title">Discusión</h3>
    </div>
    <div class="card-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <ul class="media-list">
            @foreach ($messages as $message)
            <li class="media">
                <div class="media-body">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="rounded-circle " src="{{ $message->user->avatar_path }}" width="48">
                        </a>
                        <div class="media-body">
                            {{ $message->message }}
                            <br>
                            <small class="text-muted">{{ $message->user->name }} | {{ $message->created_at }}</small>
                            <hr>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

    </div>
    @if ($incident->state == 'Asignado')
    <div class="card-footer">
        <form action="/mensaje" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="incident_id" value="{{ $incident->id }}">
            <div class="input-group">
                <input type="text" class="form-control" name="message">
                <span class="input-group-btn">
                    <button class="btn"  type="submit">Enviar</button>
                </span>
            </div>    
        </form>        
    </div>
    @endif
</div>



