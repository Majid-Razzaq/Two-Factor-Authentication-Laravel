<x-guest-layout>


    <form action="{{ route('two-factor.verify') }}" method="post">
        @csrf
        <label for="code">Two-factor Code</label>
        <input type="text" name="code" id="code" required>
        <button type="submit" style="height: 40px; border-radius:7px; width: 70px; color:aliceblue; background-color: blue">verify</button>
    </form>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color: red">{{ $error }}</p>
            @endforeach
        </div>
        
    @endif

</x-guest-layout>