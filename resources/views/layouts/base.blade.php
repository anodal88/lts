<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img/logo-fav.png') }}">
    <title>Beagle</title>
    @yield('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('lib/select2/css/select2.min.css') }}" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{  asset('lib/multiselect/css/multi-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"/>
    <style>

        .ah .Jd-Je {
            background-color: #e8eaed;
            color: #333;
        }
        .aq, .uR .aq {
            height: auto;
            line-height: normal;
            list-style: none;
        }
        .aq.aFf {
            align-items: center;
            cursor: pointer;
            display: flex;
            padding: 8px!important;
        }
        .aq, .uR .aq {
            height: auto;
            line-height: normal;
            list-style: none;
        }
        .aFf>.al {
            margin: 0 12px 0 8px;
        }
        .al {
            float: left!important;
        }
        .aFf .al {
            width: 32px;
            height: 32px;
        }
        .al>.ak {
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .aFf .ak {
            width: 32px;
            height: 32px;
        }
        .ak {
            top: 50%;
            font-size: 0;
        }

        .am {
            margin: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 322px;
            white-space: nowrap;
        }
        .am>.ao5 {
            -webkit-font-smoothing: antialiased;
            font-size: .95rem;
            letter-spacing: .2px;
            line-height: 20px;
        }
        .ao5 {
            font-weight: normal;
        }
        .ao5 .Jd-JU {
            font-weight: bold;
        }
        .am>.Sr {
            -webkit-font-smoothing: auto;
            letter-spacing: .3px;
        }



    </style>

    @stack('styles')
    @show
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }} "></script>
    <![endif]-->

</head>
<body>
<div class="be-wrapper">
    <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
            <div class="be-navbar-header"><a href="index.html" class="navbar-brand"></a>
            </div>
            <div class="be-right-navbar">
                <ul class="nav navbar-nav float-right be-user-nav">
                    <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                     class="nav-link dropdown-toggle">
                            <img src="{{asset('img/avatar.png')}}" alt="Avatar"><span
                                    class="user-name">{{ Auth::user()->name }}</span></a>
                        <div role="menu" class="dropdown-menu">
                            <div class="user-info">
                                <div class="user-name">{{ Auth::user()->name }}</div>
                                <div class="user-position online">Available</div>
                            </div>
                            <a href="pages-profile.html" class="dropdown-item"><span class="icon mdi mdi-face"></span>
                                Account</a><a href="#" class="dropdown-item"><span class="icon mdi mdi-settings"></span>
                                Settings</a>
                            @if($user = auth()->user())
                                @if($user->isImpersonated())
                                    <a href="{{ route('impersonate.stop') }}" class="dropdown-item">
                                        <span class="icon mdi mdi-power"></span> Exit Impersonation
                                    </a>
                                @else
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                       class="dropdown-item">
                                        <span class="icon mdi mdi-power"></span> Logout
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                @endif

                            @endif
                        </div>
                    </li>
                </ul>
                <div class="page-title">
                    <span>@yield('page_title')</span>

                    <div class="col-12">
                        <select class="impersonateBox" readonly="true" style="width:300px">
                        </select>
                    </div>
                </div>
                <ul class="nav navbar-nav float-right be-icons-nav">
                    <li class="nav-item dropdown"><a href="#" role="button" aria-expanded="false"
                                                     class="nav-link be-toggle-right-sidebar"><span
                                    class="icon mdi mdi-settings"></span></a></li>
                    <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                     class="nav-link dropdown-toggle"><span
                                    class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                        <ul class="dropdown-menu be-notifications">
                            <li>
                                <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                                <div class="list">
                                    <div class="be-scroller">
                                        <div class="content">
                                            <ul>
                                                <li class="notification notification-unread"><a href="#">
                                                        <div class="image"><img src="{{asset('img/avatar2.png')}}"
                                                                                alt="Avatar"></div>
                                                        <div class="notification-info">
                                                            <div class="text"><span
                                                                        class="user-name">Jessica Caruso</span> accepted
                                                                your invitation to join the team.
                                                            </div>
                                                            <span class="date">2 min ago</span>
                                                        </div>
                                                    </a></li>
                                                <li class="notification"><a href="#">
                                                        <div class="image"><img src="{{asset('img/avatar3.png')}}"
                                                                                alt="Avatar"></div>
                                                        <div class="notification-info">
                                                            <div class="text"><span class="user-name">Joel King</span>
                                                                is now following you
                                                            </div>
                                                            <span class="date">2 days ago</span>
                                                        </div>
                                                    </a></li>
                                                <li class="notification"><a href="#">
                                                        <div class="image"><img src="{{asset('img/avatar4.png')}}"
                                                                                alt="Avatar"></div>
                                                        <div class="notification-info">
                                                            <div class="text"><span class="user-name">John Doe</span> is
                                                                watching your main repository
                                                            </div>
                                                            <span class="date">2 days ago</span>
                                                        </div>
                                                    </a></li>
                                                <li class="notification"><a href="#">
                                                        <div class="image"><img src="{{asset('img/avatar5.png')}}"
                                                                                alt="Avatar"></div>
                                                        <div class="notification-info"><span class="text"><span
                                                                        class="user-name">Emily Carter</span> is now following you</span><span
                                                                    class="date">5 days ago</span></div>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer"><a href="#">View all notifications</a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                     class="nav-link dropdown-toggle"><span
                                    class="icon mdi mdi-apps"></span></a>
                        <ul class="dropdown-menu be-connections">
                            <li>
                                <div class="list">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col"><a href="#" class="connection-item"><img
                                                            src="{{asset('img/github.png')}}"
                                                            alt="Github"><span>GitHub</span></a></div>
                                            <div class="col"><a href="#" class="connection-item"><img
                                                            src="{{asset('img/bitbucket.png')}}" alt="Bitbucket"><span>Bitbucket</span></a>
                                            </div>
                                            <div class="col"><a href="#" class="connection-item"><img
                                                            src="{{asset('img/slack.png')}}"
                                                            alt="Slack"><span>Slack</span></a></div>
                                        </div>
                                        <div class="row">
                                            <div class="col"><a href="#" class="connection-item"><img
                                                            src="{{asset('img/dribbble.png')}}" alt="Dribbble"><span>Dribbble</span></a>
                                            </div>
                                            <div class="col"><a href="#" class="connection-item"><img
                                                            src="{{asset('img/mail_chimp.png')}}"
                                                            alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                                            <div class="col"><a href="#" class="connection-item"><img
                                                            src="{{asset('img/dropbox.png')}}" alt="Dropbox"><span>Dropbox</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer"><a href="#">More</a></div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Blank Page</a>
            <div class="left-sidebar-spacer">
                <div class="left-sidebar-scroll">
                    <div class="left-sidebar-content">
                        <ul class="sidebar-elements">
                            <li class="divider">Menu</li>
                            @section('menu')
                                @switch(Auth::user()->maxRole()->role)
                                    @case('ROLE_SUPER_ADMIN')
                                    @include('partials.menus.superadmin', ['data' => [ ]])
                                    @break

                                    @case('ROLE_USER')
                                    @include('partials.menus.user', ['data' => [ ]])
                                    @break

                                    @default
                                    This part never should be reached
                                @endswitch
                            @show
                        </ul>
                    </div>
                </div>
            </div>
            <div class="progress-widget">
                <div class="progress-data"><span class="progress-value">60%</span><span
                            class="name">Current Project</span></div>
                <div class="progress">
                    <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="be-content">
        <div class="page-head">
            @yield('breadcrumbs')
        </div>
        <div class="main-content container-fluid">
            @yield('content')
        </div>
    </div>
    <nav class="be-right-sidebar">
        <div class="sb-content">
            <div class="tab-navigation">
                <ul role="tablist" class="nav nav-tabs nav-justified">
                    <li role="presentation" class="nav-item"><a href="#tab1" aria-controls="tab1" role="tab"
                                                                data-toggle="tab" class="nav-link active">Chat</a></li>
                    <li role="presentation" class="nav-item"><a href="#tab2" aria-controls="tab2" role="tab"
                                                                data-toggle="tab" class="nav-link">Todo</a></li>
                    <li role="presentation" class="nav-item"><a href="#tab3" aria-controls="tab3" role="tab"
                                                                data-toggle="tab" class="nav-link">Settings</a></li>
                </ul>
            </div>
            <div class="tab-panel">
                <div class="tab-content">
                    <div id="tab1" role="tabpanel" class="tab-pane tab-chat active">
                        <div class="chat-contacts">
                            <div class="chat-sections">
                                <div class="be-scroller">
                                    <div class="content">
                                        <h2>Recent</h2>
                                        <div class="contact-list contact-list-recent">
                                            <div class="user"><a href="#"><img src="{{asset('img/avatar1.png')}}"
                                                                               alt="Avatar">
                                                    <div class="user-data"><span class="status away"></span><span
                                                                class="name">Claire Sassu</span><span class="message">Can you share the...</span>
                                                    </div>
                                                </a></div>
                                            <div class="user"><a href="#"><img src="{{asset('img/avatar2.png')}}"
                                                                               alt="Avatar">
                                                    <div class="user-data"><span class="status"></span><span
                                                                class="name">Maggie jackson</span><span class="message">I confirmed the info.</span>
                                                    </div>
                                                </a></div>
                                            <div class="user"><a href="#"><img src="{{asset('img/avatar3.png')}}"
                                                                               alt="Avatar">
                                                    <div class="user-data"><span class="status offline"></span><span
                                                                class="name">Joel King		</span><span
                                                                class="message">Ready for the meeti...</span></div>
                                                </a></div>
                                        </div>
                                        <h2>Contacts</h2>
                                        <div class="contact-list">
                                            <div class="user"><a href="#"><img src="{{asset('img/avatar4.png')}}"
                                                                               alt="Avatar">
                                                    <div class="user-data2"><span class="status"></span><span
                                                                class="name">Mike Bolthort</span></div>
                                                </a></div>
                                            <div class="user"><a href="#"><img src="{{asset('img/avatar5.png')}}"
                                                                               alt="Avatar">
                                                    <div class="user-data2"><span class="status"></span><span
                                                                class="name">Maggie jackson</span></div>
                                                </a></div>
                                            <div class="user"><a href="#"><img src="{{asset('img/avatar6.png')}}"
                                                                               alt="Avatar">
                                                    <div class="user-data2"><span class="status offline"></span><span
                                                                class="name">Jhon Voltemar</span></div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-input">
                                <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                            </div>
                        </div>
                        <div class="chat-window">
                            <div class="title">
                                <div class="user"><img src="{{asset('img/avatar2.png')}}" alt="Avatar">
                                    <h2>Maggie jackson</h2><span>Active 1h ago</span>
                                </div>
                                <span class="icon return mdi mdi-chevron-left"></span>
                            </div>
                            <div class="chat-messages">
                                <div class="be-scroller">
                                    <div class="content">
                                        <ul>
                                            <li class="friend">
                                                <div class="msg">Hello</div>
                                            </li>
                                            <li class="self">
                                                <div class="msg">Hi, how are you?</div>
                                            </li>
                                            <li class="friend">
                                                <div class="msg">Good, I'll need support with my pc</div>
                                            </li>
                                            <li class="self">
                                                <div class="msg">Sure, just tell me what is going on with your
                                                    computer?
                                                </div>
                                            </li>
                                            <li class="friend">
                                                <div class="msg">I don't know it just turns off suddenly</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-input">
                                <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                                    <input type="text" placeholder="Message..." name="q" autocomplete="off"><span
                                            class="send-msg mdi mdi-mail-send"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" role="tabpanel" class="tab-pane tab-todo">
                        <div class="todo-container">
                            <div class="todo-wrapper">
                                <div class="be-scroller">
                                    <div class="todo-content"><span class="category-title">Today</span>
                                        <ul class="todo-list">
                                            <li>
                                                <label class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                    <input type="checkbox" checked="" class="custom-control-input"><span
                                                            class="custom-control-label">Initialize the project</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                    <input type="checkbox" class="custom-control-input"><span
                                                            class="custom-control-label">Create the main structure							</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                    <input type="checkbox" class="custom-control-input"><span
                                                            class="custom-control-label">Updates changes to GitHub							</span>
                                                </label>
                                            </li>
                                        </ul>
                                        <span class="category-title">Tomorrow</span>
                                        <ul class="todo-list">
                                            <li>
                                                <label class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                    <input type="checkbox" class="custom-control-input"><span
                                                            class="custom-control-label">Initialize the project							</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                    <input type="checkbox" class="custom-control-input"><span
                                                            class="custom-control-label">Create the main structure							</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                    <input type="checkbox" class="custom-control-input"><span
                                                            class="custom-control-label">Updates changes to GitHub							</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                    <input type="checkbox" class="custom-control-input"><span
                                                            title="This task is too long to be displayed in a normal space!"
                                                            class="custom-control-label">This task is too long to be displayed in a normal space!							</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-input">
                                <input type="text" placeholder="Create new task..." name="q"><span
                                        class="mdi mdi-plus"></span>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" role="tabpanel" class="tab-pane tab-settings">
                        <div class="settings-wrapper">
                            <div class="be-scroller"><span class="category-title">General</span>
                                <ul class="settings-list">
                                    <li>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" checked="" name="st1" id="st1"><span>
                            <label for="st1"></label></span>
                                        </div>
                                        <span class="name">Available</span>
                                    </li>
                                    <li>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" checked="" name="st2" id="st2"><span>
                            <label for="st2"></label></span>
                                        </div>
                                        <span class="name">Enable notifications</span>
                                    </li>
                                    <li>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" checked="" name="st3" id="st3"><span>
                            <label for="st3"></label></span>
                                        </div>
                                        <span class="name">Login with Facebook</span>
                                    </li>
                                </ul>
                                <span class="category-title">Notifications</span>
                                <ul class="settings-list">
                                    <li>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" name="st4" id="st4"><span>
                            <label for="st4"></label></span>
                                        </div>
                                        <span class="name">Email notifications</span>
                                    </li>
                                    <li>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" checked="" name="st5" id="st5"><span>
                            <label for="st5"></label></span>
                                        </div>
                                        <span class="name">Project updates</span>
                                    </li>
                                    <li>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" checked="" name="st6" id="st6"><span>
                            <label for="st6"></label></span>
                                        </div>
                                        <span class="name">New comments</span>
                                    </li>
                                    <li>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" name="st7" id="st7"><span>
                            <label for="st7"></label></span>
                                        </div>
                                        <span class="name">Chat messages</span>
                                    </li>
                                </ul>
                                <span class="category-title">Workflow</span>
                                <ul class="settings-list">
                                    <li>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" name="st8" id="st8"><span>
                            <label for="st8"></label></span>
                                        </div>
                                        <span class="name">Deploy on commit</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
@yield('scripts')

<script src="{{ asset('lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/beagle_app.js') }}" type="text/javascript"></script>
<script src="{{ asset('lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('lib/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('lib/multiselect/js/jquery.multi-select.js') }}" type="text/javascript"></script>
@stack('scripts')
<script type="text/javascript">
    $(document).ready(function () {

        //initialize the javascript
        App.init();
        //Select2 tags
        $(".select-tags").select2({tags: true, width: '100%'});
        /*******Inpersonation Select*************/
        $(".impersonateBox").select2({
            placeholder: "{{auth()->user()->email}}",
            ajax: {
                url: "{{route('ajax.find.user')}}",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        query: params.term // search term
                    };
                },
                processResults: function (data) {
                    return {

                        results: $.map(data, function (obj) {
                            var avatar = "{{ asset('img/avatar.png') }}";
                            var item = '<div class="Jd-axF Jd-Je Je" id=":t8" role="option" style="user-select: none;">' +
                                '<div class="aq aFf" data-hovercard-id="'+obj.email+'" data-hovercard-variant="mini" data-hovercard-align="v" style="user-select: none;" data-hovercard-owner-id="23">' +
                                '<div class="al" style="user-select: none;">' +
                                '<div class="ak azp" style="background-image: url('+avatar+');background-position: 50% 50%; ">' +
                                '</div>' +
                                '</div>' +
                                '<div class="am" style="user-select: none;">' +
                                '<div class="ao5" style="user-select: none;">' +
                                '<b class="Jd-JU" style="user-select: none;"></b>'+obj.name+'</div>' +
                                '<div class="Sr" style="user-select: none;">'+obj.email+'</div>' +
                                '</div><div style="clear: both; user-select: none;">' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                            return {id: obj.id, text: obj.email, html:item};
                        })
                    };
                },
                cache: true
            },
            minimumInputLength: 2,
            templateResult: function (d) { return $(d.html); }
        });
        $('.impersonateBox').on('select2:select', function (e) {
            // Do something
            var route = "{{ route('impersonate',['user'=>'#USER_ID#']) }}";
            window.location.href = route.replace('#USER_ID#',e.params.data.id);
        });
        /*******Inpersonation Select*************/
        @stack('ready')
    });


</script>

@show

</body>
</html>