@auth
    <div class="toolbar" style="padding: 9px 0 8px;background: #1b1b1b;border-bottom: 1px solid #000;font-size: 12px;line-height: 14px;color: #fff;">
        <div class="inner-wrapper">
            <span>Welcome, {{ Auth::user()->name }}!</span>
        </div>
    </div>
@endauth