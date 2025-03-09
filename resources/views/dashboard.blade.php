<x-app-layout>
<div>
    <div>
        @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

    </div>
    <form action="">
        <h1>New Post</h1>
        <label for="">Title</label> <br>
        <input type="text" name="title" id=""> <br>
        <label for="">Content</label> <br>
        <textarea name="content" id="content" cols="60" rows="10"></textarea> <br>
        <button type="submit">Send Message</button>
    </form>
</div>
</x-app-layout>
