<div class="avatar-group">
    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
       data-original-title="{{ fullName( get_ref_create($type , $type_id)->user_id ) }}">
        <img alt="Image placeholder" src="{{ asset(userPic(get_ref_create($type , $type_id)->user_id)) }}">
    </a>
    @foreach( $persons as $referr )
        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
           data-original-title="{{ fullName($referr->to) }}">
            <img alt="Image placeholder" src="{{ asset(userPic($referr->to)) }}">
        </a>
    @endforeach
</div>
