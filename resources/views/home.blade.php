@if($num%2==0)
    <h1>Even Number {{ $num }}</h1>

@else

    <h1>Odd Number {{ $num }}</h1>

@endif

@switch($myClr)

    @case("red")
        <h1>Red Color Content {{ $myClr }}</h1>
    @break;

    @case("blue")
        <h1>Blue Color Content {{ $myClr }} </h1>
        @break;
        
    @case(3)
        <h1>Green Color Content {{ $myClr }} </h1>
    @break;

    @default
        <h1>Has no color</h1>
@endswitch


@for($i=0;$i<10;$i++)
    <button onclick="myBtn('{{ $i }}')">btn {{ $i }}</button>

@endfor

<script>
    function myBtn(e){
        alert("Click Me "+ e);
    }
</script>

<br> <br>

@foreach($username as $usName)

{{ $usName }}

@endforeach

<br> <br>

<select>
@foreach($countryName as $country)
{{ $country }}

<option value="">{{ $country }}</option>

@endforeach
</select>

<br> <br>

{{ $i=0 }}

@while($i<10)

<h1>Hello</h1>
{{ $i++ }}
@endwhile

<br> <br>

@while($num<=10)
<h1>Hello</h1>
{{ $num++ }}

@endwhile
