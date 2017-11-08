<div class="col-md-6">
    @include ('components.season.summary', ['summary' => $season->summary])
</div>
<div class="col-md-6">
    @include ('components.season.calendar', ['season' => $season])
</div>
