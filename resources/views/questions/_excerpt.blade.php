<div class="media post">
    <div class="d-flex flex-column counters">
        <div class="vote">
            <strong>{{ $question->votes_count }}</strong> votes
        </div>
        <div class="status {{ $question->status }}">
            <strong>{{ $question->answers_count }}</strong> answer
        </div>
        <div class="view">
            {{ $question->views }} views
        </div>
    </div>
    <div class="media-body">
        <div class="d-flex align-items-center">
            <h3 class="mt-0"><a href="{{ $question->url }}">{{ $question->title }}</a></h3>
            <div class="ml-auto">
                @can('update', $question)
                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                @endcan
                @can('delete', $question)
                    <form class="form-delete" method="post" action="{{ route('questions.destroy', $question->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                @endcan
            </div>
        </div>
        <p class="lead">
            Asked by
            <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
            <small class="text-muted">{{ $question->created_date }}</small>
        </p>
        {{ $question->body_short }}
    </div>
</div>
