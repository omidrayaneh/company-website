@if(isset($selected_menu))
    @foreach($menus as $sub_menu)
        <option value="{{$sub_menu->id}}" @if($selected_menu->parent_id == $sub_menu->id) selected @endif>{{str_repeat(' - ', $level)}} {{$sub_menu->title}}</option>
        @if(count($sub_menu->childrenRecursive) > 0)
            @include('$admin.layouts.partials.menus', ['menus' => $sub_menu->childrenRecursive, 'level' => $level+1, 'selected_menu'=>$selected_menu])
        @endif
    @endforeach
@else
    @foreach($menus as $sub_menu)
        <option value="{{$sub_menu->id}}">{{str_repeat(' - ', $level)}} {{$sub_menu->title}}</option>
        @if(count($sub_menu->childrenRecursive) > 0)
            @include('admin.layouts.partials.menus.index', ['menus' => $sub_menu->childrenRecursive, 'level' => $level+1])
        @endif
    @endforeach
@endif
