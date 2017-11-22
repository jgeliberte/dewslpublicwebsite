<!--
    
     Created by: Kevin Dhale dela Cruz
     
     A viewing table for Individual Site Page
     - Community Timeline Section on Public Website
     
-->

<?php 
    $timeline = json_decode($timeline);

    $timeline_sorted = array();
    foreach($timeline as $key => $item)
    {
        $date = date_create($item->start_date);
        $year = date_format($date, "Y");
        $timeline_sorted[$year][$item->timeline_id] = $item;
    }

    krsort($timeline_sorted, SORT_NUMERIC);
?>

<div class="row">
    <div class="col-sm-offset-2 col-sm-8 text-center">
        <div class="container-line timeline-head">
            <span class="circle left"></span>
            <div class="container-line-text timeline-head-text">Timeline of Events</div>
            <span class="circle right"></span>
        </div>
    </div>
    <div class="col-sm-2"></div>
</div>

<?php foreach ($timeline_sorted as $year => $events): ?>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 text-center">
            <div class="container-line">
                <span class="circle left"></span>
                <span class="container-line-text year"><strong><?php echo $year; ?></strong></span>
                <span class="circle right"></span>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 text-center">
            <div class="panel-group">

                <?php foreach ($events as $event): ?> 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#<?php echo $event->timeline_id; ?>">
                                    <?php echo $event->title; ?>&nbsp;
                                    <span class="fa fa-question-circle activity-info" title="<?php echo $event->title; ?>" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="<?php echo htmlspecialchars($event->description, ENT_QUOTES); ?>"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="<?php echo $event->timeline_id; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="text-center"><strong><?php 
                                    echo date_format(date_create($event->start_date), "F d");
                                    if( !is_null($event->end_date) ) echo date_format(date_create($event->end_date), " - F d");
                                ?></strong></div>
                                <br/>
                                <div><?php echo $event->content; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

<?php endforeach; ?>