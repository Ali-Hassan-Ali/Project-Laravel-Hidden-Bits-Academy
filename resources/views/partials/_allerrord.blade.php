@if ($errors->any())
    <div class="bg-danger py-2" style="background: red;">
        @foreach ($errors->all() as $error)
            <p class="mx-2">{{ $error }}</p>
        @endforeach
    </div>
@endif