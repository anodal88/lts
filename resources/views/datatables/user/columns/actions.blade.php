<div class="btn-group btn-hspace">
    <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" aria-expanded="false">
        Open
        <span class="icon-dropdown mdi mdi-chevron-down"></span>
    </button>
    <div role="menu" class="dropdown-menu" x-placement="bottom-start"
         style="position: absolute; transform: translate3d(-100px, 30px, 0px); top: 0px; left: 0px; will-change: transform;">
        @can('impersonate',\App\User::class)
            <a href="{{route('impersonate',['user'=>$user->id])}}" class="dropdown-item">Impersonate</a>
        @endcan

        <a href="#" class="dropdown-item">
            Edit</a><a href="#" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Disable</a>
    </div>
</div>