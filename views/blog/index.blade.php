<div class="prime" style="padding: 10px 0px; text-align: center; margin-bottom: 30px; border-bottom: 1px dotted #bbb;">
    <h3>{{$title}}</h3>
</div>

<section class="blog row-fluid">
    <div class="span8 list">
        @foreach($data as $key=>$value)
        <article>
            <a href={{"'".URL::to("blog/".$value->slug)."'"}} class="navi-blog"><h4>{{$value->judul}}</h4></a>
            <p><small class="date"><i class="fa fa-calendar"></i> {{waktuTgl($value->updated_at)}}</small> </p>
            {{shortDescription($value->isi,300)}}
            <p><a href={{"'".URL::to("blog/".$value->slug)."'"}} class="theme">Baca Selengkapnya →</a></p>
        </article>
        @endforeach
        

        <div class="pagination pagination-centered">
          {{$data->links()}}
        </div>

    </div>

    <div class="span4 sidebar">
        <aside style="padding-top: 10px;">
            <p class="title-sidebar"><i class="fa fa-rss"></i> Artikel Baru</p>
            <ul>
                @foreach(recentBlog() as $recent)
                <li><a href="{{URL::to('blog/'.$recent->slug)}}">{{$recent->judul}}</a><br /><small>diposting tanggal {{waktuTgl($recent->updated_at)}}</small></li>
                @endforeach
            </ul>
        </aside>

        <aside class="clearfix tags">
            <p class="title-sidebar"><i class="fa fa-tag"></i> Kategori</p>
            @foreach($categoryList as $key=>$value)
                <span style="text-decoration: underline;"><a href="{{URL::to('blog/category/'.generateSlug($value))}}">{{$value->nama}}</a></span>
            @endforeach
        </aside>
    </div>
</section>