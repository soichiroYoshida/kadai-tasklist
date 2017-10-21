<div class="header">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{!! link_to_route('tasks.index', "きょうのやることリスト", null, ['class' => 'navbar-brand' ]) !!}
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_route('tasks.create', '新規タスクの登録') !!}</li>
            </ul>
        </div>
    </div>
</div>