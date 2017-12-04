<!--
    
     Created by: Kevin Dhale dela Cruz
     
     A viewing table for Individual Site Page
     - Hazard Information Section on Public Website
     
-->

<!-- <div class="row">
    <div class="col-sm-offset-2 col-sm-8 text-center">
        <div class="tab-header">
            Deep-seated Landslide Hazard Map of Dynaslope Site <br/>
            in Poblacion, Bakun, Benguet
        </div>
    </div>
</div> -->

<!-- <div class="row">
    <div class="col-sm-12 text-center">
        <div class="container-line tab-head">
            <span class="circle left"></span>
            <div class="container-line-text tab-head-text">
                Deep-seated Landslide Hazard Map of Dynaslope Site<br/>
                in <?php echo $site->address; ?>
            </div>
            <span class="circle right"></span>
        </div>
    </div>
</div> -->

<div class="row">
    <div class="col-sm-12 text-center">
        <div class="container-line tab-head">
            <span class="circle left"></span>
            <div class="container-line-text section-head-text">
               Hazard Map
            </div>
            <span class="circle right"></span>
        </div>
    </div>
</div>

<div class="row button-row"><div class="col-sm-12">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            <span class="fa fa-download"></span>&ensp;Download Map&ensp;<span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="/../../images/hazard_information/maps/<?php echo $site->code; ?>.jpg" download="<?php echo 'hazard-map-'.$site->code.'.jpg'; ?>"><span class="fa fa-file-image-o"></span>&ensp;Low Resolution Image</a></li>
            <li><a href="/../../images/hazard_information/maps/high_res/<?php echo $site->code; ?>.jpg" download="<?php echo 'hazard-map-'.$site->code.'-high_res.jpg'; ?>"><span class="fa fa-file-image-o"></span>&ensp;High Resolution Image</a></li>
        </ul>
    </div>
</div></div>

<div class="row">
    <div class="col-sm-12">
        <!-- <a href="/../../images/hazard_information/maps/<?php echo $site->code; ?>.jpg" data-toggle="lightbox" data-footer="Scroll in image to zoom in/out">
            <img id="map" src="/../../images/hazard_information/maps/<?php echo $site->code; ?>.jpg" class="img-fluid" alt="Responsive image">
        </a> -->
        <img id="map" src="/../../images/hazard_information/maps/<?php echo $site->code; ?>.jpg" class="img-fluid" alt="Responsive image">
    </div>
</div>

<div class="row">
    <div class="col-sm-12 text-center">
        <div class="container-line section-head">
            <span class="circle left"></span>
            <div class="container-line-text section-head-text">
                Site Details
            </div>
            <span class="circle right"></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu purus sed sapien porttitor laoreet. Nam luctus vehicula risus, eu sodales lectus. Aenean ultrices leo odio, quis fringilla sem varius consequat. Maecenas vestibulum consectetur mi. Phasellus posuere feugiat nunc ac facilisis. Aenean porttitor pharetra porttitor. Aenean tempor pretium arcu, id malesuada sapien rhoncus at. Vivamus consequat arcu in lacus pellentesque, vitae pharetra eros egestas. Mauris consequat pellentesque quam sed scelerisque. Fusce quis tellus laoreet, hendrerit urna eget, elementum lacus. In vitae leo nulla. Morbi mauris ante, pharetra nec placerat eu, pharetra ut sapien. Aliquam tempor nisi ac varius elementum.
        </p>
        <p>
            Donec gravida tellus purus, ut maximus sem condimentum quis. Curabitur metus ligula, commodo vel tempor id, venenatis in ipsum. Aliquam a ultrices dui. Vivamus eu orci hendrerit, sodales tortor at, finibus justo. Pellentesque hendrerit quam nec mi consectetur dictum. Proin vel ultrices dui, eu molestie quam. Sed lobortis lorem eu ligula lobortis lobortis. Donec ac velit eget felis scelerisque porta. Donec tristique vulputate arcu quis vestibulum. Phasellus tempor pharetra dui, id laoreet arcu rhoncus interdum. Vivamus a rhoncus nibh. Morbi maximus fringilla tellus, eu egestas odio euismod ac. Maecenas sit amet efficitur metus.
        </p>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 text-center">
        <div class="container-line section-head">
            <span class="circle left"></span>
            <div class="container-line-text section-head-text">
                Site Images
            </div>
            <span class="circle right"></span>
        </div>
    </div>
</div>

<div id="images-field">

    <?php if(is_null($features_pic) || count($features_pic) == 0 ): ?>
        <div class="row"><div class="col-sm-12 text-center">No images available</div></div>        
    <?php else: ?>
        <?php $count = 0; ?>
        <?php foreach( $features_pic as $pic ): ?>
            <?php if( $count % 4 == 0 ): ?> <div class="row"> <?php endif; ?>

            <?php $filename = str_replace(" ", "%20",  $pic); ?>
            <div class="thumbnail-gallery">
                <a href="/../../images/hazard_information/landslide_features/<?php echo $site->code . '/' . $filename; ?>" data-toggle="lightbox" data-gallery="example-gallery" data-title="<?php echo str_replace(".JPG", "", $pic); ?>" data-footer="Scroll in image to zoom in/out" class="col-sm-3">
                    <img src="/../../images/hazard_information/landslide_features/<?php echo $site->code . '/thumbnails/' . $filename; ?>" class="img-fluid">
                </a>
            </div>

            <?php if( $count % 4 == 3 || $count + 1 == count($features_pic) ): ?> </div> <?php endif; ?>
            <?php $count++; ?>
        <?php endforeach; ?>
    <?php endif; ?>

</div>

