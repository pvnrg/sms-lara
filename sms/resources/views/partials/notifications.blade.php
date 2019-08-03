@php( $notifications_unread = auth()->user()->unreadNotifications )
@php( $notifications_read = auth()->user()->readNotifications )

@if($notifications_unread->count()>0 || $notifications_read->count()>0 )

<li class='dropdown medium only-icon widget'>
    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
        <i class='fa fa-bell-o'></i>
        @if($notifications_unread->count()>0) <div class='label'>{{ $notifications_unread->count() }}</div> @endif
    </a>
    <ul class='dropdown-menu'>
        @foreach($notifications_unread as $notification)
            <li>
                @if($notification->type == 'App\\Notifications\\TicketAssignNotification')
                <a href="{{url('admin/tickets')}}/{{$notification->data['ticket_id']}}?v_notification={{$notification->id}}">
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-user text-success'></i>
                        </div>
                        <div class='pull-left text'>
                            @php($ticket = $notification->data['ticket'])
                            @php($actioner = $notification->data['actioner'])
                            @lang('ticket.notification.actioner_has_assing_you_ticket',['actioner_name'=>$actioner['name']]) <span class="text-info"> {{$ticket['title']}} </div>
                            <small class='text-muted' style="float: right">{{$notification->created_at->diffForHumans()}}</small>

                        </div>
                    </div>
                </a>
                @endif
            </li>
            <li class='divider'></li>
        @endforeach

            @foreach($notifications_read as $notification)
                <li style="    background: #f4f4f4;">
                    @if($notification->type == 'App\\Notifications\\TicketAssignNotification')
                        <a href="{{url('admin/tickets')}}/{{$notification->data['ticket_id']}}?v_notification={{$notification->id}}">
                            <div class='widget-body'>
                                <div class='pull-left icon'>
                                    <i class='icon-user text-success'></i>
                                </div>
                                <div class='pull-left text'>
                                    @php($ticket = $notification->data['ticket'])
                                    @php($actioner = $notification->data['actioner'])
                                    @lang('ticket.notification.actioner_has_assing_you_ticket',['actioner_name'=>$actioner['name']]) <span class="text-info"> {{$ticket['title']}} </div>
                                <small class='text-muted' style="float: right">{{$notification->created_at->diffForHumans()}}</small>

                            </div>
                            </div>
                        </a>
                    @endif
                </li>
                <li class='divider'></li>
            @endforeach


        <li class='widget-footer'>
            <a href="{{url('admin/tickets')}}?v_notification=all">All notifications</a>
        </li>
    </ul>
</li>

@endif