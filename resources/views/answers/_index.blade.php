<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{ $answersCount }} answers</h2>
                </div>
                <hr>
                @include('layouts._messages')
                @foreach($answers as $answer)
                    <div class="media">
                        <div class="d-flex flex-column vote-controls">
                            <a title="This answers is useful" class="vote-up">
                                <i class="fa fa-caret-up" aria-hidden="true"></i>
                            </a>
                            <span class="votes-count">1230</span>
                            <a title="This answers is not useful" class="vote-down off">
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <a title="Mark this answer as best answer" class="vote-accepted mt-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            {!! $answer->body !!}
                            <div class="float-right">
                                <span class="text-muted">Answered {{ $answer->created_date }}</span>
                                <div class="media mt-2">
                                    <a href="{{ $answer->user->url }}" class="pr-2">
                                        <img src="{{ $answer->user->avatar }}" alt="">
                                    </a>
                                    <div class="media-body mt-1">
                                        <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
