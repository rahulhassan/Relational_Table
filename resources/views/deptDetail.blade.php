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
