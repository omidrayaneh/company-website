@foreach($menus as $sub_menu)
    <tr class="text-center" >
        <td>#</td>
        <td class="text-left">{{str_repeat(' - ', $level)}}{{$sub_menu->title}}</td>
        <td>
            @if($sub_menu->status)
                <span class="badge badge-success float-center">{{__('Enable')}}</span>
            @else
                <span class="badge badge-danger float-center">{{__('Disable')}}</span>
            @endif
        </td>
        <td>{{Morilog\Jalali\Jalalian::fromDateTime($sub_menu->created_at)}}</td>
        <td>
            <div class="text-center">
                <a href="{{route('menus.edit',$sub_menu->slug)}}" data-toggle="tooltip"
                   data-title="{{__('Edit')}}">
                    <span class="fa fa-edit blue"></span>
                </a>
                |

                <a href="#" data-id="{{ $sub_menu->slug }}" class="deleteRecord" data-toggle="tooltip"
                   data-title="{{__('Delete')}}">
                    <span class="fa fa-trash red"></span>
                </a>
                <input type="hidden" id="user_id" value="{{$sub_menu->slug}}">
                <form action="{{ route('menus.destroy',  $sub_menu->slug) }}" id="delete-form"
                      method="post">
                    @csrf
                    @method('DELETE')

                </form>
            </div>
        </td>
    </tr>
    @if(count($sub_menu->childrenRecursive) > 0)
        @include('admin.layouts.partials.menus.list', ['menus' => $sub_menu->childrenRecursive, 'level' => $level+1])
    @endif
@endforeach
