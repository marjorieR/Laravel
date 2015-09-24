@foreach($messages as $message)

    <div class="message">

        <img src="http://ui.unitedcats.com/img/ui/user_icons/_no_avatar_null_235x235.png" alt="" class="message-avatar">

        <div class="message-body">

            <div class="message-heading">

                <a href="#" title="">{{ $message['user']['firstname'] }}</a> says:

                <span class="pull-right"> {{ \Carbon\Carbon::createFromTimestamp(strtotime($message->created_at))->diffForHumans() }}</span>



            </div>
            <div class="message-text">

                {{ $message['content'] }}
            </div>
        </div> <!-- / .message-body -->
    </div>  <!-- / .message -->

@endforeach