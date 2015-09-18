

    @foreach($tasks as $task)

        <div class="task @if($task->enabled == 1) completed @endif">

            <?php $date = new DateTime('-2 day'); ?>
            <?php $date2 = new DateTime('-7 day'); ?>
            <?php $date3 = new DateTime('+7 day'); ?>


            @if($task->date_tasks > $date->format('Y-m-d H:i:s') )

                <span class="label label-success ticket-label">Hight</span>

            @elseif($task->date_tasks > $date2->format('Y-m-d H:i:s') )

                <span class="label label-info ticket-label">Medium</span>

            @else
                <span class="label label-danger ticket-label">Low</span>


            @endif

            <div class="fa fa-arrows-v task-sort-icon"></div>


            <div class="action-checkbox">

                <label class="px-single"><input data url="{{ route('pages.deletetasks',['id'=>$task->id]) }}" type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>

            </div>

            <a href="#" class="task-title"> {{ $task->content }} {{ $task->movies->title }}<span>{{ date(' d / m / Y', strtotime($task->date_tasks)) }}</span></a>


            <p></p>


        </div>

    @endforeach

