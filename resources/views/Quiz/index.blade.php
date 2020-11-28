<form  method="post"  action="/answer">
    @csrf
    @foreach ($quizzes as $quiz)
        <h1> The Question is : {{ $quiz->question }}</h1> <br>
        Your Answers are : <br>
        <select name="a_{{$quiz->id}}" id="{{$quiz->id}}">
            <option value="0" selected><br></option>
            <option value="{{$quiz->trueans == 1}}" >{{ $quiz->ans1 }}</option>
            <option value="{{$quiz->trueans == 2}}">{{ $quiz->ans2 }}</option>
            <option value="{{$quiz->trueans == 3}}">{{ $quiz->ans3 }}</option>
            <option value="{{$quiz->trueans == 4}}">{{ $quiz->ans4 }}</option>
        </select>
        <br><br>
        <div>------------------------------------------</div>
    @endforeach
    <input type="submit" value="ok">
</form>
