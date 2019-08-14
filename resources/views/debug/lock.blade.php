<pre>
    @php
        use \Carbon\Carbon;

        $lock = Carbon::create(2017, 9, 23, 15, 39, 35);
        var_dump($lock);
        $now = Carbon::now();
        var_dump($now);
        $locked = $lock->copy()->addHours(2);
        var_dump($locked);

        var_dump($now->gte($locked));
    @endphp
</pre>