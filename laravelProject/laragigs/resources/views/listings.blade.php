
<h1>
    
        {{$headings}}
    
</h1>



@foreach($listings as $value)



<h2>
    
        {{$value['title']}}
    
</h2>

<p>
    
        {{$value['description']}}
    
</p>




@endforeach

