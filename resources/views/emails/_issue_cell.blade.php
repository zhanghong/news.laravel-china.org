

    <h3 style="margin:24px 0 12px 0;border-bottom:1px solid #e0e0e0;padding-bottom:6px;color:#555;font-size:16px">{{ $section_title }}</h3>

    @foreach ($posts as $post)
        <h4 style="margin:0;margin-bottom:6px;margin-top:6px">
            <a style="font-size:14px;line-height:22px;font-weight:bold;text-decoration:none;color:#259;border:none;outline:none" href="{{ route('posts.show', [$post->id]) }}" target="_blank">{{ $post->title }}</a>

            <a href="{{ $post->user->personal_website }}" target="_blank"><small>{{ $post->user->name }}</small></a>
        </h4>
        <p style="margin:0;font-size:13px;line-height:20px;padding-bottom:10px;border-bottom:1px dotted #eee">{{ $post->excerpt }}</p>
    @endforeach

    @foreach ($links as $link)
        <h4 style="margin:0;margin-bottom:6px;margin-top:6px">
            <a style="font-size:14px;line-height:22px;font-weight:bold;text-decoration:none;color:#259;border:none;outline:none" href="{{ $link->link }}" target="_blank">{{ $link->title }}</a>

            <a href="{{ $link->user_link }}" style="padding-left: 12px;color: #4a79b7;"><small>{{ $link->user_name }}</small></a>
        </h4>
        <p style="margin:0;font-size:13px;line-height:20px;padding-bottom:10px;border-bottom:1px dotted #eee">{{ $link->description }}</p>
    @endforeach