<div>
    <h2 class="label label-secondary">Department Name: {{$d->d_name}}</h2>
    <h2 class="label label-secondary">Department ID: {{$d->department_id}}</h2>
</div>
@if(count($d->students)>0)
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Id</th>
    </tr>
    @foreach($d->students as $s)
    <tr>
        <td>{{$s->s_name}}</td>
        <td>{{$s->s_id}}</td>
    </tr>
    @endforeach
</table>
@else
<span class="label label-info">No Student found </span>
@endif

<h2>Offered Course & Details</h2>
@if(count($d->courses)>0)
    @foreach($d->courses as $c)
        <h2>Course Name: {{$c->c_name}}</h2>
        @if(count($c->teachers)>0)
            @foreach ($c->teachers as $t)
                @foreach ($t->teacher1 as $t1)
                    <h3>Course Faculty: {{$t1->t_name}}</h3>
                @endforeach
            @endforeach
        @else
            <span class="label label-info">No Teacher found </span>
        @endif
        <h3>Studet List</h3>
        @if(count($c->students)>0)
            @foreach ($c->students as $s)
                @foreach ($s->student1 as $s1)
                    <h3>{{$s1->s_name}}</h3>
                @endforeach
            @endforeach
        @else
            <span class="label label-info">No Student found </span>
        @endif
    @endforeach

@else
    <span class="label label-info">No Course found </span>
@endif


