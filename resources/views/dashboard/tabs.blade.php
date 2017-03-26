<ul class="nav nav-tabs">

    <li @if (isset($tab) && ($tab == 'presentation')) class="active" @endif>
        <a href="{{ action('DashboardController@presentation') }}">
            <i class="fa fa-home"></i> <span class="hidden-xs hidden-sm">{{ trans('messages.presentation') }}</span>
        </a>
    </li>


    <li @if (isset($tab) && ($tab == 'discussions')) class="active" @endif>
        <a href="{{ action('DashboardController@discussions') }}">
            <i class="fa fa-comments"></i> <span class="hidden-xs hidden-sm">{{ trans('messages.latest_discussions') }}</span>
        </a>
    </li>



    <li @if (isset($tab) && ($tab == 'actions')) class="active" @endif>
        <a href="{{ action('DashboardController@agenda') }}">
            <i class="fa fa-calendar"></i> <span class="hidden-xs hidden-sm">{{ trans('messages.agenda') }}</span>
        </a>
    </li>



    <li @if (isset($tab) && ($tab == 'files')) class="active" @endif>
        <a href="{{ action('DashboardController@files') }}">
            <i class="fa fa-file-o"></i> <span class="hidden-xs hidden-sm">{{ trans('messages.files') }}</span>
        </a>
    </li>



    <li @if (isset($tab) && ($tab == 'users')) class="active" @endif>
        <a href="{{ action('DashboardController@users') }}">
            <i class="fa fa-users"></i> <span class="hidden-xs hidden-sm">{{ trans('messages.members') }}</span>
        </a>
    </li>


    <li @if (isset($tab) && ($tab == 'map')) class="active" @endif>
        <a href="{{ action('DashboardController@map') }}">
            <i class="fa fa-map-marker"></i> <span class="hidden-xs hidden-sm">{{ trans('messages.map') }}</span>
        </a>
    </li>

</ul>