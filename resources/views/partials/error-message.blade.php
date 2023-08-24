@if ($errors->any())
<div style="margin-left: 280px;margin-top: 10px;">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

</div>
@endif
