<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.css" integrity="sha256-YVY0cgMlN3Yk6z5+sLnD90gFlKARWzjDwWSnReb0ATI=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.polyfilled.min.js" integrity="sha256-Sdu0acpXTwRu5nAKbHFx1nfYiyTCycheoKP4YwWMuGs=" crossorigin="anonymous"></script>

<div class="plyr__video-embed" id="video">
    <iframe
        src="https://www.youtube.com/embed/{{ $episode->file_name }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
        allowfullscreen
        allowtransparency
        allow="autoplay"
    ></iframe>
</div>

<script>const video = new Plyr("#video");</script>
