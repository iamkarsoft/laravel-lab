@props([
    'type'=>'sucess',
    'colors'=>[
        'success'=>'bg-green-400',
        'error'=>'bg-red-400',
        'warning'=>'bg-yellow-400'
    ]
    ])
<section class="{{ $attributes->merge(['class'=>"{$colors[$type]} border-b p-4"])}}">
    <section class="flex justify-between">
        <p>{{$slot}}</p>
        <button>&times</button>
    </section>
</section>
