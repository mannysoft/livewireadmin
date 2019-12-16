


<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $this->count }}</h1>
    <button wire:click="decrement">-</button>
</div>




<div>
    @foreach ($users as $user)
        {{ $user->name }} <br>
    @endforeach
</div>


<div class="col-md-8">

<input type="text" wire:model="name">
    Hi! My name is {{ $this->name }}
</div>


@push('scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        // Your JS here.
    })
</script>
@endpush