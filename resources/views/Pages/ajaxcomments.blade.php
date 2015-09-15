<div class="panel panel-warning" id="dashboard-recent">
    <div class="panel-heading">
        <span class="panel-title"><i class="panel-title-icon fa fa-comments text-danger"></i>Commentaires récents</span>
        <ul class="nav nav-tabs nav-tabs-xs">
            <li class="active">
                <a href="#dashboard-recent-comments" data-toggle="tab">Comments</a>
            </li>
        </ul>
    </div> <!-- / .panel-heading -->
    <div class="tab-content">

        <script>
            init.push(function () {
                $('#dashboard-recent .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
            })
        </script>

        <div class="widget-comments panel-body tab-pane no-padding fade active in" id="dashboard-recent-comments">
            <div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">

                @foreach($comments as $comment)

                    <div class="comment">
                        <div class="comment-body">
                            <div class="comment-by">
                                <a href="#" title="">{{ $comment->user->username  }}</a> commented on <a href="#" title=""></a>
                            </div>
                            <div class="comment-text">
                                {{ $comment->content  }}
                            </div>
                            <div class="comment-actions">
                                <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                <a href="#"><i class="fa fa-times"></i>Remove</a>
                                <span class="pull-right">{{ date_create_from_format('Y-m-d H:i:s', $comment->date_created)->format('d/m/Y H:i') }}</span>
                            </div>
                        </div> <!-- / .comment-body -->
                    </div> <!-- / .comment -->

                @endforeach


            </div> <!-- / .widget-comments -->

        </div> <!-- / .widget-threads -->
    </div>
</div>