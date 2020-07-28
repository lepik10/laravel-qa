@can('accept', $model)
    <a title="Mark this answer as best answer" class="{{ $model->status }} mt-2"
       onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $model->id }}').submit()"
    >
        <i class="fa fa-check" aria-hidden="true"></i>
    </a>
    <form id="accept-answer-{{ $model->id }}" action="{{ route('answers.accept', $model->id) }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    @if ($model->is_best)
        <a title="The question owner accept this answer" class="{{ $model->status }} mt-2">
            <i class="fa fa-check" aria-hidden="true"></i>
        </a>
    @endif
@endcan
