<div class="prime" style="padding: 10px 0px; text-align: center; margin-bottom: 30px; border-bottom: 1px dotted #bbb;">
    <h3>{{$detailblog->judul}}</h3>
    <p><span class="date"><i class="fa fa-calendar"></i> {{date("d M Y", strtotime($detailblog->updated_at))}} <i class="fa fa-tag"></i> <a href="{{URL::to('blog/category/'.$detailblog->kategori->nama)}}" class="navi-blog">{{$detailblog->kategori->nama}}</a></span></p>
</div>

<div class="row-fluid post">
    <div class="span8">
        <article style="padding-bottom: 30px;">
            <p>{{$detailblog->isi}}</p>
        </article>
        <hr>
        <div class="share" style="margin-bottom: 65px;">
            <div id="twitter" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}} | " data-title="Tweet"></div>
            <div id="facebook" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}}" data-title="Like"></div>
            <div id="googleplus" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}}" data-title="+1"></div>
            <div id="delicious" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}}"></div>
            <div id="stumbleupon" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}}"></div>
        </div> 
        <br>
        <hr>
        <div>
            {{$fbscript}}
            {{fbcommentbox(URL::to("blog/".$detailblog->slug), '100%', '5', 'light')}}
        </div>

        <div class="navigate comments clearfix">
            @if(isset($prev))
                <div class="pull-left"><a href="{{$prev->slug}}" class="navi-blog">&larr; Sebelumnya</a></div>
            @else
                <div class="pull-right"></div>
            @endif

            @if(isset($next))
                <div class="pull-right"><a href="{{$next->slug}}" class="navi-blog">Selanjutnya &rarr;</a></div>
            @else
                <div class="pull-right"></div>
            @endif
        </div>
        <hr />

    </div>
    <div class="span4 sidebar">
        <aside>
            <p class="title-sidebar"><i class="fa fa-rss"></i> <strong>Artikel Terbaru</strong></p>
            <ul>
                @foreach(recentBlog($detailblog) as $recent)
                <li><a href="{{URL::to('blog/'.$recent->slug)}}">{{$recent->judul}}</a><br /><small>diposting tanggal {{waktu($recent->updated_at)}}</small></li>
                @endforeach
            </ul>
        </aside>

        <aside class="clearfix tags">
            <p class="title-sidebar"><i class="fa fa-tag"></i> <strong>Tags</strong></p>
            
            {{ getTags('<span style="text-decoration: underline;"></span>',$tag)}}                      
        </aside>
    </div>

</div>