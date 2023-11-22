<style>
    .section_title_main {
        font-weight: bold;
        font-size: calc(var(--textXJumbo) + var(--textSM));
        border-bottom: 2px solid var(--darkColor);
        display: inline-block;
        text-transform: capitalize;
        margin-bottom: var(--spaceLG);
    }
    .section_subtitle_main {
        font-weight: 500;
        font-size: var(--textJumbo);
    }
</style>
<div class="section_title_main">{{$title}}</div>
@if(isset($subtitle))
    <div class="section_subtitle_main">{{$subtitle}}</div>
@endif