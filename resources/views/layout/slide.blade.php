<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="myCarousel" class="carousel slide " data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                                <?php $i=0;?> 
                                @foreach($slide1 as $sl)
                            <li data-target="#myCarousel" data-slide-to="<?php echo $i?>"
                            @if($i==0)
                            class="active"
                            @endif
                            ></li>
                            <?php $i++;?> 
                            @endforeach
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php $i=0;?> 
                           @foreach($slide1 as $sl)
                            <div 
                            @if($i==0)
                            class="item active"
                            @else
                            class="item"
                            @endif
                            >
                            <?php $i++;?> 

                        <img src="upload/slide/{{$sl->Hinh}}" alt="Chania" width="460"
                                    height="345">
                                <div class="carousel-caption text-slide-mnv">
                                    <h2><a href="">{{$sl->Ten}}</a>
                                    </h2>
                                    <?php
                                    $thoigian=$sl->NgayTao; 
                                    $dateM=date("d-m-Y",strtotime($thoigian)); ?>
                                    <p><strong>Admin</strong>  <?php echo $dateM;?></p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    @foreach($slideNoiBat as $sl)
                    <div class="card card-mnv">
                        <img class="card-img-top" style="padding-bottom: 17px"
                            src="upload/slide/{{$sl->Hinh}}" alt="Card image cap">
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>