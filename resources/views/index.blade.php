<!DOCTYPEHTML>
<html>
<body>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>question</th>
        <th>answer</th>
    </tr>
    </thead>
    <tbody>
    @foreach($questions as $question)
    <tr>
        <td>{{$question->id}}</td>
        <td>{{$question->question}}</td>
        <td>{{$question->answer}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
