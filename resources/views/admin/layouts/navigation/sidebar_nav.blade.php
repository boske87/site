<div class="col-md-2 js-aside">
    <!-- <div class="col-md-2 col-md-pull-10 js-aside"> -->

    <h1 class="aside-heading">
        Sections
        <a class="js-aside-toggle js-aside-toggle-off pull-right" href="#d"><span class="caret"></span></a>
    </h1>



    <div id="aside-nav" class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#aside-nav" href="#aside-nav-5">Devojke</a>
                </h3>
            </div>
            <div class="panel-collapse collapse in" id="aside-nav-5">
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li class=""><a href="{{route('admin.devojke')}}">Lista devojaka</a></li>
                    </ul>
                </div>
            </div>
            <!-- =aside-nav-views -->
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#aside-nav" href="#aside-nav-4">Muskarci</a>
                </h3>
            </div>
            <div class="panel-collapse collapse in" id="aside-nav-4">
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li class=""><a href="{{route('admin.men')}}">Lista muskaraca</a></li>
                    </ul>
                </div>
            </div>
            <!-- =aside-nav-views -->
        </div>


    </div>
    <!-- =aside-nav -->

</div>
