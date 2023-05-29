<h2>PHP Word</h2>

<form method="POST" action="{{ route('word.tes') }}">
    @csrf
    <input type="text" name="nama">
    <input type="submit" value="submit">

</form>
