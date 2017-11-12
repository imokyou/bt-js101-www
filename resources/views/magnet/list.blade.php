
<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="有种的网站,feikebt.com,feikebt,飞客BT,磁力,磁力链接,种子下载,BT下载,BT种子,bt种子下载器,BT种子搜索,迅雷种子,bt搜索引擎,种子搜索,种子搜索神器,磁力搜索,BT搜索,磁力搜,磁力链,磁力链接搜索,磁力链接搜索引擎,bt种子下载" />
  <meta name="description" content="有种的网站通过DHT网络获取最新的BT种子文件信息、提供torrent种子的总索引服务。是资源最多更新最快的磁力链接搜索引擎，提供BT种子搜索、磁力搜索功能，你可以使用迅雷，百度云盘，360云盘下载。是您必备种子搜索下载神器。" />
  <title>有种的网站</title> 
  <meta http-equiv="Cache-Control" content="no-transform " />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta name="applicable-device" content="pc,mobile">
  <link type="text/css" rel="stylesheet" href="/css/custom.css?v=0.000041" />
 </head> 
 <body>
 <a href="javascript:scrollTo(0, 0);" class="gototop"><span>︿</span><br />TOP</a>
  <div class="wrapper">
  <div class="topnav">
  <div class="mininav">
    <a href="/" target="_blank"><img src="/images/top_rank.png" alt="top_rank" />种子排行榜</a>
    <a href="/" target="_blank"><img src="/images/hot.png" alt="day_rank" />24小时热门</a>
    <a href="/" target="_blank"><img src="/images/day_hot.png" alt="week_rank" />一周热门</a>
    <a href="/" target="_blank"><img src="/images/girl.png" alt="磁力番号" />磁力番号</a>
    <a href="/" target="_blank"><img src="/images/clock.png" alt="hotsearch" />最新收录</a>
    <span class="fr lg">
    
    <a href="/" class="hidden-xs sc"><img src="/images/star.png" alt="save" />保存到桌面</a>
    </span>
  </div>
  </div>
  
<div class="mt15"></div>
  
    <div class="ppwrapper">
    <div class="searchbox">
      <form action="" name="search" id="searchFrom" method="get">
        <div class="search">
          <div class="ssbtn"><button value="碰碰运气" type="submit" >碰碰运气</button></div>
          <div class="word" >
            <input type="text" id="search" value="" name="name" placeholder="请输入电影、游戏、软件、番号、种子哈希等资源名称.." autocomplete = "on" autofocus="autofocus"></div>
        </div>
      </form>
    </div>
    
<div class="msg">新设计，超大索引数据库，持续更新中，欢迎大家使用！<br/>搜索最新支持输入种子INFOHASH（种子哈希）值进行搜索，赶快尝试吧。<br/>本站已经收录<b class="red">BT种子/磁力链接</b>资源总数<strong>{{$total}}</strong>个，今日收录 33,710个！</div>

        <div class="tbox">
          <div class="ffbox">
            <div class="title"><h3><img src="/images/hot.png" alt="hot" />磁力链接 | <a href="/" target="_blank">更多>></a></h3>
                </div>
                <div class="filelist">
                  <ul>
                    @foreach($collects as $index => $collect)
                    <li>
                        <a href="{{$collect->magnet}}">{{$index+1}}. {{$collect->name}}</a>
                    </li>
                    @endforeach
                  </ul>
            </div>
          </div>
        </div>
    </div>
  </div>

<div class="footer"><span>copyright © 2017 <a href="http://feikebt.com/index.html" rel="nofollow">有种的站网</a> 版权所有</span> <a href="">最新资源</a> </div>
</body>
</html>