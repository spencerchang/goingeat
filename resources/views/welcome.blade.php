@extends('layouts.app')

@section('content')
<div class="form-group">
    <div class="row">
        <div class="col-xs-12 col-sm-12 text-center" >
            <img src="https://a0.muscache.com/airbnb/static/P1F1.jpg" id="bg_img" />
        </div>

        <div class="col-xs-9 col-sm-9 col-xs-offset-3 col-sm-offset-3" id="find_block">
            <div class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="品味各地" name="region">
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option>所有菜系</option>
                        <option>義大利菜</option>
                        <option>家常菜</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="預定時間-起" name="start_time">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="預定時間-迄" name="end_time">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-danger">搜索</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group text-center">
    <p class="text-muted"><strong><h2>世界上的家庭餐館</h2></strong></p>
    <p class="text-muted">
    <h3>探索各地特色</h3></p>
</div>

<div class="form-group" id="map">
    <div id="map"></div>
</div>

<div class="form-group text-center">
    <p class="text-muted"><strong><h2>附近的好食處</h2></strong></p>
    <p class="text-muted">
    <h3>Near By You!</h3></p>
</div>

<div class="form-group">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="form-group text-center">
    <p class="text-muted"><strong><h2>熱門選擇</h2></strong></p>
    <p class="text-muted">
    <h3>Hot Choice </h3></p>
</div>

<div class="form-group" id="hot">
    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
        </div>
        <div class="grid-item">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
        </div>
    </div>
</div>

<div class="form-group text-center">
    <p class="text-muted"><strong><h2>特色菜系</h2></strong></p>
    <p class="text-muted">
    <h3>Favorite food style you will like </h3></p>
</div>

<div class="form-group text-center">
    <div class="button-group filter-button-group">
        <button class="btn btn-success" data-filter="*">全部菜系</button>
        <button class="btn btn-success" data-filter=".ch">中式菜系</button>
        <button class="btn btn-success" data-filter=".jp">日式菜系</button>
        <button class="btn btn-success" data-filter=".sa">東南亞菜系</button>
        <button class="btn btn-success" data-filter=".us">美式菜系</button>
        <button class="btn btn-success" data-filter=".it">義式菜系</button>
        <button class="btn btn-success" data-filter=".eu">歐式菜系</button>
    </div>
</div>

<div class="form-group" id="food_style">
    <div class="food_grid">
        <div class="grid-item ch">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
        </div>
        <div class="grid-item jp">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
        </div>
        <div class="grid-item us">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
        </div>
        <div class="grid-item sa">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
        </div>
        <div class="grid-item it">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
        </div>
        <div class="grid-item eu">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
        </div>
        <div class="grid-item us">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
        </div>
        <div class="grid-item ch">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
        </div>
        <div class="grid-item it">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
        </div>
    </div>
</div>
@endsection
