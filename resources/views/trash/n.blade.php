
{{$usera}}
<br>
<br>
<table width="100%">
<tr>
    <th width="50%">$taga = DB::table('posts')->get();</th>
    <th width="50%">$tagy = \App\Post::get();</th>
</tr>
<tr>
    <td><?php var_dump($taga);?></td>
    <td><?php var_dump($tagy);?></td>
</tr>
</table>