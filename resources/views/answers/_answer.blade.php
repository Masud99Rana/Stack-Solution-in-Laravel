<div class="media">
    <div class="d-fex flex-column vote-controls">
        

        @include ('shared._vote', [
            'model' => $answer
        ])

    </div>
    <div class="media-body">
        {!! $answer->body_html !!}
        <div class="row">
            <div class="col-4">
                <div class="ml-auto">
                    @can ('update', $answer)
                        <a href="{{ route('questions.answers.edit', [$question->id, $answer->id]) }}" class="btn btn-sm btn-outline-info">Edit</a>
                    @endcan
                    @can ('delete', $answer)
                        <form class="form-delete" method="post" action="{{ route('questions.answers.destroy', [$question->id, $answer->id]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    @endcan
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                
{{--                 <span class="text-muted">Answered {{ $answer->created_date }}</span>
                <div class="media mt-2">
                    <a href="{{ $answer->user->url }}" class="pr-2">
                        <img src="{{ $answer->user->avatar }}">
                    </a>
                    <div class="media-body mt-1">
                        <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                    </div>
                </div> --}}


  
                @include ('shared._author', [
                    'model' => $answer,
                    'label' => 'answered'
                ])



            </div>
        </div>                            
    </div>
</div>
<hr>