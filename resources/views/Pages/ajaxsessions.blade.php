
<div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">

                    @foreach($sessions as $session)


                        <div class="ticket @if($task->enabled == 1) completed @endif ">

                            {{--{{dump($session->date_session)}}--}}

                            <?php $date = new DateTime('+2 day'); ?>
                            {{--{{ dump($date->format('Y-m-d H:i:s')) }}--}}
                            <?php $date2 = new DateTime('+6 day'); ?>
                            <?php $date3 = new DateTime('+15 day'); ?>


                            @if($session->date_session < $date->format('Y-m-d H:i:s') )
                                <span class="label label-success ticket-label">Moins de deux jours</span>

                            @elseif($session->date_session < $date2->format('Y-m-d H:i:s') )

                                <span class="label label-info ticket-label">Moins de 6 jours</span>


                            @elseif($session->date_session < $date3->format('Y-m-d H:i:s') )

                                <span class="label label-warning ticket-label">Moins de 15 jours</span>

                            @else
                                <span class="label label-danger ticket-label">Plus de 15 jours</span>

                            @endif

                            <a href="#" title="" class="ticket-title">{{ $session->movies->title }}<span># {{ $session->movies->id  }}</span></a>

                            <span class="ticket-info">Cinemas <a href="#" title="">{{ $session->cinema->title }}</a> {{ $session->date_session }}</span>



                        </div>

                    @endforeach

</div>
