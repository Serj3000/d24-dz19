perPage()
{{$single->perPage()}}
currentPage()
{{$single->currentPage()}}
firstItem()
{{$single->firstItem()}}
lastItem()
{{$single->lastItem()}}
total()
{{$single->total()}}
count()
{{$single->count()}}
hasMorePages()
{{$single->hasMorePages()}}
<br>

{{$single}}

<h2>$modelPostPagin ('posts')</h2>
    <pre>
        <?php var_dump($modelPostPagin->total())?>
    </pre>

<h2>foreach($modelPostPagin as $postPagin) ('posts')</h2>
    @foreach($modelPostPagin as $postPagin)
        {{-- {{$postPagin}} --}}
        <pre>
        <?php var_dump($postPagin)?>
        </pre>
    @endforeach


<h2>$fasadDB ('posts')</h2>
    @foreach($fasadDB as $fasad)
        {{-- {{$fasad->id}} --}}
        <?php //var_dump($fasad)?>
    @endforeach
    {{-- {{$fasadDB}} --}}
<br><br><br>
<h2>$modelPost ('posts')</h2>
    @foreach($modelPost as $model)
        {{-- {{$model->id}} --}}
    @endforeach